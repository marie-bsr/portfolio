
<!--/ Nav Star /-->

<nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container ">
        <a class="navbar-brand js-scroll" href="#page-top"><img
            src="{{URL::asset('/img/logo.png')}}"
            alt="logo"
            height="150px"
        /></a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="navbar-collapse collapse justify-content-end " id="navbarDefault">
            <ul class="navbar-nav ">
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
                    <a class="nav-link js-scroll" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="/contact">Contact</a>
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


