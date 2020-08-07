@extends('layout')
@include('navigation')
<style>
    body{
        /*background-color: #fafbfc ;*/
        background: linear-gradient(-45deg, #58bee4, #c4e6de);
    }
    .formulaire{
        margin-top: 10rem;
    }
</style>
<div class="container p-4">
@section('content')



<div class="container formulaire text-center">
    <h1>Update article</h1>

<form method="POST" action="/blog/{{$article->id}}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="titre">Titre</label>
            <textarea class="form-control @error ('titre') is-danger @enderror" id="titre"  name="titre" required>{{$article->titre}}</textarea>
          </div>
          <div class="form-group">
            <label for="titre">Image URL</label>
            <textarea class="form-control @error ('image') is-danger @enderror" id="image"  name="image" required>{{$article->image}}</textarea>
          </div>

      <div class="form-group">
        <label for="categorie">Categorie</label>
        <select class="form-control @error ('categorie') is-danger @enderror" id="categorie" name="categorie" required>
            @foreach ($categories as $categorie)
    <option value="{{$categorie->id}}">{{$categorie->name}}</option>
    @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="extrait">Extrait</label>
        <textarea class="form-control @error ('extrait') is-danger @enderror" id="extrait" rows="3" name="extrait" required>{{$article->extrait}}</textarea>
      </div>
      <div class="form-group">
        <label for="contenu">Contenu</label>
        <textarea class="form-control @error ('contenu') is-danger @enderror" id="contenu" rows="10" name="contenu" required>{{$article->contenu}}</textarea>
      </div>
    <div class="form-group">
        <label for="tag">Tags</label>
      <select multiple class="form-control"
      name="tags[]"  >
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


@endsection
</div>
