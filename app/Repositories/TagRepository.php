<?php

namespace App\Repositories;

use App\Models\Tag;
use App\Repositories\Interfaces\TagRepositoryInterface;

class TagRepository implements TagRepositoryInterface
{
    public function ajouterTag(string $nom)
    {
        return Tag::create([
            'nom' => $nom
        ]);
    }

    public function getAllTags()
    {
        return Tag::paginate(7);
    }

    public function getTagById(int $id)
    {
        return Tag::find($id);
    }

    public function modifierTag(int $id, array $data)
    {
        $tag = $this->getTagById($id);
        return $tag->update($data);
    }

    public function supprimerTag(int $id) {
        $tag = $this->getTagById($id);
        return $tag->delete();
    }
}
