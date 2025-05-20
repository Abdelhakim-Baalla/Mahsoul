<?php

namespace App\Repositories;

use App\Models\OrderItem;
use App\Repositories\Interfaces\OrderItemRepositoryInterface;

class OrderItemRepository implements OrderItemRepositoryInterface
{
    public function creerOrderItem(array $data){
        return OrderItem::create($data);
    }
    
    public function getOrderItemById(int $id){

    }

    public function getOrderItemByCommandeId(int $id){
        return OrderItem::get()->where('commande', $id);
    }

    public function getQuantityByProduitId(int $id, int $commande)
    {
        return OrderItem::get()->where('produit', $id)->where('commande', $commande);
    }
    
    public function modifierOrderItem(int $id, array $data){

    }
    
    public function supprimerOrderItem(int $id){

    }
    
    
    public function getAllCommandes(){
        
    }
    
    
}