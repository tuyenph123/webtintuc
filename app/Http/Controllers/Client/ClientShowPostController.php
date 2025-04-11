<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;

class ClientShowPostController extends Controller
{
    public function show($id)
    {
        $hotNews = News::latest()->take(6)->get();
        $listCategory = Category::all();
        $showNews = News::with('category')->findOrFail($id);
        $relatedNews = News::where('category_id', $showNews->category_id)
            ->where('id', '!=', $showNews->id)
            ->latest()
            ->take(4)
            ->get();
        return view('Client.showpost', compact('listCategory', 'showNews', 'hotNews', 'relatedNews'));
    }
}
