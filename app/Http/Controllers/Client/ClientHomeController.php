<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Articles;
use App\Models\Category;
use App\Models\Nentangs;
use App\Models\News;

class ClientHomeController extends Controller
{
    public function index()
    {
        $listCategory = Category::all();
        $listnentang = Articles::all();
        $listNews = News::latest()->take(4)->get()->groupBy('category_id'); 
        $hotNews = News::latest()->take(5)->get();
        $listUnits = Nentangs::latest()->take(4)->get();
        return view('Client.home', compact('listCategory', 'listNews', 'hotNews', 'listnentang', 'listUnits'));
    }
}
