<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function getIndex()
    {
        //pagina principale
        $categories = \App\Category::all();

        $articles = \App\Article::with('categories', 'user')->where('published_at', '<=', 'NOW()')->where('is_published', '=', true)->orderBy('published_at', 'DESC')->paginate(5);

        return view('frontend.home', ['articles' => $articles, 'categories' => $categories]);
    }

    public function getArticolo($slug)
    {
        //dettaglio di un singolo articolo
        $categories = \App\Category::all();

        $article = \App\Article::with('categories', 'user')->where('slug', '=', $slug)->first();

        return view('frontend.article', compact('categories', 'article'));

    }

    public function getAutore($slug)
    {
        //articolo di uno specifico autore
        $categories = \App\Category::all();

        $author = \App\User::where('slug', '=', 'slug')->first();
        $articles = $author->articles()->where('published_at', '<=', 'NOW()')->where('is_published', '=', true)->orderBy('published_at', 'DESC')->paginate(5);

        return view('frontend.author', compact('categories', 'author', 'articles'));

    }

    public function getCategoria($slug)
    {
        //articoli di una specifica categoria
        $categories = \App\Category::all();


        $currentCategory = \App\Category::where('slug', '=', $slug)->first();
        $articles = $currentCategory->articles()->where('published_at', '<=', 'NOW()')->where('is_published', '=', true)->orderBy('published_at', 'DESC')->paginate(5);

        return view('frontend.category', compact('categories', 'currentCategory', 'articles'));
    }
}
