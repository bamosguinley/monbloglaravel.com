@extends('layouts.master')

@section('title')
Articles
@endsection
@section('content')
<h2>Mes articles</h2>

<a href="/articles/create" class="btn btn-primary mt-2 mb-2">Créer</a>
@forelse ($articles as $article)
    @include('articles.partials.index')
@empty
    @include('articles.partials.no-article')
@endforelse
<div class=" pagination d-flex flex-direction-column justify-content-center">
    {{$articles->links()}}
</div>
@endsection