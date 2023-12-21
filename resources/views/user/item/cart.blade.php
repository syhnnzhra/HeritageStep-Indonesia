@extends('user.layouts.layout')

@section('container')
<div class="uk-container uk-mb">
    <h1 class="text-center mb-10">Carts</h1>
    <div class="cart flex justify-center">
        <div class="mr-5">
        @php
            $subtotal = 0; 
        @endphp
        @if(count($orderedItems) > 0)
            @foreach ($orderedItems as $cart)
                <!-- Card Pertama -->
                <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                    <div class="uk-card-media-left uk-cover-container">
                        <img src="https://source.unsplash.com/400x400/?category-products" alt="Product Image" uk-cover>
                        <canvas width="600" height="400"></canvas>
                    </div>
                    <div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">{{ $cart->item->nama }}</h3>
                            <div class="uk-flex uk-flex-middle">
                                <button class="uk-icon-button uk-margin-small-right" uk-icon="icon: plus" onclick="tambahJumlah()"></button>
                                <form>
                                    <input class="uk-input uk-form-blank uk-form-width-xsmall" type="text" id="jumlah-barang" value="{{ $cart->qty }}" readonly>
                                </form>
                                <button class="uk-icon-button" uk-icon="icon: minus" onclick="kurangJumlah()" disabled></button>
                            </div>
                            <p class="uk-margin-remove-top">Harga: </p>
                            <p class="uk-margin-remove-top">Rp {{ number_format($cart->item->harga) }}</p>
                            
                            @php
                                $subtotal += $cart->qty * $cart->item->harga;
                            @endphp
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="uk-card uk-card-default uk-margin">
                <div class="uk-card-body">
                    <h3 class="uk-card-body">You haven't chosen a product yet</h3>
                </div>
            </div>
        @endif
        </div>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-top">
        <h3>Subtotal</h3>
        <p>Rp {{ number_format($subtotal) }}</p>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-top">
        <h1></h1>
        <a href="/checkout" class="uk-button custom-green-button"> checkout</a>
        <!-- <button class="uk-button uk-button-primary" onclick="checkout()">Checkout</button> -->
    </div>
</div>

<script>
    var jumlahBarang = 1;

    function tambahJumlah() {
        jumlahBarang++;
        updateJumlah();
    }

    function kurangJumlah() {
        if (jumlahBarang > 1) {
            jumlahBarang--;
            updateJumlah();
        }
    }

    function updateJumlah() {
        document.getElementById('jumlah-barang').value = jumlahBarang;

        // Aktifkan atau nonaktifkan tombol kurang berdasarkan jumlah barang
        var tombolKurang = document.querySelector('.uk-icon-button[uk-icon="icon: minus"]');
        tombolKurang.disabled = (jumlahBarang === 1);
    }

    function checkout() {
        // Logika untuk proses checkout
        alert('Proses checkout dilakukan.');
    }
</script>
@endsection





<!-- cek doang
@section('test')
@foreach ($orderedItems as $orderedItem)
    <div>
        <p>{{ $orderedItem->item->nama }}</p>
        <p>Qty: {{ $orderedItem->qty }}</p>
        <p>Pesan: {{ $orderedItem->pesan }}</p>
    </div>
@endforeach

<a href="/checkout" class="uk-button custom-green-button">Checkout</a>
@endsection  -->
