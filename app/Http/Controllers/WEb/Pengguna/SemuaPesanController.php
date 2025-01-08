<?php

namespace App\Http\Controllers\WEb\Pengguna;

use App\Http\Controllers\Controller;
use App\Models\Pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SemuaPesanController extends Controller
{
    public function index()
    {
        $pesan = Pesan::where('users_id', Auth::id())->latest()->paginate(5);
        return view('Pages.Pengguna.Semuapesan.index', compact('pesan'));
    }
}
