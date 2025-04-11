<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Articles;
use App\Models\Nentangs;

class ClientShowUnitController extends Controller
{
    public function index($id)
    {
        $showUnit = Articles::with('nentang')->findOrFail($id);
        return view('Client.showunit', compact('showUnit'));
    }
}
