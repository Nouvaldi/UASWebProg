<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('logins.login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $request->session()->put('id', Auth::user()->id);
            return redirect()->intended('home');
        }

        return back()->with('failed', 'Login failed!');
    }

    public function logout(Request $request) {
        $request->session()->flush();
        Auth::logout();

        return redirect()->route('logout.index');
    }

    public function logoutIndex() {
        return view('logins.logout', [
            'title' => 'Logout'
        ]);
    }
}
