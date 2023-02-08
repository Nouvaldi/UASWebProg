<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index() {
        $order_data = Order::all()->where('user_id', Auth::user()->id);

        return view('order', compact('order_data'), [
            'title' => 'Order'
        ]);
    }

    public function store($item_id) {
        $item_data = Item::all()->where('id', $item_id)->first();

        DB::table('orders')->insert([
            'user_id' => Auth::user()->id,
            'item_id' => $item_id,
            'price' => $item_data->price
        ]);

        return redirect()->route('order');
    }

    public function delete($item_id) {
        $order_item = Order::all()->where('item_id', $item_id)->first();
        $order_item->delete();

        return back();
    }

    public function checkout() {
        Order::query()->where('user_id', Auth::user()->id)->delete();

        return redirect()->route('order.checkout.success');
    }

    public function checkoutSuccess() {
        return view('orderSuccess', [
            'title' => 'Order'
        ]);
    }
}
