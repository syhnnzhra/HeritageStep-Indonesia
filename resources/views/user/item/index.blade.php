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
                    <a href="/detail-product/{{ $item->id }}" class="uk-button custom-green-button">Buy Now!</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection