<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetail;
use App\Models\Order;
use App\Models\Item;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalPendapatan = Order::where('payment_status', 'PAID')->sum('subtotal');
        $totalProduk = Item::all()->count();
        $totalOrderPaid = Order::where('payment_status', 'PAID')->count();
        return view('admin.dashboard.index', [
            'odetail' => OrderDetail::all(),
            'total' => $totalPendapatan,
            'totalorder' => $totalOrderPaid,
            'totalProduk' => $totalProduk
        ]);
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
}
