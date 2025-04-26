<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\TagRepositoryInterface;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $tagRepository;

    public function __construct(TagRepositoryInterface $tagRepository)
    {
        $this->tagRepository = $tagRepository;
    }

    public function tagsIndex()
    {
        $tags = $this->tagRepository->getAllTags();
        if ($tags->isEmpty()) {
            return redirect()->route('admin.tags.create');
        }
        return view('admin.tags.index', compact('tags'));
    }

    public function tagCreate()
    {
        return view('admin.tags.create');
    }

    public function tagStore(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255|unique:tags,nom|min:3',
        ]);
        $this->tagRepository->ajouterTag($validated['nom']);
        return redirect()->route('admin.tags.index')->with('success', 'Tag ajouter avec succès !');
    }

    public function tagUpdate(Request $request)
    {
        $tag = [
            'id' => $request->id,
            'nom' => $request->nom
        ];

        return view('admin.tags.update', compact('tag'));
    }

    public function tagUpdateStore(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer',
            'nom' => 'required|string|max:255|unique:tags,nom,'
        ]);

        $data = [
            'nom' => $validated['nom']
        ];

        $this->tagRepository->modifierTag($validated['id'], $data);
        return redirect()->route('admin.tags.index')->with('success', 'Tag modifier avec succès !');
    }

    public function tagDelete(Request $request){
        $validated = $request->validate([
            'id' => 'required|integer'
        ]);

        $this->tagRepository->supprimerTag($validated['id']);
        return redirect()->route('admin.tags.index')->with('success', 'Tag supprimé avec succès !');
    }
}
