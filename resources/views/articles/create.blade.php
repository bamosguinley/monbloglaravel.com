@extends('layouts.master')

@section('content')
<form enctype="multipart/form-data" method="post" action="/articles">
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
    @endif
    <div class="mb-3">
        <label for="title" class="form-label">Titre de l'article</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="title" name="title" value="{{old('title')}}">
        @error('title')
            <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3 form-floating">
        <textarea name="body" id="body" class="form-control @error('body') is-invalid @enderror"  style="height: 300px;">{{old('body')}}</textarea>
        <label class="form-label" for="body">Corps de l'article</label>
        @error('body')
            <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="image">Choisir une image</label>
        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
            @error('image')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
    </div>
    @csrf
    <button type="submit" class="btn btn-primary">Créer</button>
</form>
@endsection