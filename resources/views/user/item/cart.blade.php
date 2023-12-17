@extends('user.layouts.layout')

@section('container')
<div class="uk-container uk-mb">
    <h1 class="text-center mb-10">Carts</h1>
    <div class="cart flex justify-center">
        <div class="mr-5">

            <!-- Card Pertama -->
            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                <div class="uk-card-media-left uk-cover-container">
                    <img src="https://source.unsplash.com/400x400/?category-products" alt="Product Image" uk-cover>
                    <canvas width="600" height="400"></canvas>
                </div>
                <div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Nama Barang</h3>
                        <div class="uk-flex uk-flex-middle">
                            <button class="uk-icon-button uk-margin-small-right" uk-icon="icon: plus" onclick="tambahJumlah()"></button>
                            <form>
                                <input class="uk-input uk-form-blank uk-form-width-xsmall" type="text" id="jumlah-barang" value="1" readonly>
                            </form>
                            <button class="uk-icon-button" uk-icon="icon: minus" onclick="kurangJumlah()" disabled></button>
                        </div>
                        <p class="uk-margin-remove-top">Harga: </p>
                        <p class="uk-margin-remove-top">Rp xx.xxx</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="">
            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                <div class="uk-card-media-left uk-cover-container">
                    <img src="https://source.unsplash.com/400x400/?category-products" alt="Product Image" uk-cover>
                    <canvas width="600" height="400"></canvas>
                </div>
                <div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Nama Barang</h3>
                        <div class="uk-flex uk-flex-middle">
                            <button class="uk-icon-button uk-margin-small-right" uk-icon="icon: plus" onclick="tambahJumlah()"></button>
                            <form>
                                <input class="uk-input uk-form-blank uk-form-width-xsmall" type="text" id="jumlah-barang" value="1" readonly>
                            </form>
                            <button class="uk-icon-button" uk-icon="icon: minus" onclick="kurangJumlah()" disabled></button>
                        </div>
                        <p class="uk-margin-remove-top">Harga: </p>
                        <p class="uk-margin-remove-top">Rp xx.xxx</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Keterangan Subtotal -->
    <div class="uk-flex uk-flex-between uk-margin-top">
        <h3>Subtotal</h3>
        <p>Rp xx.xxx</p>
    </div>

    <!-- Tombol Checkout -->
    <div class="uk-flex uk-flex-between uk-margin-top">
        <h1></h1>
        <button class="uk-button uk-button-primary" onclick="checkout()">Checkout</button>
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
