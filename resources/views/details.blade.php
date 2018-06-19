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

                    <div id="addToCartModal" class="modal col-md-4">
                        <div class="modal-title">AJOUTER AU PANIER</div>
                        <div class="modal-content">
                            <form action="{{route('addToCart', ['product'=>$product])}}" method="POST">
                                {{csrf_field()}}
                                <div class="input-field">
                                    <input type="text" id="product" value="{{$product->NOM}}" disabled="disabled">
                                    <label for="product">Article</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" disabled="disabled" id="category" value="{{$product->categorie->NOMCATEGORIE}}">
                                    <label for="category">Catégorie</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" id="price" value="{{$product->PRIX}} F CFA" disabled="disabled">
                                    <label for="price">Prix unitaire</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" id="quantity" placeholder="En stock: {{$product->QUANTITE}}">
                                    <label for="quantity">Quantité</label>
                                </div>
                                <button class="btn btn-mine" type="submit">Ajouter au panier</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection