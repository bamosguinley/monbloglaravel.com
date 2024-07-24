<article>
    <div class="card mb-3">
        @if ($article->image)
            <img src="{{asset('storage/' . $article->image)}}" class="card-img-top" alt="..." style="height: 500px;">
        @endif
        <div class="card-body">
            <h5 class="card-title">{{$article['title']}}</h5>
            <p class="card-text  text-truncate">{{$article['body']}}</p>
            <a href="/article/{{$article['id']}}" class="icon-link icon-link-hover">Voir plus</a>
        </div>
    </div>
</article>