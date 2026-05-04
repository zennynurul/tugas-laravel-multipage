<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        return view("articles", ["articleList" => $articles]);
    }

    public function create() { return view("create_article"); }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'category' => 'required',
            'image' => 'required|url',
            'description' => 'required'
        ]);
        
        Article::create($validatedData);
        // Kembali ke Katalog
        return redirect('/artikel')->with('success', 'Artikel berhasil dibuat!');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view("edit_article", compact("article"));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        // Kembali ke Katalog
        return redirect('/artikel')->with('success', 'Artikel berhasil diupdate!');
    }

    public function destroy($id)
    {
        Article::destroy($id);
        return redirect('/artikel');
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view("detail_article", compact("article"));
    }
}