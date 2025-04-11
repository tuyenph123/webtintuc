<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function index()
    {
        // Trả về trang quản lý của Editor
        return view('admin.news.index');
    }
}
