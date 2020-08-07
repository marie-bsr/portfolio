

<!--/ Section Blog Star- sert uniquement pour affichage sur page d'accueil /-->
<section id="blog" class="blog-mf sect-pt4 route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">
                    <h3 class="title-a">
                        Blog
                    </h3>
                    <p class="subtitle-a">
                        Découvrez mes derniers articles
                    </p>
                    <div class="line-mf"></div>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-4">
                    <div class="card card-blog">
                        <div class="card-img">
                            <a href="blog-single.html">
                                @if($article->image_url)
                                    <img src="{{ asset('storage/app/' . $article->image_url}}" alt="" class="img-fluid">
                                @else
                                <img src="#" alt="" class="img-fluid">
                                @endif
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-category-box">
                                <div class="card-category">
                                    <h6 class="category">{{ $article->categorie}} </h6>
                                </div>
                            </div>
                            <h3 class="card-title"><a href="/blog/{{$article->id}}"> {{ $article->titre}} </a></h3>
                            <p class="card-description">
                            <p> {{$article->extrait}} </p>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</section>
<!--/ Section Blog End /-->





