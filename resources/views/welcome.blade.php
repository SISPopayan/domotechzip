@extends('layouts.app')

@section('content')


    @include('partials.nav')

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Bienvenido a nuestro proyecto</div>
                <div class="intro-heading">Te presentamos una ventana hacia el futuro</div>
                <a href="#services" class="page-scroll btn btn-xl">Conoce mas ventajas</a>
            </div>
        </div>
    </header>

@include('partials.services')

@include('partials.products')
      
@include('partials.about')
@include('partials.team')
  

    <!-- Clients Aside 
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>
    -->
    
@include('partials.contact')
 
@endsection