<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required'
        ]);
        
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('articles', 'public');
            
            $validatedData['image'] = $imagePath;
        }
        
        Article::create($validatedData);
        return redirect('/artikel')->with('success', 'Artikel dan gambar berhasil dipublikasikan!');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view("edit_article", compact("article"));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'category' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Nullable berarti opsional
            'description' => 'required'
        ]);

        if ($request->hasFile('image')) {
            if ($article->image && !Str::startsWith($article->image, 'http')) {
                Storage::disk('public')->delete($article->image);
            }
            
            $validatedData['image'] = $request->file('image')->store('articles', 'public');
        }

        $article->update($validatedData);

        return redirect('/artikel')->with('success', 'Artikel berhasil diperbarui!');
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