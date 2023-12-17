@extends('user.layouts.layout')

@section('container')
<div class="uk-container uk-mb">
    <h3 class="uk-text-center">All Products</h3>

    <form>
        <fieldset class="uk-fieldset">
            <div class="uk-margin">
                <input class="uk-input form" type="text" placeholder="Cari Produk Disini" aria-label="Input">
                <button type="submit" class="uk-button custom-green-button uk-form-width-small">Cari</button>
            </div>
        </fieldset>
    </form>

    <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
        @foreach($items as $item)
        <div>
            <div class="uk-card uk-card-default badge-color uk-card uk-card-hover">
            <div class="uk-card-badge uk-label"><p>{{ $item->category->nama }}</p></div>
                <div class="uk-card-media-top">
                    <img src="{{ $item->foto }}" width="1800" height="1200" alt="">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">{{ $item->nama }}</h3>
                    <p>{{ $item->keterangan }}</p>
                    @auth
                        <button class="uk-button custom-green-button uk-margin-small-right" type="button" uk-toggle="target: #modal-example">Buy</button>
                        <div id="modal-example" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body">
                                <div>
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <div class="uk-card-media-top">
                                        <img src="https://source.unsplash.com/400x400/?product" width="800" height="600" alt="">
                                    </div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title">Media Top</h3>
                                        <p>Harga :</p>
                                        <span>Rp xxx.xxx</span>
                                        <br>
                                        <div class="tambah-barang uk-flex uk-flex-middle">
                                            <button class="uk-icon-button uk-margin-small-right" uk-icon="icon: plus" onclick="tambahJumlah()"></button>
                                            <form>
                                                <input class="uk-input uk-form-blank uk-form-width-xsmall" type="text" id="jumlah-barang" value="1" readonly>
                                            </form>
                                            <button class="uk-icon-button" uk-icon="icon: minus" onclick="kurangJumlah()" disabled></button>
                                        </div>
                                        <button class="uk-button custom-green-button">Beli</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <a href="/profile" class="uk-button custom-green-button">Buy Now!</a>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
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