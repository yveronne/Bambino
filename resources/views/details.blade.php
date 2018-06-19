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
                <div class="col-md-6" id="productDetailsDiv">
                    <br>
                    <div class="row">
                        <div class="col-md-6 detailsLabel">NOM DU PRODUIT</div>
                        <div class="col-md-6">{{$product->NOM}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 detailsLabel">CATEGORIE</div>
                        <div class="col-md-6">{{$product->categorie->NOMCATEGORIE}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 detailsLabel">PRIX</div>
                        <div class="col-md-6" id="priceLabel">{{$product->PRIX}} F CFA</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 detailsLabel">EN STOCK</div>
                        <div class="col-md-6">{{$product->QUANTITE}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 detailsLabel">DESCRIPTION</div>
                        <div class="col-md-6">{{$product->DESCRIPTION}}</div>
                    </div>
                    <a class="btn btn-mine modal-trigger" href="#addToCartModal">Ajouter au panier</a>

                    <div id="addToCartModal" class="modal col-md-4">
                        <div class="modal-title">AJOUTER AU PANIER</div>
                        <div class="modal-content">
                            <form action="{{url('/cart')}}" method="POST">
                                {{csrf_field()}}
                                <input type="hidden" id="id" name="id" value="{{$product->CODEPRODUIT}}">
                                <div class="input-field">
                                    <input type="text" id="product" name="product" value="{{$product->NOM}}" readonly="readonly">
                                    <label for="product">Article</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" readonly="readonly" id="category" name="category" value="{{$product->categorie->NOMCATEGORIE}}">
                                    <label for="category">Catégorie</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" id="price" name="price" value="{{$product->PRIX}}" readonly="readonly">
                                    <label for="price">Prix unitaire en F CFA</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" id="quantity" name="quantity" placeholder="En stock: {{$product->QUANTITE}}">
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