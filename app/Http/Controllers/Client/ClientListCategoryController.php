<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;

class ClientListCategoryController extends Controller
{
    public function index()
    {
        $listCategory = Category::with('news')->get();

        return view('Client.listcategory', compact('listCategory'));
    }
}
