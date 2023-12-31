<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetail;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class CheckoutController extends Controller
{
    public function index(){
        $order = Order::where('user_id', Auth::id())->where('status', 'pending')->first();
        $odetail = Order::where('user_id', Auth::id())->where('status', 'pending')->first();
        $provinces = $this->getProvinces();

        if ($order) {
            $orderedItems = OrderDetail::where('order_id', $order->id)->get();
        } else {
            $orderedItems = collect();
        }

        $params = [
            'transaction_details' => [
                'order_id' => rand(),
                'gross_amount' => $order->subtotal,
            ]
        ];
    
        return view('user.checkout.checkout', compact('orderedItems', 'provinces', 'params','odetail'));
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

    public function getCost(Request $request)
    {
        $origin = $request->input('origin');
        $destination = $request->input('destination');
        $weight = $request->input('weight');
        $courier = $request->input('courier');

        $client = new Client();
        $response = $client->post('https://api.rajaongkir.com/starter/cost', [
            'headers' => [
                'key' => 'b102635f70187c8e0d6f02db01cc5c94', 
            ],
            'form_params' => [
                'origin' => $origin,
                'destination' => $destination,
                'weight' => $weight,
                'courier' => $courier
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $cek_order = Order::where('user_id', Auth::id())->where('status', 'pending')->first();
        $cart = OrderDetail::where('order_id', $cek_order->id)->get();
        if ($cart) {
                $order = Order::create([
                    'user_id' => $request->user_id,
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'telephone' => $request->telephone,
                    'alamat' => $request->alamat,
                    'city_id' => $request->city_id,
                    'province_id' => $request->province,
                    'kode_pos' => $request->kode_pos,
                    'rincian_opsional' => $request->rincian_opsional,
                    'bank' => 'null',
                    'status' => 'ordered',
                    'postal_fee' => 11000,
                    'payment_status'=>"Paid",
                    'subtotal' => $request->subtotal,
                    'no_resi' => '1111'
                    ]);
                        foreach ($cart as $c) {
                            $c->order_id = $order->id;
                            $c->status = "Paid";
                            $c->save();
                        }

                    return redirect('/my-order');
            } else {
                return abort('404');
        }
    }
}
