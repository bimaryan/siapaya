<?php

namespace App\Http\Controllers\WEb\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('Pages.Auth.Masuk.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string|min:6'
        ]);

        $credentials = $request->only('name', 'password');

        if (Auth::guard('web')->attempt(['name' => $credentials['name'], 'password' => $request->password])) {
            return redirect()->route('dashboard.index');
        }

        if (Auth::guard('admin')->attempt(['name' => $credentials['name'], 'password' => $request->password])) {
            return redirect()->route('admin.index');
        }

        return redirect()->back()->with('gagal', 'Nama atau Kata Sandi salah!')->withInput();
    }
}
