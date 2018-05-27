@extends('layouts.layout')

@section('title', 'Nos catégories - Bienvenue sur Bambino')

@section('tabs')
    <ul class="tabs tabs-transparent">
        <li class="tab"><a href="{{url('/')}}" target="_self">Accueil</a></li>
        <li class="tab"><a href="{{url('/categories')}}" class="active">Nos catégories</a></li>
        <li class="tab"><a href="{{url('/products')}}" target="_self">Nos produits</a></li>
    </ul>
@endsection

@section('content')

    <div class="row myBreadcrumb align-items-center">
        <div class="col-md-12">
            <a href="{{url('/')}}" >Accueil</a> >
            <a href="{{url('/categories')}}" class="actualBreadcrumb">Nos catégories</a>
        </div>
    </div>

    <div class="row content">
        <div class="col-md-12">
            <h5>Les catégories</h5>
            <div class="row">
                <div class="col-md myCard">
                    <img src="images/culotte.jpg" class="img-fluid">
                    <h6>Culottes</h6>
                </div>
                <div class="col-md myCard">
                    <img src="images/robe.jpg" class="img-fluid">
                    <h6>Robes</h6>
                </div>
                <div class="col-md myCard">
                    <img src="images/grenouillere.jpg" class="img-fluid">
                    <h6>Grenouillères</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach($categories as $category)
            {{$category->NOMCATEGORIE}}
        @endforeach
    </div>

@endsection