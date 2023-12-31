@extends('user.layouts.layout')

@section('container')
<div class="uk-container uk-mb">
    <h3 class="uk-text-center">All Products</h3>

    <form>
        <fieldset class="uk-fieldset">
            <div class="uk-margin">
                <input class="uk-input form" wire:model="search" name="nama" type="text" placeholder="Cari Produk Disini" aria-label="Input">
                <button type="submit" class="uk-button custom-green-button uk-form-width-small">Cari</button>
            </div>
        </fieldset>
    </form>
    

    <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
        @forelse($items as $item)
        <div>
            <div class="uk-card uk-card-default badge-color uk-card uk-card-hover">
            <div class="uk-card-badge uk-label">
                <p>{{ $item->category->nama }}</p>
            </div>
                <div class="uk-card-media-top">
                    <img src="{{ $item->foto }}" width="1800" height="1200" alt="">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">{{ $item->nama }}</h3>
                    <p>{{ $item->keterangan }}</p>
                    <p>Rp {{ number_format($item->harga) }}</p>
                    @auth
                        <button class="uk-button custom-green-button uk-margin-small-right" type="button" uk-toggle="target: #modal-example-{{ $item->id }}" data-product-id="{{ $item->id }}">Buy</button>
                        <div id="modal-example-{{ $item->id }}" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body">
                                <button class="uk-modal-close-default" type="button" uk-close></button>
                                <div class="uk-card-media-top">
                                    <img src="{{ $item->foto }}" width="800" height="600" alt="">
                                </div>
                                <div class="uk-card-body">
                                    <form method="post" action="{{ route('order.item', ['item_id' => $item->id]) }}">
                                    @csrf
                                        <h3 class="uk-card-title">{{ $item->nama }}</h3>
                                        <p>Harga :</p>
                                        <span>Rp {{ number_format($item->harga) }}</span>
                                        <!-- <div class="tambah-barang uk-flex uk-flex-middle">
                                            <button class="uk-icon-button uk-margin-small-right" uk-icon="icon: plus" onclick="tambahJumlah()"></button>
                                                <input class="uk-input uk-form-blank uk-form-width-xsmall" type="text" id="jumlah-barang" name="qty" value="1" readonly>
                                            <button class="uk-icon-button" uk-icon="icon: minus" onclick="kurangJumlah()" disabled></button>
                                        </div> -->
                                        <br>
                                        <!-- <a href="{{url('/cart',$item->id)}}" class="uk-button custom-green-button">Beli</a> -->
                                        <button type="submit" class="uk-button custom-green-button">Beli</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @else
                        <a href="/profile" class="uk-button custom-green-button">Buy Now!</a>
                    @endif
                </div>
            </div>
        </div>
        @empty
        <p>No products available</p>
        @endforelse
    </div>
</div>


<script>
    // var jumlahBarang = 1;

    // function tambahJumlah() {
    //     jumlahBarang++;
    //     updateJumlah();
    // }

    // function kurangJumlah() {
    //     if (jumlahBarang > 1) {
    //         jumlahBarang--;
    //         updateJumlah();
    //     }
    // }

    // function updateJumlah() {
    //     document.getElementById('jumlah-barang').value = jumlahBarang;

    //     var tombolKurang = document.querySelector('.uk-icon-button[uk-icon="icon: minus"]');
    //     tombolKurang.disabled = (jumlahBarang === 1);
    // }

    function checkout() {
        alert('Proses checkout dilakukan.');
    }
</script>
@endsection