<?php

namespace App\Repositories\Interfaces;

interface ProduitRepositoryInterface
{
    public function ajouterproduit(array $data);
    public function retirerDuStock(int $produit_id, float $quantite);
    public function getProduitById(int $id);
    public function getAllProduits();
    public function getProduitsEnStock();
    public function getProduitsEpuises();
    public function countProduit();
    public function getAllProduitsClient();
    public function modifierProduit(int $id, array $data);
    public function deleteProduits(int $id);
}