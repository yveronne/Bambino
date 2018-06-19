<?php

namespace App\Http\Controllers;

use App\Commande;
use App\LigneCommande;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CommandController extends Controller
{
    public function save(Request $request){

        $command = new Commande();

        $command->MONTANT = $request->amount;
        $command->NOMCLIENT = $request->name;
        $command->TELEPHONECLIENT = $request->phone;
        $command->ADRESSECLIENT = $request->address;
        $command->COMMENTAIRE = $request->comments;

        $command->save();
        $commandID = $command->IDCOMMANDE;

        foreach(Cart::content() as $item){

            $commandLine = new LigneCommande();

            $commandLine->IDCOMMANDE = $commandID;
            $commandLine->CODEPRODUIT = $item->id;
            $commandLine->QUANTITE = $item->qty;

            $commandLine->save();
        }
        Cart::destroy();
        return redirect('cart');
    }

    private function generatePDF(){

        $pdf = new \Mpdf\Mpdf();

    }
}
