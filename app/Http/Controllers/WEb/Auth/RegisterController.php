<?php

namespace App\Http\Controllers\WEb\Auth;

use App\Http\Controllers\Controller;
use App\Models\Pesan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Pages.Auth.Daftar.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'password'=> 'required|string|confirmed|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('masuk.index')->with('berhasil', 'Selamat Anda Berhasil Mendaftar');
    }
}
