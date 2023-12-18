<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class RajaOngkirController extends Controller
{
    public function index()
    {
        $provinces = $this->getProvinces();

        return view('user.coba_ongkir.coba', compact('provinces'));
    }

    public function getProvinces()
    {
        $client = new Client();

        $response = $client->get('https://api.rajaongkir.com/starter/province', [
            'headers' => [
                'key' => 'b102635f70187c8e0d6f02db01cc5c94',
            ],
        ]);

        return json_decode($response->getBody(), true)['rajaongkir']['results'];
    }

    public function getCities(Request $request)
    {
        $provinceId = $request->input('province_id');

        $client = new Client();

        $response = $client->get("https://api.rajaongkir.com/starter/city?province=$provinceId", [
            'headers' => [
                'key' => 'b102635f70187c8e0d6f02db01cc5c94',
            ],
        ]);

        return json_decode($response->getBody(), true)['rajaongkir']['results'];
    }

    public function calculateShippingCost(Request $request)
    {
        // Logika perhitungan ongkir di sini
        // ...

        return response()->json(['shipping_cost' => $calculatedCost]);
    }

}
