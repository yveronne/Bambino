<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    //
    protected $table = 'produit';

    public function categorie(){

        return $this->belongsTo('App\Categorie', 'IDCATEGORIE', 'IDCATEGORIE');
    }

    public function firstPhoto(){
        //$path = storage_path('photos/' .$this->CODEPRODUIT. '/1.jpg');
        $path = asset('images/photos/' .$this->CODEPRODUIT. '/1.jpg');
        return $path;
    }
}
