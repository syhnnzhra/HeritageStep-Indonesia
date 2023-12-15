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

    <h3 class="uk-text-center">All Product</h3>
    <form>
        <fieldset class="uk-fieldset">
            <div class="uk-margin">
                <input class="uk-input form" type="text" placeholder="Cari Produk Disini" aria-label="Input">
                <button type="submit" class="uk-button custom-green-button uk-form-width-small">Cari</button>
            </div>
        </fieldset>
    </form>

    <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
        @foreach ($items as $item)
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <img src="{{ $item->foto }}}}" alt="">
                <h5 class="uk-margin-remove-top uk-margin-remove-bottom">{{ $item->category->nama }}</h5>
                <h3 class="uk-card-title uk-margin-remove-top uk-margin-remove-bottom">{{ $item->nama }}</h3>
                <p class="uk-margin-remove-top uk-margin-remove-top uk-margin-remove-bottom">{{ $item->keterangan }}</p>
                <p class="uk-margin-remove-top uk-margin-remove-bottom">Rp {{ number_format($item->harga) }}</p>
                <a href="/detail-product/{{ $item->id }}" class="uk-button custom-green-button">Buy Now!</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection