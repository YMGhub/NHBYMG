<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $data = $request->all();
        $data['description'] = html_entity_decode($data['description']);
        Article::create($data);
        return redirect()->route('admin.articles.index');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $article = Article::findOrFail($id); // <-- importante

        $article->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('admin.articles.index');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->route('admin.articles.index')->with('success', 'FAQ deleted successfully');
    }

    public function welcome()
    {
        $articles = Article::latest()->get();
        return view('welcome', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('articles.single', compact('article'));
    }

    public function archive()
    {
        $articles = Article::latest()->paginate(10); // puedes usar get() si no quieres paginación
        return view('articles.archive', compact('articles'));
    }
}
