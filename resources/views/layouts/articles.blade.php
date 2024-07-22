@extends('layouts.master')

@section('title')
Articles
@endsection
@section('content')
<h2>Mes articles</h2>

@forelse ($articles as $article)
   @include('articles.index')
@empty
    @include('articles.no-article')
@endforelse
@endsection