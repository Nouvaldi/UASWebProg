<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index() {
        $user_data = User::all();

        return view('admin.index', compact('user_data'), [
            'title' => 'Maintenance'
        ]);
    }

    public function delete($user_id) {
        $user_data = User::all()->where('id', $user_id)->first();
        Storage::delete('public/profile-picture/'.$user_data->display_picture_link);
        User::query()->where('id', $user_id)->delete();

        return redirect()->route('admin');
    }

    public function indexUpdate($user_id) {
        $user_data = User::all()->where('id', $user_id)->first();

        return view('admin.update', compact('user_data'), [
            'title' => 'Update Role'
        ]);
    }

    public function update(Request $request, $user_id) {
        DB::table('users')->where('id', $user_id)->update([
            'role_id' => $request->role
        ]);

        return redirect()->route('admin');
    }
}
