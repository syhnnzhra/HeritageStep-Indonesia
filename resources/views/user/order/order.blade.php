@extends('user.layouts.layout')

@section('container')
<div class="uk-container">
    <h1>My Orders</h1>
    <div class="uk-child-width-1-2@m uk-grid-small uk-grid-match" uk-grid>
            @foreach($order as $o)
            <a href="/my-order/{{ $o->id }}" class="uk-link-heading">
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <h3 class="uk-card-title">{{ $o->first_name }}</h3>
                        <p>Order ID : {{ $o->id }}</p>
                        <p>Subtotal : Rp {{ number_format($o->subtotal) }}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
</div>
@endsection