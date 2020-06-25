@extends('layout')

@section('content')
    <section id="blog" class="blog-mf sect-pt4 route">
        <div class="container">
            <div class="row">
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
                            <h3 class="card-title"><a href="blog-single.html">{{ $article->titre }}</a></h3>
                            <p class="card-description">
                            <p>{{ $article->contenu }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
