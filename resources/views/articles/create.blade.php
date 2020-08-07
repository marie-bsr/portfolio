@extends('layout')
@include('navigation')
<style>
    body {
        background-color: darkslategrey !important;
        color: white !important;
    }

    .formulaire {
        margin-top: 10rem;
    }
</style>
<div class="container p-4">
    @section('content')

        <div class="container formulaire text-center">
            <form method="post" action="/blog" enctype="multipart/form-data">
                <h1>Nouvel article</h1>
                @csrf
                <div class="form-group">
                    <label for="titre">Titre</label>
                    <input type="text"
                           class="form-control @error ('titre') is-danger @enderror"
                           id="titre"
                           name="titre"
                           value="{{old('titre')}}"
                           required>
                    @if ($errors->has('titre'))
                        <p class="help is-danger">{{$errors->first('titre')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="categorie">Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image"
                           value="{{ old('image') }}">
                    @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                @if ($errors->has('image'))
                    <p class="help is-danger">{{$errors->first('image')}}</p>
                @endif
                <div class="form-group">
                    <label for="categorie">Categorie</label>
                    <select class="form-control @error ('categorie') is-danger @enderror" id="categorie" name="category_id"
                            required>
                        @foreach ($categories as $categorie)
                            <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="extrait">Extrait</label>
                    <textarea class="form-control" id="extrait" rows="2" name="extrait"></textarea>
                </div>
                <div class="form-group">
                    <label for="contenu">Contenu</label>
                    <textarea class="form-control @error ('contenu') is-danger @enderror" id="contenu" rows="5" name="contenu"
                              required>{{old('contenu')}}</textarea>
                </div>
                <div class="form-group">
                    <label for="tag">Tags</label>
                    <select multiple class="form-control"
                            name="tags[]">
                        @foreach ($tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                    @error('tags')
                    <p class="help is-danger">{{$message}}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Enregister</button>
            </form>
        </div>
    @endsection
</div>
