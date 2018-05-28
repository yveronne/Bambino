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
    <?php $i=0; ?>

    <div class="row myBreadcrumb align-items-center">
        <div class="col-md-12">
            <a href="{{url('/')}}" >Accueil</a> >
            <a href="{{url('/categories')}}" class="actualBreadcrumb">Nos catégories</a>
        </div>
    </div>

    <div class="row content">
        <div class="col-md-12">
            <h5>Les catégories</h5>

            @foreach($categories as $category)
                @if($loop->index %3 ==0 )
                    <div class="row">
                        <div class="col-md myCard">
                            <img class="img-fluid" src="{{asset('images/categories/' .strtolower($category->NOMCATEGORIE). '.jpg')}}" onerror="this.onerror=null;this.src='{{asset('images/categories/no-picture-yet.jpg')}}';" />
                            <h6>{{$category->NOMCATEGORIE}}</h6>
                        </div>
                    @continue
                @endif
                @if($loop->index %3 != 0 && (($loop->index)+1) %3 !=0)
                    <div class="col-md myCard">
                        <img class="img-fluid" src="{{asset('images/categories/' .strtolower($category->NOMCATEGORIE). '.jpg')}}" onerror="this.onerror=null;this.src='{{asset('images/categories/no-picture-yet.jpg')}}';" />
                        <h6>{{$category->NOMCATEGORIE}}</h6>
                    </div>
                    @continue
                @endif
                @if($loop->index %3 != 0 && (($loop->index)+1) %3 ==0)
                            <div class="col-md myCard">
                                <img class="img-fluid" src="{{asset('images/categories/' .strtolower($category->NOMCATEGORIE). '.jpg')}}" onerror="this.onerror=null;this.src='{{asset('images/categories/no-picture-yet.jpg')}}';" />
                                <h6>{{$category->NOMCATEGORIE}}</h6>
                            </div>
                    </div>
                    @continue
                @endif
            @endforeach

        </div>
    </div>

@endsection