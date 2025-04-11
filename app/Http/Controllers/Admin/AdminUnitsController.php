<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Nentangs;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminUnitsController extends Controller
{

    public function index()
    {
        $units = Nentangs::paginate(10);
        return view('admin.units.index', compact('units'));
    }


    public function create()
    {
        return view('admin.units.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|string',
        ]);

        Nentangs::create([
            'name' => $request->name,
            'image' => $request->image,
        ]);

        return redirect()->route('units.index')->with('success', 'Đơn vị đã được tạo.');
    }

    public function edit($id)
    {
        $units = Nentangs::findOrFail($id);
        return view('admin.units.edit', compact('units'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|string',
        ]);
        $units = Nentangs::findOrFail($id);
        $units->update([
            'name' => $request->name,
            'image' => $request->image,

        ]);

        return redirect()->route('units.index')->with('success', 'Đơn vị đã được cập nhật.');
    }

    public function destroy($id)
    {
        $units = Nentangs::findOrFail($id);
        $units->delete();

        return redirect()->route('units.index')->with('success', 'Đơn vị đã được xóa.');
    }
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        if (!$keyword) {
            return redirect()->route('units.index')->with('error', 'Vui lòng nhập từ khóa tìm kiếm.');
        }

        $units = Nentangs::where('name', 'like', "%$keyword%")->get();

        if ($units->isEmpty()) {
            return redirect()->route('units.index')->with('error', 'Không tìm thấy Đơn vị nào.');
        }

        return view('admin.units.index', compact('units'));
    }

    public function show($id)
    {
        $units = Nentangs::findOrFail($id);
        return view('admin.units.show', compact('Units'));
    }
}
