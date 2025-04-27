<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\TagRepositoryInterface;
use App\Repositories\Interfaces\ArticleRepositoryInterface;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $tagRepository;
    private $articleRepository;

    public function __construct(TagRepositoryInterface $tagRepository, ArticleRepositoryInterface $articleRepository)
    {
        $this->tagRepository = $tagRepository;
        $this->articleRepository = $articleRepository;
    }

    public function getAdminById(int $id)
    {
        return $this->articleRepository->getAdminById($id);
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function getUtilisateurAdminById(int $id)
    {
        return $this->articleRepository->getUtilisateurAdminById($id);
    }

    public function articlesIndex()
    {
        $articles = $this->articleRepository->getAllArticles();
        $categorie = $this->articleRepository->getCategorieById(1);
        $categorieNom = $categorie->nom;
        if ($articles->isEmpty()) {
            return redirect()->route('admin.articles.create');
        }

        foreach ($articles as $article) {
            $backgroundColors = ['000000', 'FF5733', '4CAF50', 'FFC107', '3F51B5', 'E91E63'];
            $textColors = ['FFFFFF', '000000', 'FF5733', '4CAF50', 'FFFFFF', '3F51B5'];

            $backgroundColor = $backgroundColors[array_rand($backgroundColors)];
            $textColor = (in_array($backgroundColor, ['000000', '4CAF50', '3F51B5'])) ? 'FFFFFF' : '000000';

            $encodedTitle = urlencode($article->titre);
            $imageUrl = $article->photo;

            if (empty($imageUrl)) {
                $imageUrl = "https://placehold.co/600x400/$backgroundColor/$textColor?text=$encodedTitle";
               
            }
                $imageExists = @getimagesize($imageUrl);
            

            if ($imageExists) {
                $article->photo = $imageUrl;
            } else {
                $article->photo = "https://placehold.co/600x400/$backgroundColor/$textColor?text=$encodedTitle";
            }
        }

        $admin = $this->getAdminById($articles->toArray()['data'][0]['auteur']);
        $Utilisateuradmin = $this->getUtilisateurAdminById($articles->toArray()['data'][0]['auteur']);
      
        return view('admin.articles.index', compact('articles', 'admin', 'Utilisateuradmin', 'categorieNom'));
    }

    public function articlesCreate()
    {
        return view('admin.articles.create');
    }

    public function articlesStore(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
            'photo' => 'required|string',
            'categorie' => 'required|string',
            'statut' => 'required|string',
        ]);

        $this->articleRepository->creeArticle($validated);
        return redirect()->route('admin.articles.index')->with('success', 'Article ajouter avec succès !');
    }

    public function articlesUpdate()
    {
        return view('admin.articles.update');
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

    public function tagDelete(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer'
        ]);

        $this->tagRepository->supprimerTag($validated['id']);
        return redirect()->route('admin.tags.index')->with('success', 'Tag supprimé avec succès !');
    }
}
