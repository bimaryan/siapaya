<?php

namespace App\Http\Controllers\WEb\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pesan;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $pengguna = User::count();
        $pesan = Pesan::count();
        return view('Pages.Admin.Dashboard.index', compact('pengguna', 'pesan'));
    }
}
