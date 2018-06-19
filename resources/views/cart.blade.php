@extends('layouts.layout')

@section('title', 'Mon panier - Bienvenue sur Bambino')

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
            <a href="" class="actualBreadcrumb">Mon panier</a>
        </div>
    </div>

    <div class="row content">
        <div class="col-md-12">
            <h5>MON PANIER</h5>
            {{$_COOKIE[1]}}
            <table class="table table-responsive w-auto">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom de l'article</th>
                        <th>Prix unitaire</th>
                        <th>Quantité</th>
                        <th>Total</th>
                        <th>Retirer du panier</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><i class="material-icons">delete</i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection