<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Midtrans\Notification;
use Midtrans\Config;
use Midtrans\Snap;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Payment;

class MidtransController extends Controller
{
    public function index(Request $request)
    {
        $transactionDetails = [
            'order_id' => uniqid(),
            'gross_amount' => 100000, // ganti dengan jumlah pembayaran yang sesuai
        ];

        $paymentUrl = Midtrans::getSnapToken($transactionDetails)->redirect_url;

        return redirect($paymentUrl);
    }

    public function notification(Request $request)
    {
        $payload = $request->getContent();
		$notification = json_decode($payload);
		
		$order = Order::where('order_id', $notification->order_id)->firstOrFail();
		$transaction = $notification->transaction_status;
        $type = $notification->payment_type;
        $order_id = $notification->order_id;
        $fraud = $notification->fraud_status;

		$vaNumber = null;
		$vendorName = null;
		if (!empty($paymentNotification->va_numbers[0])) {
			$vaNumber = $paymentNotification->va_numbers[0]->va_number;
			$vendorName = $paymentNotification->va_numbers[0]->bank;
		}

		$paymentStatus = $notification->transaction_status;
		if ($transaction == 'capture') {
			if ($type == 'credit_card') {
				if ($fraud == 'challenge') {
					$paymentStatus = Payment::CHALLENGE;
					$order->payment_status = "CONFIRMED";
					$order->save();
				} else {
					$paymentStatus = Payment::SUCCESS;
					$order->payment_status = "CONFIRMED";
					$order->save();
				}
			}
		} else if ($transaction == 'settlement') {
			$paymentStatus = Payment::SETTLEMENT;
			$order->payment_status = "CONFIRMED";
			$order->save();
		} else if ($transaction == 'pending') {
			$paymentStatus = Payment::PENDING;
			$order->payment_status = "PENDING";
			$order->save();
		} else if ($transaction == 'deny') {
			$paymentStatus = PAYMENT::DENY;
			$order->payment_status = "DENY";
			$order->save();
		} else if ($transaction == 'expire') {
			$paymentStatus = PAYMENT::EXPIRE;
			$order->payment_status = "EXPIRE";
			$order->save();
		} else if ($transaction == 'cancel') {
			$paymentStatus = PAYMENT::CANCEL;
			$order->payment_status = "CANCEL";
			$order->save();
		}

		$paymentParams = [
			'order_id' => $order->order_id,
			'amount' => $notification->gross_amount,
			'method' => 'midtrans',
			'status' => $paymentStatus,
			'token' => $notification->transaction_id,
			'payloads' => $payload,
			'payment_type' => $notification->payment_type,
			'va_number' => $vaNumber,
			'vendor_name' => "HeritageStep Indonesia"
		];
		
		$payment = Payment::create($paymentParams);

		$message = 'Payment status is : '. $paymentStatus;

		$response = [
			'code' => 200,
			'message' => $message,
		];

		// return response($response, 200);
		return redirect('/success');
    }

    protected function iniPaymentGateway(){
        \Midtrans\Config::$serverKey = 'SB-Mid-server-aNMQxvtK9-21YXNCnMUKtshp';
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;
    }
}
