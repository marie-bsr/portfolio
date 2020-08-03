
@extends('layout')

<!--/ Nav Star /-->


<nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container navbox">
        <a class="navbar-brand js-scroll" href="#page-top"><img
            src="img/logo.png"
            alt="logo"
            height="150px"

        /></a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll active" href="/home">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="/about">A propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="/services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="/work">Réalisations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="#blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="#contact">Contact</a>
                </li>
                @auth
                <li class="nav-item ">
                    <a class="nav-link js-scroll" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                  </li>
@else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Espace personnel
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="/login">Se connecter</a>
                      <a class="dropdown-item" href="/register">Créer un compte</a>

                    </div>
                  </li>


@endauth
            </ul>
        </div>
    </div>
</nav>
<!--/ Nav End /-->



@section('content')

 <!--/ Intro Skew Star /-->
 <div id="home" class="intro route bg-image" style="background-image: url(img/intro-bg.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h2 class="intro-title mb-4">Besoin d'un site web? </br>Vous êtes au bon endroit!</h2>
          <p class="intro-subtitle">Je réalise <span class="text-slider-items">des sites web, des applications, des sites vitrines, des logos, des chartes graphiques</span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->

  @include('about')
  @include('services')
  @include('work')
  @include('blog')
  @include('contact')

@endsection







