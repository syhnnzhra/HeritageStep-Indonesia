@extends('user.layouts.layout')

@section('container')
<div class="uk-container">
    <div class="uk-card uk-card-default uk-card-body uk-width-1-1@m">
        <h1 class="uk-card-title text-center">Invoice</h1>
        <h3 class="uk-card-title">Order ID : {{ $order->id }}</h3>
        <p>First Name : {{ $order->first_name }}</p>
        <p>Last Name : {{ $order->last_name }}</p>
        <p>Date : {{ $order->updated_at }}</p>
        <p>Telephone Number : {{ $order->telphone }}</p>
        <p>Sub Total : RP {{ number_format($order->subtotal) }}</p>
    </div>

    <div class="uk-child-width-1-4@m mt-10" uk-grid>
        @foreach($odetail as $od)
        <div>
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                    <img src="{{ $od->item->nama }}" width="1800" height="1200" alt="">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">{{ $od->item->nama }}</h3>
                    <p>qty : {{ $od->qty }}</p>
                    <p>price : Rp {{ number_format($od->item->harga) }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection