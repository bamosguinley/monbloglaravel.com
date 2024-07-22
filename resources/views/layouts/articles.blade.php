@extends('layouts.master')

@section('title')
Articles
@endsection
@section('content')
<h2>Mes articles</h2>

@forelse ($articles as $article)
   @include('layouts.articles.index')
@empty
    @include('layouts.articles.no-article')
@endforelse
@endsection