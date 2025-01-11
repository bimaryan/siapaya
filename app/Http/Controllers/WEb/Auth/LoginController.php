<?php

namespace App\Http\Controllers\WEb\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use hisorange\BrowserDetect\Parser as Browser;

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

        if (Auth::guard('web')->attempt($credentials)) {

            auth()->user()->update([
                'browser' => Browser::browserName() . ' ' . Browser::browserVersion(),
                'device' => Browser::deviceType(),
            ]);

            return redirect()->route('dashboard.index');
        }

        if (Auth::guard('admin')->attempt(['name' => $credentials['name'], 'password' => $request->password])) {
            return redirect()->route('dashboard-admin.index');
        }

        return redirect()->back()->with('gagal', 'Nama atau Kata Sandi salah!')->withInput();
    }
}
