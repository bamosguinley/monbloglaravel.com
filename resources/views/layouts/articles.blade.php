@extends('layouts.master')

@section('title')
Articles
@endsection
@section('content')
<h2>Mes articles</h2>

@forelse ($articles as $article)
    <article>
        <h2>{{$article['title']}}</h2>
        <p>{{$article['body']}}</p>
    </article>
@empty
<p>Oups 😫! Aucun article trouvé</p>
@endforelse
@endsection