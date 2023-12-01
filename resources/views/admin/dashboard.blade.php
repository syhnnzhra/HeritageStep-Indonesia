@extends('admin.layouts.main')

@section('container')
<div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title center-text">Rp xxx.xxx.xxx </h3>
            <p class="center-text">Total Pendapatan</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-primary uk-card-body">
            <h3 class="uk-card-title center-text">500</h3>
            <p class="center-text">Total Produk</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-secondary uk-card-body">
            <h3 class="uk-card-title center-text">5000 Orang </h3>
            <p class="center-text">Total Customer</p>
        </div>
    </div>
</div>

<br>

<div class="uk-card uk-card-default uk-card-body">
    <h3 class="uk-card-title">Default</h3>
    <p>Lorem ipsum <a href="#">dolor</a> sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>
@endsection