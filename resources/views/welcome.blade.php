
@extends('layout')


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







