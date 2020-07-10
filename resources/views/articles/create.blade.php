@extends('layout')
@include('navigation')
<style>
    body{
        background-color: darkslategrey !important;
        color:white !important;
    }
    .formulaire{
        margin-top: 10rem;
    }
</style>
<div class="container p-4">
@section('content')

<div class="container formulaire text-center">
    <h1>Nouvel article</h1>
    <form method="post" action="/blog">
        @csrf

    <div class="form-group">
      <label for="titre">Titre</label>
    <input type="text"
    class="form-control @error ('titre') is-danger @enderror"
    id="titre"
    name="titre"
    value="{{old('titre')}}"
    required >

    @if ($errors->has('titre'))
    <p class="help is-danger">{{$errors->first('titre')}}</p>
@endif
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="text" class="form-control-file" id="image" name="image" >
      </div>
      <div class="form-group">
        <label for="categorie">Categorie</label>
        <textarea class="form-control @error ('categorie') is-danger @enderror" value="{{old('categorie')}}"id="categorie" name="categorie" required></textarea>
      </div>
    <div class="form-group">
        <label for="extrait">Extrait</label>
        <textarea class="form-control" id="extrait" rows="2" name="extrait"></textarea>
      </div>
    <div class="form-group">
      <label for="contenu">Contenu</label>
      <textarea class="form-control @error ('contenu') is-danger @enderror" id="contenu" rows="5" name="contenu" value="{{old('contenu')}}"required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enregister</button>
  </form>


@endsection
</div>
