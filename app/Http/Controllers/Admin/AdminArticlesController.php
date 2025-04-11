<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Articles;
use App\Models\Nentangs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminArticlesController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->role === 'admin') {
            $articles = Articles::paginate(10);
        } else {
            $articles = Articles::where('user_id', $user->id)->get();
        }

        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        $nentangs = Nentangs::all();
        return view('admin.articles.create', compact('nentangs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'required|string',
            'nentang_id' => 'nullable|exists:nentangs,id',
        ]);

        Articles::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => auth()->id(),
            'image' => $request->image,
            'nentang_id' => $request->nentang_id,
        ]);


        return redirect()->route('articles.index')->with('success', 'Nền tảng đã được tạo.');
    }

    public function edit($id)
    {
        $articles = Articles::findOrFail($id);
        $nentangs = Nentangs::all();
        return view('admin.articles.edit', compact('articles', 'nentangs'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'required|string',
            'nentang_id' => 'nullable|exists:nentangs,id',
        ]);

        $articles = Articles::findOrFail($id);

        if (auth()->user()->role === 'editor' && $articles->user_id !== auth()->id()) {
            return redirect()->route('articles.index')->withErrors(['access' => 'You are not allowed to edit this article.']);
        }


        $articles->update([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $request->image,
            'nentang_id' => $request->nentang_id,
        ]);

        return redirect()->route('articles.edit')->with('success', 'Nền tảng đã được cập nhật.');
    }



    public function destroy($id)
    {
        $articles = Articles::findOrFail($id);
        $articles->delete();

        return redirect()->route('articles.index')->with('success', 'Nền tảng đã được xóa.');
    }
}
