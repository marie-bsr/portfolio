@extends('layout')

@include('navigation')

<style>
    body{
        background-color: rgb(6, 2, 15) !important;
    }
    .box{
margin-top: 6rem;
    }
</style>
<div class="container p-4">
@section('content')
    <!--/ Section Blog Star- pour la page /blog /-->
    <section id="blog" class="blog-mf sect-pt4 route">
        <div class="container box">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Blog
                        </h3>
                        <p class="text-white">
                            Tous mes articles
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($articles as $article)
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-img">
                                <a href="blog-single.html"><img src="img/post-1.jpg" alt="" class="img-fluid"></a>
                            </div>
                            <div class="card-body">
                                <div class="card-category-box">
                                    <div class="card-category">
                                        <h6 class="category">{{ $article->categorie }}</h6>
                                    </div>
                                </div>
                            <h3 class="card-title"><a href="{{ $article->path()}}">{{ $article->titre }}</a></h3>
                                <p class="card-description">
                                <p>{{ $article->contenu }}</p>
                                </p>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
    <!--/ Section Blog End /-->
    <div class="text-center">
    <button class="btn btn-primary"><a href="/blog/create">Créer un nouvel article</a></button>
</div>
@endsection

</div>



