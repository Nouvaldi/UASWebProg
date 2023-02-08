<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index() {
        $item_data = Item::paginate(10);

        return view('home', compact('item_data'), [
            'title' => 'Home'
        ]);
    }

    public function detail(Request $request, $item_id) {
        $item_data = Item::all()->where('id', $item_id)->first();

        return view('detail', compact('item_data'), [
            'title' => 'Detail'
        ]);
    }
}
