
@extends('layout')

<!--/ Nav Star /-->

<nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll" href="#page-top">Marie Basri</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll active" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="#work">Work</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="#blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="#contact">Contact</a>
                </li>
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
          <h1 class="intro-title mb-4">Need a website? You are at the right place!</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Web developer, Full stack developer, Code lover</span><strong class="text-slider"></strong></p>
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







