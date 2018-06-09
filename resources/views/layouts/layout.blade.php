<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        {{--Fonts--}}
        <link rel="stylesheet" href="{{url('https://fonts.googleapis.com/css?family=Montserrat+Alternates')}}">
        <link rel="stylesheet" href="{{url('https://fonts.googleapis.com/css?family=Indie+Flower')}}">
        <link rel="stylesheet" href="{{url('https://fonts.googleapis.com/css?family=Lato')}}">
        {{--Material icons--}}
        <link rel="stylesheet" href="{{url('https://fonts.googleapis.com/icon?family=Material+Icons')}}">
        {{--Styles --}}
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/mdb.css')}}">
        <link rel="stylesheet" href="{{asset('css/materialize.css')}}">
        <link rel="stylesheet" href="{{asset('css/ourStyle.css')}}">
    </head>

    <body>
        <div class="container-fluid">
            {{--Navbar--}}
            <nav class="nav-extended">
                <div class="nav-wrapper">
                    <div>
                        <a href="#" class="brand-logo"><img src="{{asset('images/logoBambino.jpeg')}}" alt="Logo"></a>
                        <a href="#" data-activates="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    </div>

                    <div id="top-left-nav">
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li><a href="#" class="nav-link"><i class="material-icons left">shopping_cart</i>Mon panier</a></li>
                            <li><a href="#" class="nav-link"><i class="material-icons left">perm_identity</i>Mon compte</a></li>
                        </ul>
                    </div>
                </div>

                <div class="nav-content">
                    @yield('tabs')
                </div>
            </nav>

            <ul class="sidenav" id="mobile-demo">
                <li><a href="#" class="nav-link"><i class="material-icons left">shopping_cart</i>Mon panier</a></li>
                <li><a href="#" class="nav-link"><i class="material-icons left">perm_identity</i>Mon compte</a></li>
            </ul>
            <br>

            @yield('content')

            {{--Footer--}}
            <div class="row">
                <div class="col m12" id="footie">
                    © 4GI Promo 2019 Copyright: BIYONG, NOUPELAH, TCHUENKAM, YEPMO
                </div>
            </div>
        </div>

        {{--Scripts--}}
        <script src="{{asset('js/compiled.min.js')}}"></script>
        <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.js')}}"></script>
        <script src="{{asset('js/ourScript.js')}}"></script>
        <script>
            $(document).ready(function () {
                $('.sidenav-trigger').sideNav();
            });
            $(document).ready(function(){
                $('.modal').modal();
            });
        </script>
    </body>
</html>