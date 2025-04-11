<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Articles;
use App\Models\Nentangs;

class ClientListUnitController extends Controller
{
    public function index()
    {
        $nentangs = Nentangs::all();
        $articles = Articles::all();

        return view('Client.listunit', compact('nentangs', 'articles'));
    }
}
