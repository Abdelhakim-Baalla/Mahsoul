<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\CategorieRepositoryInterface;
use App\Repositories\Interfaces\ProduitRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $produitRepository;
    protected $categorieRepository;
    
    public function __construct(ProduitRepositoryInterface $produitRepository, CategorieRepositoryInterface $categorieRepository)
    {
        $this->produitRepository = $produitRepository;
        $this->categorieRepository = $categorieRepository;
    }

    public function index(){
        $products = $this->produitRepository->getAllProduitsClient();
        // dd($products);
        if (empty($products)) {
            return view('products.index', ['products' => []]);
        }
        foreach ($products as $product){
            // dd($product->categorie);
            $categorie = $this->categorieRepository->getCategorieById($product->categorie);
            if ($categorie) {
                $product->categorie = $categorie->nom;
            } else {
                $product->categorie = 'Unknown';
            }
            // dd($product->categorie);
        }
        return view('products.index', compact('products'));
    }
}
