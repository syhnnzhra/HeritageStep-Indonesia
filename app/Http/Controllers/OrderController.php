<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetail;
use App\Models\Order;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.order.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function orderItem(Request $request, $item_id)
    {
        $item = Item::find($item_id);

        $order = Order::firstOrNew([
            'user_id' => Auth::id(),
            'status' => 'pending',
            'first_name' => "cek",
            'last_name' =>"cek",
            'telephone' => "0891234567890",
            'alamat' => "jalanan",
            'city_id' => "23",
            'province_id' => "29",
            'kode_pos' => "40111",
            'bank' => "mandiri",
            'subtotal' => "100000",
            'postal_fee' => "100000",
            'no_resi' => "100000",

            // 'first_name' => Auth::user()->first_name,
            // 'last_name' => Auth::user()->last_name,
            // ... tambahkan kolom lain sesuai kebutuhan
        ]);
        $order->save();

        OrderDetail::create([
            'item_id' => $item->id,
            'user_id' => Auth::id(),
            'order_id' => $order->id,
            'qty' => 1,
            'status' => 'pending',
            'pesan' => 'cek'
        ]);

        return redirect('/carts');
        // return redirect()->back()->with('success', 'Item dimasukan ke dalam keranjang.');
    }
}
