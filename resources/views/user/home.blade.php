@extends('user.layouts.layout')

@section('slider')

<div class="promo-banner">
    <div class="promo-content">
        <h1>Diskon 30%!</h1>
        <h3>Produk baru aerostreet cyberhoops</h3>
    </div>
</div>
@endsection

@section('container')
<div class="uk-container uk-mb">
    <h3 class="uk-text-center">Category</h3>

    <div class="uk-slider-container-offset" uk-slider>
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
            <ul class="uk-slider-items uk-child-width-1-5@s uk-grid">
                @foreach ($kategori as $kat)
                <li>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top">
                            <img src="https://source.unsplash.com/400x400/?product" width="1800" height="1200" alt="">
                        </div>
                        <div class="uk-card-footer w-hijau">
                            <p class="uk-card-title kategori-nama">{{ $kat->nama }}</p>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>

    </div>

    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

</div>

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
                    <h4 class="uk-card-title">Rp {{ number_format($item->harga) }}</h4>
                    <p>{{ $item->keterangan }}</p>
                    <!-- <a href="/detail-product/{{ $item->id }}" class="uk-button custom-green-button">Buy Now!</a> -->
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

@endsection