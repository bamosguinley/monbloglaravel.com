@extends('layouts.master')
@section('title')
{{$article->title}}
@endsection
@section('content')
<article>
    <div class="">
        <img src="{{asset('storage/' . $article->image)}}" class="card-img-top" alt="..." style="height: 500px;">
        <div class="card-body">
            <h5 class="card-title">{{$article['title']}}
                <a href="/articles/{{$article->id}}/edit" class="btn btn-sm btn-warning ml-3">Modifier</a>
                <form action="{{route('articles.destroy',$article->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Supprimer</button>
                </form>
            </h5>
            <p class="mt-2">Créé par {{$article->user->name}} <span>{{$article->created_at->diffForHumans()}}</span></p>
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
                <span class="text-primary">{{$comment->user->name }}</span> 
                <span class="badge text-bg-secondary">{{$comment->created_at->diffForHumans()}}</span>
                <br>
                <small class="">{{$comment['comment']}}</small>
            </div>
        @empty
            <p>Aucun commentaire trouvé</p>    
        @endforelse
    </div>
    </div>
</section>
@endsection