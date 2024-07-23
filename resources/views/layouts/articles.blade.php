@extends('layouts.master')

@section('title')
Articles
@endsection
@section('content')
<h2>Mes articles</h2>
    @forelse ($articles as $article)
        @include('articles.partials.index')
    @empty
        @include('articles.partials.no-article')
    @endforelse
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link">Précédent</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Suivant</a>
            </li>
        </ul>
    </nav>
@endsection