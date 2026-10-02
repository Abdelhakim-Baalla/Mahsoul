<?php

namespace App\Repositories;

use App\Models\Produit;
use App\Repositories\Interfaces\ProduitRepositoryInterface;

class ProduitRepository implements ProduitRepositoryInterface
{
    public function ajouterproduit(array $data) {
        return Produit::create($data);

    }
    
    public function retirerDuStock(int $produit_id, float $quantite){

    }

    public function modifierProduit(int $id, array $data){
        $produit = $this->getProduitById($id);
        // dd($produit);
       return $produit->update([
            'nom' => $data['nom'],
            'categorie' => $data['categorie'],
            'description' => $data['description'],
            'prix' => $data['prix'],
            'quantite' => $data['quantite'],
            'unite_mesure' => $data['unite_mesure'],
            'en_stock' => $data['en_stock'],
            'image' => $data['image'],
            'vendeur' => $data['vendeur'],
        ]);
    }
    
    public function getProduitById(int $id){
        // return Produit::find($id);
        return Produit::get()->where('id', $id)->first();
    }
    
    public function getAllProduits(){
        return Produit::paginate(5);
    }

    public function getAllProduitsClient(){
        return Produit::paginate(8);
    }

    public function searchProduits(array $filters = [])
    {
        $query = Produit::query();

        if (!empty($filters['q'])) {
            $q = $filters['q'];
            $query->where(function ($w) use ($q) {
                $w->where('nom', 'like', "%{$q}%")
                  ->orWhere('description', 'like', "%{$q}%");
            });
        }

        if (!empty($filters['categorie'])) {
            $query->where('categorie', $filters['categorie']);
        }

        if (isset($filters['prix_min']) && is_numeric($filters['prix_min'])) {
            $query->where('prix', '>=', $filters['prix_min']);
        }

        if (isset($filters['prix_max']) && is_numeric($filters['prix_max'])) {
            $query->where('prix', '<=', $filters['prix_max']);
        }

        if (!empty($filters['en_stock'])) {
            $query->where('en_stock', true)->where('quantite', '>', 0);
        }

        switch ($filters['tri'] ?? 'recent') {
            case 'prix_asc':
                $query->orderBy('prix', 'asc');
                break;
            case 'prix_desc':
                $query->orderBy('prix', 'desc');
                break;
            default:
                $query->orderBy('created_at', 'desc');
        }

        return $query->paginate(8)->withQueryString();
    }
    
    public function getProduitsEnStock(){

    }
    
    public function getProduitsEpuises(){

    }

    public function deleteProduits(int $id){
        $produit = $this->getProduitById($id);
        $produit->delete();
    }
    public function countProduit(){
        return Produit::get()->count();
    }
    
}