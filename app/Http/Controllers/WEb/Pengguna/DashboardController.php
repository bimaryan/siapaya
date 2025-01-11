<?php

namespace App\Http\Controllers\WEb\Pengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use hisorange\BrowserDetect\Parser as Browser;

class DashboardController extends Controller
{
    public function index()
    {
        return view('Pages.Pengguna.Dashboard.index');
    }
}
