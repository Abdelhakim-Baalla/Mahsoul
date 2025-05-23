<?php

namespace App\Repositories\Interfaces;

interface OrderItemRepositoryInterface
{
    public function creerOrderItem(array $data);
    
    public function getOrderItemById(int $id);
    
    public function modifierOrderItem(int $id, array $data);
    
    public function supprimerOrderItem(int $id);
    
    public function getAllCommandes();

    public function getOrderItemByCommandeId(int $id);

    public function getQuantityByProduitId(int $id, int $commande);
    
}