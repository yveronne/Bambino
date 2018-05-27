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
                        <div class="input-field">
                            <select>
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
                                <div class="input-field col-md-4">
                                    <select>
                                        <option value="increasingPrice">Croissant</option>
                                        <option value="decreasingPrice">Décroissant</option>
                                    </select>
                                    <label>Prix</label>
                                </div>
                                <div class="input-field col-md-4">
                                    <select>
                                        <option value="increasingDate">Croissante</option>
                                        <option value="decreasingDate">Décroissante</option>
                                    </select>
                                    <label>Date d'ajout</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row containerDiv">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md col-sm-6 homeCard">
                                    <img src="images/habit.jpg" class="img-fluid">
                                    <h6>Ensemble fillette 3 ans</h6>
                                    <h6>Vêtements</h6>
                                    <h6>15000 F CFA</h6>
                                    <a class="btn btn-mine">Détails</a>
                                </div>
                                <div class="col-md col-sm-6 homeCard">
                                    <img src="images/habit.jpg" class="img-fluid">
                                    <h6>Ensemble fillette 3 ans</h6>
                                    <h6>Vêtements</h6>
                                    <h6>15000 F CFA</h6>
                                    <a class="btn btn-mine">Détails</a>
                                </div>
                                <div class="col-md col-sm-6 homeCard">
                                    <img src="images/habit.jpg" class="img-fluid">
                                    <h6>Ensemble fillette 3 ans</h6>
                                    <h6>Vêtements</h6>
                                    <h6>15000 F CFA</h6>
                                    <a class="btn btn-mine">Détails</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md col-sm-6 homeCard">
                                    <img src="images/habit.jpg" class="img-fluid">
                                    <h6>Ensemble fillette 3 ans</h6>
                                    <h6>Vêtements</h6>
                                    <h6>15000 F CFA</h6>
                                    <a class="btn btn-mine">Détails</a>
                                </div>
                                <div class="col-md col-sm-6 homeCard">
                                    <img src="images/habit.jpg" class="img-fluid">
                                    <h6>Ensemble fillette 3 ans</h6>
                                    <h6>Vêtements</h6>
                                    <h6>15000 F CFA</h6>
                                    <a class="btn btn-mine">Détails</a>
                                </div>
                                <div class="col-md col-sm-6 homeCard">
                                    <img src="images/habit.jpg" class="img-fluid">
                                    <h6>Ensemble fillette 3 ans</h6>
                                    <h6>Vêtements</h6>
                                    <h6>15000 F CFA</h6>
                                    <a class="btn btn-mine">Détails</a>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col-md-4">
                                    <ul class="pagination">
                                        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                                        <li class="active"><a href="#!">1</a></li>
                                        <li class="waves-effect"><a href="#!">2</a></li>
                                        <li class="waves-effect"><a href="#!">3</a></li>
                                        <li class="waves-effect"><a href="#!">4</a></li>
                                        <li class="waves-effect"><a href="#!">5</a></li>
                                        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection