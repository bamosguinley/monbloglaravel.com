<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view("layouts.articles", compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(storeArticleRequest $request)
    {
        // dd($request->all());
        $validated = $request->validated();
        //Gérer la sauvegarde de l'image
        if($request ->hasFile('image')){
            $path= $request
             -> file('image')
            ->store('images');
            $validated['image'] = $path;
        }
        //envoyer l'article dans la bdd
        Article::create($validated);
        //redirection sur la page des articles
        return redirect('/articles')->with('sucess', 'Article créé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $article = Article::with('comments')->find($id);

        return view("articles.show", ["article" => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
