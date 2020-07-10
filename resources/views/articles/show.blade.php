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

    <section id="blog" class="blog-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-blog">
                        <div class="card-img img-perso">
                            <a href="blog-single.html"><img src="{{URL::asset('/img/post-1.jpg')}}" alt="" class="img-perso"></a>
                        </div>
                        <div class="card-body">
                            <div class="card-category-box">
                                <div class="card-category">
                                    <h6 class="category">{{ $article->categorie }}</h6>
                                </div>
                            </div>
                            <h3 class="card-title"><a href="blog-single.html">{{ $article->titre }}</a></h3>
                            <p class="card-description">
                            <p>{{ $article->extrait }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container p-4 text-center">

        <button class="btn btn-1"><a href="/blog/{{ $article->id }}/edit">Editer l'article</a></button>
        <button class="btn btn-3"><a href="">Supprimer l'article</a></button>
    </div>
    </section>
@endsection
