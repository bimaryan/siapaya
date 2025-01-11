<?php

namespace App\Http\Controllers\WEb\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = User::paginate('5');
        return view('Pages.Admin.Pengguna.index', compact('pengguna'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string|min:6',
            'phone' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
        ]);

        return redirect()->back()->with('Berhasil', 'Pengguna berhasil ditambahkan');
    }

    public function update(Request $request, User $pengguna)
    {
        $request->validate([
            'password' => 'required|string|min:6',
        ]);

        $pengguna->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('Berhasil', 'Password pengguna berhasil diperbarui');
    }
}
