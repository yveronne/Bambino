@extends('layouts.layout')

@section('title', 'Mon panier - Bienvenue sur Bambino')

@section('tabs')
    <ul class="tabs tabs-transparent">
        <li class="tab"><a href="{{url('/')}}" target="_self">Accueil</a></li>
        <li class="tab"><a href="{{url('/categories')}}" target="_self">Nos catégories</a></li>
        <li class="tab"><a href="{{url('/products')}}" target="_self">Nos produits</a></li>
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
            <h5>MON PANIER</h5><br>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered" id="cart">
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
                        @foreach(Cart::content() as $item)
                            <tr>
                                <th scope="row">{{$loop->index +1}}</th>
                                <td>{{$item->name}}</td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->qty}}</td>
                                <td>{{$item->price * $item->qty}}</td>
                                <td>
                                    <form action="{{route('cart.destroy', [$item->rowId])}}" method="POST">
                                        <input type="hidden" name="_method" value="delete">
                                        {{csrf_field()}}
                                        <a type="submit"><i class="material-icons">delete</i></a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7"></div>
                <div class="col-md-2">
                    <h6 class="cart">TOTAL</h6>
                </div>
                <div class="col-md-3">
                    <h6>{{Cart::subtotal(2,'.','')}} F CFA</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7"></div>
                <div class="col-md-2">
                    <h6 class="cart">REMISE</h6>
                </div>
                <div class="col-md-3">
                    <h6>0 %</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7"></div>
                <div class="col-md-2">
                    <h6 class="cart">NET A PAYER</h6>
                </div>
                <div class="col-md-3">
                    <h6 id="toPay">{{Cart::subtotal(2,'.',' ')}} F CFA</h6><br>
                    <a class="btn btn-mine modal-trigger" href="#payModal">Valider mes achats</a>
                </div>
            </div>

            <div id="payModal" class="modal col-md-5">
                <div class="modal-title">INFORMATIONS PERSONNELLES</div>
                <div class="modal-content">
                    <form action="{{url('/command')}}" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" id="amount" name="amount" value="{{Cart::subtotal(2,'.','')}}">
                        <div class="input-field">
                            <input type="text" id="name" name="name">
                            <label for="name">Votre nom</label>
                        </div>
                        <div class="input-field">
                            <input type="text" id="phone" name="phone">
                            <label for="phone">Votre numéro de téléphone</label>
                        </div>
                        <div class="form-group purple-border">
                            <label for="address">Votre adresse</label>
                            <textarea class="form-control" id="address" name="address" rows="2"></textarea>
                        </div>
                        <div class="form-group purple-border">
                            <label for="comments">Vos commentaires</label>
                            <textarea class="form-control" id="comments" name="comments" rows="2"></textarea>
                        </div>
                        <button class="btn btn-mine" type="submit">Valider mes achats</button>
                    </form>
                </div>
            </div>


        </div>
    </div>
@endsection