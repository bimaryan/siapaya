<?php

namespace App\Http\Controllers\WEb\Pengguna;

use App\Http\Controllers\Controller;
use App\Models\Pesan;
use App\Models\User;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index($name)
    {
        return view('Pages.Pengguna.Pesan.index', compact('name'));
    }

    public function update(Request $request, $name)
    {
        // Validasi input
        $request->validate([
            'pesan' => 'required|string|max:255',
        ]);

        // Cari pengguna berdasarkan nama
        $user = User::where('name', $name)->first();

        if (!$user) {
            return redirect()->back()->withErrors(['error' => 'Pengguna tidak ditemukan.']);
        }

        // Simpan pesan
        $pesan = new Pesan();
        $pesan->users_id = $user->id;
        $pesan->pesan = $request->pesan;
        $pesan->save();

        return redirect()->route('Pesan.index', $name)
            ->with('Berhasil', 'Terimakasih sudah mengisi pesan ini.');
    }
}
