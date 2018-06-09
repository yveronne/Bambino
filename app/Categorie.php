<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //
    protected $table = 'categorie';
    protected $primaryKey = 'IDCATEGORIE';

    public function products(){

        return $this->hasMany('App\Produit', 'IDCATEGORIE');
    }

}
