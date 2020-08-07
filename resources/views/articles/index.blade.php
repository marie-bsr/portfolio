@extends('layout')

@include('navigation')

<style>
    body{
        background-color: rgb(6, 2, 15) !important;
    }
    .box{
margin-top: 6rem;
    }
    .pagination{
        justify-content: center;
            align-items: center;
            padding: 0.4em;
    }
    .has-background-grey-lighter{
        background-color: lightslategrey;
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
                @forelse($articles as $article)

                    <div class="col-md-4">
                        <div class="card card-blog ">
                            <div class="card-img">
                                @if($article->image_url)
                                    <img src="{{ asset('storage/app/' . $article->image_url) }}" alt="" class="img-fluid">
                                @else
                                    <img src="#" alt="" class="img-fluid">
                                @endif
                            </div>
                            <div class="card-body"  >
                                <div class="card-category-box">
                                    <div class="card-category m-4">
                                        <h6 class="category text-white">{{ $article->category->name}}</h6>
                                    </div>
                                </div>
                            <h3 class="card-title"><a href="{{ $article->path()}}">{{ $article->titre }}</a></h3>
                                <p class="card-description">
                                <p>{{ $article->contenu }}</p>
                                </p>
                            </div>

                        </div>
                    </div>
                    @empty
                     <p>Il n'y a pas d'articles correspondant à ce tag.</p>

                @endforelse

            <div class="pagination">
            {{ $articles->links() }}
        </div>
        </div>



    </section>
    <!--/ Section Blog End /-->
    <div class="text-center">
    <button class="btn btn-primary"><a href="/blog/create">Créer un nouvel article</a></button>
</div>
@endsection

</div>



