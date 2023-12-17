@extends('user.layouts.layout')

@section('slider')
<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="center: true">

    <ul class="uk-slider-items uk-grid uk-grid-match" uk-height-viewport="offset-top: true; offset-bottom: 30">
        <li class="uk-width-3-4">
            <div class="uk-cover-container">
                <img src="https://source.unsplash.com/400x400/?product" alt="" uk-cover>
                <div class="uk-position-center uk-panel"></div>
            </div>
        </li>
        <li class="uk-width-3-4">
            <div class="uk-cover-container">
                <img src="https://source.unsplash.com/400x400/?product" alt="" uk-cover>
                <div class="uk-position-center uk-panel"></div>
            </div>
        </li>
        <li class="uk-width-3-4">
            <div class="uk-cover-container">
                <img src="https://source.unsplash.com/400x400/?product" alt="" uk-cover>
                <div class="uk-position-center uk-panel"></div>
            </div>
        </li>
        <li class="uk-width-3-4">
            <div class="uk-cover-container">
                <img src="https://source.unsplash.com/400x400/?product" alt="" uk-cover>
                <div class="uk-position-center uk-panel"></div>
            </div>
        </li>
        <li class="uk-width-3-4">
            <div class="uk-cover-container">
                <img src="https://source.unsplash.com/400x400/?product" alt="" uk-cover>
                <div class="uk-position-center uk-panel"></div>
            </div>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>

</div>
@endsection

@section('container')
<div class="uk-container uk-mb">
    <h3 class="uk-text-center">All Categories</h3>

    <form>
        <fieldset class="uk-fieldset">
            <div class="uk-margin">
                <input class="uk-input form" type="text" placeholder="Cari Produk Disini" aria-label="Input">
                <button type="submit" class="uk-button custom-green-button uk-form-width-small">Cari</button>
            </div>
        </fieldset>
    </form>

    <div class="uk-child-width-1-5@m" uk-grid>
    @foreach ($kategori as $kat)
        <div>
            <a href="/category?category={{ $kat->id }}">
                <div class="uk-card uk-card-default">
                    <div class="uk-card-badge uk-label">{{ $kat->nama }}</div>
                    <div class="uk-card-media-top">
                        <img src="https://source.unsplash.com/400x400/?category-products" width="1800" height="1200" alt="">
                    </div>
                </div>
            </a>
        </div>
    @endforeach
    </div>
</div>
@endsection