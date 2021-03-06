@extends('layouts.layout')

@section('title', 'Nos produits - Bienvenue sur Bambino')

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
            <a href="{{url('/products')}}" class="actualBreadcrumb">Nos produits</a>
        </div>
    </div>

    <div class="row content">
        <div class="col-md-12">
            <h5>Les produits</h5>
            <div class="row">
                <div class="col-md-3 containerDiv">
                    <h6>Filtrer:</h6>
                    <form>
                        <h6>Prix</h6>
                        <div class="form-group">
                            <label for="minPrice" class="sr-only">Prix minimum</label>
                            <input type="text" class="form-control" id="minPrice" placeholder="Prix minimum">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="maxPrice" class="sr-only">Prix maximum</label>
                            <input type="text" class="form-control" id="maxPrice" placeholder="Prix maximum">
                        </div>
                        <h6>Catégorie</h6>
                        <div>
                            <label for="categorySelect">Catégorie</label>
                            <select class="mdb-select" id="categorySelect">
                                <option value="" disabled selected>Choisissez la catégorie</option>
                                <option value="chaussures">Chaussures</option>
                                <option value="culottes">Culottes</option>
                                <option value="robes">Robes</option>
                            </select>

                        </div>
                    </form>
                </div>
                <div class="col-md-9">
                    <div class="row" >
                        <div class="col-md-12 containerDiv" >
                            <h6>Trier par:</h6>
                            <br>
                            <form>
                                <div>
                                    <label for="priceSelect">Prix</label>
                                    <select class="mdb-select" id="priceSelect">
                                        <option value="increasingPrice">Croissant</option>
                                        <option value="decreasingPrice">Décroissant</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="dateSelect">Date d'ajout</label>
                                    <select class="mdb-select" id="dateSelect">
                                        <option value="increasingDate">Croissante</option>
                                        <option value="decreasingDate">Décroissante</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row containerDiv">
                        <div class="col-md-12">
                            <div class="row">
                                @foreach($products as $product)
                                    @if($loop->index %3 ==0 )
                                        <div class="row">
                                            <div class="col-md col-sm-6 homeCard">
                                                <img src="{{$product->firstPicture()}}" class="img-fluid">
                                                <h6>{{$product->NOM}}</h6>
                                                <h6>{{$product->categorie->NOMCATEGORIE}}</h6>
                                                <h6>{{$product->PRIX}} F CFA</h6>
                                                <a class="btn btn-mine" href="{{route('products.details', [$product->CODEPRODUIT])}}">Détails</a>
                                        </div>
                                        @continue
                                        @endif
                                        @if($loop->index %3 != 0 && (($loop->index)+1) %3 !=0)
                                            <div class="col-md col-sm-6 homeCard">
                                                <img src="{{$product->firstPicture()}}" class="img-fluid">
                                                <h6>{{$product->NOM}}</h6>
                                                <h6>{{$product->categorie->NOMCATEGORIE}}</h6>
                                                <h6>{{$product->PRIX}} F CFA</h6>
                                                <a class="btn btn-mine" href="{{route('products.details', [$product->CODEPRODUIT])}}">Détails</a>
                                            </div>
                                            @continue
                                        @endif
                                        @if($loop->index %3 != 0 && (($loop->index)+1) %3 ==0)
                                            <div class="col-md col-sm-6 homeCard">
                                                <img src="{{$product->firstPicture()}}" class="img-fluid">
                                                <h6>{{$product->NOM}}</h6>
                                                <h6>{{$product->categorie->NOMCATEGORIE}}</h6>
                                                <h6>{{$product->PRIX}} F CFA</h6>
                                                <a class="btn btn-mine" href="{{route('products.details',[$product])}}">Détails</a>
                                            </div>
                                        </div>
                                        @continue
                                    @endif
                                @endforeach

                            <div class="row justify-content-md-center">
                                {{ $products->links() }}
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection