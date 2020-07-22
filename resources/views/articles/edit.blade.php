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
      <input type="text" class="form-control" id="titre" name="titre" value="{{$article->titre}}"  >
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" value="{{$article->image}}"class="form-control @error('image') is-invalid @enderror" name="image" id="image"  value="{{ old('image') }}">
        @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

      </div>
      <div class="form-group">
        <label for="categorie">Categorie</label>
        <input type ="textarea"class="form-control" id="categorie" name="categorie" value="{{$article->categorie}}">
      </div>
    <div class="form-group">
        <label for="extrait">Extrait</label>
        <textarea class="form-control" id="extrait" rows="3" name="extrait" >{{$article->extrait}}</textarea>
      </div>
    <div class="form-group">
      <label for="contenu">Contenu</label>
      <textarea class="form-control" id="contenu" rows="10" name="contenu" >{{$article->contenu}}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Enregister</button>
  </form>


@endsection
</div>
