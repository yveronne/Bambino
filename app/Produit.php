<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class Produit extends Model
{
    //
    protected $table = 'produit';
    protected $primaryKey = 'CODEPRODUIT';

    public function categorie(){

        return $this->belongsTo('App\Categorie', 'IDCATEGORIE', 'IDCATEGORIE');
    }

    public function firstPicture(){
        $pictures = array();
        $files = Storage::files('public/photos/' .$this->CODEPRODUIT);

        foreach ($files as $file){
            $pictures[] = $file;
        }
        $delimiter = $this->CODEPRODUIT .'/';
        $array = explode($delimiter, $pictures[0]);
        $name = $array[1];
        $path = asset('storage/photos/' .$this->CODEPRODUIT. '/'. $name);
        return $path;
    }

    public function pictures(){
        $pictures = array();
        $files = Storage::files('public/photos/' .$this->CODEPRODUIT);

        foreach ($files as $file) {
            $array = explode($this->CODEPRODUIT . '/', $file);
            $name = $array[1];
            $path = asset('storage/photos/' . $this->CODEPRODUIT . '/' . $name);
            $pictures[] = $path;
        }

        return $pictures;
    }
}
