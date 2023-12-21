<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetail;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function showCart()
    {
        $order = Order::where('user_id', Auth::id())->where('status', 'pending')->first();

        if ($order) {
            $orderedItems = OrderDetail::where('order_id', $order->id)->get();
        } else {
            $orderedItems = collect();
        }
        return view('user.item.cart', compact('orderedItems'));
    }

    public function showCheckout()
    {
        // Dapatkan order yang masih dalam status 'pending' untuk pengguna yang sedang login
        $order = Order::where('user_id', Auth::id())
            ->where('status', 'pending')
            ->first();

        return view('checkout', compact('order'));
    }
}
