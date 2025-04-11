<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientRegisterController extends Controller
{
    public function showRegisterForm()
    {
        $listCategory = Category::all();
        return view('Client.auth.register', compact('listCategory'));
    }

    public function registerPersonal(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|numeric',
            'password' => 'required|min:6',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ];

        try {
            User::create($data);
            return redirect()->route('client.home')->with('success', 'Đăng ký thành công! Vui lòng đăng nhập.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Đăng ký thất bại: ' . $e->getMessage()]);
        }
    }

    public function registerBusiness(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required|string|max:255',
            'tax_code' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|numeric',
            'password' => 'required|min:6',
        ]);

        $data = [
            'name' => $request->name,
            'tax_code' => $request->tax_code,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ];

        try {
            User::create($data);
            return redirect()->route('client.login.form')->with('success', 'Đăng ký thành công! Vui lòng đăng nhập.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Đăng ký thất bại: ' . $e->getMessage()]);
        }
    }
}
