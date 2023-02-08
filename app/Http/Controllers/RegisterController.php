<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('registers.register', [
            'title' => 'Sign Up'
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'first_name' => 'required|max:25|regex:/^[\pL\s]+$/u',
            'last_name' => 'required|max:25|regex:/^[\pL\s]+$/u',
            'role' => 'required',
            'gender' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|regex:/^(?=.*[0-9]).+$/',
            'confirm_password' => 'required|same:password',
            'picture' => 'required|image|mimes:png,jpg,jpeg',
        ],[
            'first_name.regex' => 'No symbols are allowed.',
            'last_name.regex' => 'No symbols are allowed.',
            'password.regex' => 'Password must contain at least 1 number.',
        ]);

        if ($request->file('picture')) {
            $picture = $request->file('picture');
            $picturename = uniqid().'.'.$picture->extension();
            $picture->storeAs('public/profile-picture', $picturename);

            DB::table('users')->insert([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'role_id' => $request->role,
                'gender_id' => $request->gender,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'display_picture_link' => $picturename,
            ]);

            return redirect()->route('login');
        }
        return back()->with('failed', 'Registration failed! Please try again.');
    }
}
