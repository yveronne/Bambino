<?php

namespace App\Http\Controllers;

use App\Produit;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function addToCart(Produit $product, Request $request){
        $quantity = $request->get('quantity');
        $_COOKIE = [$product, $quantity];
        return view('cart')->cookie;

    }
}
