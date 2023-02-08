<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index() {
        $user_data = User::all()->where('id', Auth::user()->id)->first();

        return view('profile', compact('user_data'), [
            'title' => 'Profile'
        ]);
    }

    public function update(Request $request) {
        $request->validate([
            'first_name' => 'required|max:25|regex:/^[\pL\s]+$/u',
            'last_name' => 'required|max:25|regex:/^[\pL\s]+$/u',
            'role' => 'required',
            'gender' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required|min:8|regex:/^(?=.*[0-9]).+$/',
            'confirm_password' => 'required|same:password',
            'picture' => 'required|image|mimes:png,jpg,jpeg',
        ],[
            'first_name.regex' => 'No symbols are allowed.',
            'last_name.regex' => 'No symbols are allowed.',
            'password.regex' => 'Password must contain at least 1 number.',
        ]);

        try {
            DB::table('users')->where('id', Auth::user()->id)->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'role_id' => $request->role,
                'gender_id' => $request->gender,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            if ($request->file('picture')) {
                $picture = $request->file('picture');
                $picturename = uniqid().'.'.$picture->extension();
                $picture->storeAs('public/profile-picture', $picturename);

                DB::table('users')->where('id', Auth::user()->id)->update([
                    'display_picture_link' => $picturename,
                ]);

                if ($request->oldPicture) {
                    Storage::delete('public/profile-picture/'.$request->oldPicture);
                }

                return redirect()->route('profile.success');
            }
        } catch (\Throwable $th) {
            return back()->with('failed', 'Update profile failed! Please try again.');
        }
    }

    public function updateSuccess() {
        return view('profileSuccess', [
            'title' => 'Profile'
        ]);
    }
}
