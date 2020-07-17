@extends('layout')
@include('navigation')

<style>

    body{

        background-color: #fafbfc ;

    }
    .box{
margin-top: 200px;
    }

.img-perso{
    height: 10rem;
}
.card-img {

    text-align: center;
}
.btn-3 {
  background-image: linear-gradient(to right, #a04b7c 0%, #e7b9c7 51%, #a04b7c 100%);
}
.btn-1 {
  background-image: linear-gradient(to right, #41a0b1 0%, #8fd3f4 51%, #41a0b1 100%);
}
</style>
<div class="container box"></div>
@section('content')

    <div class="intro intro-single route bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <h2 class="intro-title mb-4">Blog </h2>

            </div>
          </div>
        </div>
      </div>

      <main id="main">

        <!-- ======= Blog Single Section ======= -->
        <section class="blog-wrapper sect-pt4" id="blog">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <div class="post-box">
                  <div class="post-thumb">
                    <img src="assets/img/post-1.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="post-meta">
                    <h1 class="article-title">  <p>{{ $article->titre }}</p></h1>
                    <ul>
                      <li>
                        <span class="ion-ios-person"></span>
                        <a href="#">  {{ $article->user->name }}</a>
                      </li>
                      <li>
                        <span class="ion-pricetag"></span>
                        <a href="#">Web Design</a>
                      </li>

                    </ul>
                  </div>
                  <div class="article-content">
                    <p>{{ $article->contenu }}</p>

                    <blockquote class="blockquote">
                      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    </blockquote>

                  </div>
                </div>


              </div>
              <div class="col-md-4">
                <div class="widget-sidebar sidebar-search">
                  <h5 class="sidebar-title">Search</h5>
                  <div class="sidebar-content">
                    <form>
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                        <span class="input-group-btn">
                          <button class="btn btn-secondary btn-search" type="button">
                            <span class="ion-android-search"></span>
                          </button>
                        </span>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="widget-sidebar">
                  <h5 class="sidebar-title">Recent Post</h5>
                  <div class="sidebar-content">
                    <ul class="list-sidebar">
                      <li>
                        <a href="#">Atque placeat maiores.</a>
                      </li>

                    </ul>
                  </div>
                </div>

                <div class="widget-sidebar widget-tags">
                  <h5 class="sidebar-title">Tags</h5>
                  <div class="sidebar-content">



                    <ul>
                        @foreach ($article->tags as $tag)
                      <li>
                      <a href="/blog?tag={{$tag->name}}">#{{$tag->name}}</a>
                      </li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container p-4 text-center">

            <button class="btn btn-1"><a href="/blog/{{ $article->id }}/edit">Editer l'article</a></button>
            <button class="btn btn-3"><a href="">Supprimer l'article</a></button>
        </div>
        </section><!-- End Blog Single Section -->

      </main><!-- End #main -->
@endsection

