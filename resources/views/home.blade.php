@extends('layouts.layout')

@section('title', 'Bienvenue sur Bambino')

@section('tabs')
    <ul class="tabs tabs-transparent">
        <li class="tab"><a href="{{url('/')}}" class="active">Accueil</a></li>
        <li class="tab"><a href="{{url('/categories')}}" target="_self">Nos catégories</a></li>
        <li class="tab"><a href="{{url('/products')}}" target="_self">Nos produits</a></li>
    </ul>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <img src="{{asset('images/Aden-Anais-Layette-Collection.jpg')}}" class="d-block w-100 img-fluid">
        </div>
    </div>
    <br>
    <div class="row justify-content-md-center">
        <div class="col-md-4">
            <h5 id="homeTitle">LES ARTICLES RECENTS</h5>
        </div>
    </div>

    <div class="row">
        @foreach($products as $product)
            <div class="col-md col-sm-6 homeCard">
                {{--<img src="{{$product->firstPicture()}}" class="img-fluid">--}}
                <img src="{{$product->firstPicture()}}" class="img-fluid">
                <h6>{{$product->NOM}}</h6>
                <h6>{{$product->categorie->NOMCATEGORIE}}</h6>
                <h6>{{$product->PRIX}} F CFA</h6>
                <a class="btn btn-mine" href="{{route('products.details', [$product->CODEPRODUIT])}}">Détails</a>
            </div>
        @endforeach
    </div>


    <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4">
            <a class="btn btn-mine" href="{{url('/products')}}"><i class="material-icons right">keyboard_arrow_right</i>TOUS LES ARTICLES</a>
        </div>
    </div>


@endsection