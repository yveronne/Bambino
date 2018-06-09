<?php

namespace App\Http\Controllers;

use App\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    //

    public function recent(){

        $products = Produit::all()->take(4);
        return view('home', compact('products'));
    }

    public function index(){

        $products = Produit::paginate(12);
        return view('products', compact('products'));
    }

    public function details(Produit $product){
        $product = Produit::findOrFail($product->CODEPRODUIT);
        return view('details', compact('product'));
    }

}
