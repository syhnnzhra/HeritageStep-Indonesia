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

    <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
        <div class="uk-card-badge uk-label">Badge</div>
        <h3 class="uk-card-title">Title</h3>
        <p>Lorem ipsum color sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
</div>
@endsection