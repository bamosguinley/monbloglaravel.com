<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\storeArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $articles = Article::orderByDesc("created_at")->paginate(10);
        $articles = Article::latest()->paginate(5);
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
            ->store('images','public');
            $validated['image'] = $path;
            $validated['user_id'] = 1;
        }
        //envoyer l'article dans la bdd
        Article::create($validated);
        //redirection sur la page des articles
        return redirect()->route('articles.index')->with('success', 'Article créé avec succès');
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
        return view("articles.edit", ["article"=> $article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {   //Les donnés validés sont déjà disponible via le update article request
        $validated = $request->validated();

        //Gestion de l'image
        if($request->hasFile('image')){
            //Supprimer l'ancienne image 
            if($article->image){
                Storage::disk('public')->delete($article->image);
            }
            //stocker la nouvelle 
            $path=$request->file('image')->store('images','public');
            $validated['image'] = $path;
        }else{
            //garder l'ancienne image si aucune autre image n'est téléchargée
            $validated['image'] = $article->image;
        }
        //Mettre à jour l'article
        $article->update($validated);
        //Rediriger vers la page des articles avec un message success
        return redirect()->route("articles.show",$article->id)->with("success","article mis à jour avec succès");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
