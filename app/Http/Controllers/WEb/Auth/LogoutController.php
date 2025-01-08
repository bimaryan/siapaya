<?php

namespace App\Http\Controllers\WEb\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function store()
    {
        // Logout user
        Auth::logout();

        // Redirect to login page or homepage with a success message
        return redirect('/masuk')->with('success', 'Anda telah berhasil logout.');
    }
}
