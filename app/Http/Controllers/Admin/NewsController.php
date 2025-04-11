<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->role === 'admin') {
            $news = News::with('category')->paginate(10);
        } else {
            $news = News::with('category')->where('user_id', $user->id)->get();
        }

        $categories = Category::all();
        return view('admin.news.index', compact('news', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.news.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'thumbnail' => 'required|string',
        ]);

        News::create([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'user_id' => auth()->id(),
            'thumbnail' => $request->thumbnail,
            'status' => 'draft',
        ]);

        return redirect()->route('news.index')->with('success', 'Bài viết đã được tạo.');
    }

    public function edit($id)
    {
        $categories = Category::all();
        $news = News::findOrFail($id);
        return view('admin.news.edit', compact('news', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'thumbnail' => 'required|string',
        ]);

        $news = News::findOrFail($id);

        if (auth()->user()->role === 'editor' && $news->user_id !== auth()->id()) {
            return redirect()->route('news.index')->withErrors(['access' => 'You are not allowed to edit this article.']);
        }


        $news->update([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'thumbnail' => $request->thumbnail,
        ]);

        return redirect()->route('news.edit')->with('success', 'Bài viết đã được cập nhật.');
    }



    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('news.index')->with('success', 'Bài viết đã được xóa.');
    }
}
