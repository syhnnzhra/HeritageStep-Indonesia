<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Province;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        $city = City::all();
        $provinces = Province::all();
        // $sum = Cart::where('user_id',Auth::user()->id)->where('order_id', '0')->count('user_id');
        $origin = 501;
        $destination = 114;
        $weight = 1700;
        $courier = "jne";
        $response = Http::asForm()->withHeaders([
            'key' => 'b102635f70187c8e0d6f02db01cc5c94'
        ])->post('https://api.rajaongkir.com/starter/cost',[
            'origin' => $origin,
            'destination' => $destination,
            'weight' => $weight,
            'courier' => $courier
        ]);
        return view('user.coba_ongkir.coba', compact('provinces','user','city','response'));
    }

    public function getCities($province_id)
    {
        $city = City::where('province_id', $province_id)->pluck('title', 'city_id');
        return json_encode($city);
    }

    public function check_ongkir(Request $request)
    {
        $destination = $request->destination;
        $weight = $request->weight;
        $courier = $request->courier;
        $cost = Http::asForm()->withHeaders([
            'key' => 'b102635f70187c8e0d6f02db01cc5c94'
        ])->post('https://api.rajaongkir.com/starter/cost',[
            'origin' => 23,
            'destination' => $destination,
            'weight' => $weight,
            'courier' => $courier
            ]);
        return $cost['rajaongkir']['results'];
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
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, City $city)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        //
    }
}
