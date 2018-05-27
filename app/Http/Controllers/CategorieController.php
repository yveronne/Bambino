<?php

namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    //
    public function index(){
        $categories = Categorie::all();
        return view('categories', compact('categories'));
    }
}
