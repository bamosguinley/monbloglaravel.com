@extends('layouts.master')
@section('title')
{{$article->title}}
@endsection
@section('content')
<article>
    <div class="">
        <img src="{{$article['image']}}" class="card-img-top" alt="..." style="height: 500px;">
        <div class="card-body">
            <h5 class="card-title">{{$article['title']}}</h5>
            <p class="card-text">{{$article['body']}}</p>
        </div>
    </div>
</article>
@endsection