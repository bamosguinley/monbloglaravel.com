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
<section class="">
    <h2>
        <label for="comment-input">
            Commentaires
        </label>
    </h2>
    <form action="">
        <div class="form-floating">
            <textarea name="comment" id="comment-input" 
            class="form-control" 
            placeholder="Laissez votre commentaire ici"
            row-5 
            text-dark></textarea>
            <button type="submit" class="btn btn-primary mt-4 mb-4">Envoyer</button>
    </form>
    <div>
        @forelse($article->comments as $comment)
            <div class="col-md-6 mb-2">
                <p class="text-primary">User {{$comment->user_id}}</p>
                <small class="">{{$comment['comment']}}</small>
            </div>
        @empty
            <p>Aucun commentaire trouvé</p>    
        @endforelse
    </div>
    </div>
</section>
@endsection