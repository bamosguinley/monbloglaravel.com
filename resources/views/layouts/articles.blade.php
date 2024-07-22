@extends('layouts.master')

@section('title')
    Articles
@endsection
@section('content')
<h2>Mes articles</h2>
@foreach ($articles as $article)
    <article>
        <h2>{{$article['title']}}</h2>
        <p>{{$article['body']}}</p>
    </article>
@endforeach
@endsection