@extends('layouts.layout')

@section('title', 'Détails du produit - Bienvenue sur Bambino')

@section('tabs')
    <ul class="tabs tabs-transparent">
        <li class="tab"><a href="{{url('/')}}" target="_self">Accueil</a></li>
        <li class="tab"><a href="{{url('/categories')}}" target="_self">Nos catégories</a></li>
        <li class="tab"><a href="{{url('/products')}}" class="active">Nos produits</a></li>
    </ul>
@endsection

@section('content')

    <div class="row myBreadcrumb align-items-center">
        <div class="col-md-12">
            <a href="{{url('/')}}" >Accueil</a> >
            <a href="{{url('/products')}}">Nos produits</a> >
            <a href="{{url('/products/{product}')}}" class="actualBreadcrumb">{{$product->NOM}}</a>
        </div>
    </div>

    <div class="row content">
        <div class="col-md-12">
            <h5>Détails du produit</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-3" id="picturesThumbnail">
                            @foreach($product->pictures() as $picture)
                                <img src="{{$picture}}" alt="" class="img-fluid">
                            @endforeach
                        </div>
                        <div class="col-md-9">
                            <img src="{{$product->firstPicture()}}" alt="" class="img-fluid" id="picture">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h6>{{$product->NOM}}</h6>
                    <h6>{{$product->PRIX}}</h6>
                    <h6>{{$product->QUANTITE}}</h6>
                    <h6>{{$product->categorie->NOMCATEGORIE}}</h6>
                    <h6>{{$product->DESCRIPTION}}</h6>
                    <h6>{{$product->PRIX}}</h6>
                    <a class="btn btn-mine modal-trigger" href="#addToCartModal">Ajouter au panier</a>

                    <div id="addToCartModal" class="modal">
                        <div class="modal-content">
                            <h4>Modal Header</h4>
                            <p>A bunch of text</p>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection