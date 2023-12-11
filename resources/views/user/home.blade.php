@extends('user.layouts.layout')

@section('container')
<div class="uk-container uk-mb">
    <h3 class="uk-text-center">Category</h3>

    <div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <img src="img/user.png" alt="">
            </div>
            <div class="uk-card-footer uk-text-center w-hijau">
                <a href="#" class="uk-button uk-button-text">Sepatu</a>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <img src="img/user.png" alt="">
            </div>
            <div class="uk-card-footer uk-text-center w-hijau">
                <a href="#" class="uk-button uk-button-text">Sepatu</a>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <img src="img/user.png" alt="">
            </div>
            <div class="uk-card-footer uk-text-center w-hijau">
                <a href="#" class="uk-button uk-button-text">Sepatu</a>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <img src="img/user.png" alt="">
            </div>
            <div class="uk-card-footer uk-text-center w-hijau">
                <a href="#" class="uk-button uk-button-text">Sepatu</a>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <img src="img/user.png" alt="">
            </div>
            <div class="uk-card-footer uk-text-center w-hijau">
                <a href="#" class="uk-button uk-button-text">Sepatu</a>
            </div>
        </div>
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
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <img src="img/logo.png" alt="">
                <h5 class="uk-margin-remove-top uk-margin-remove-bottom">Sepatu</h5>
                <h3 class="uk-card-title uk-margin-remove-top uk-margin-remove-bottom">Aerostreet cyberhoops</h3>
                <p class="uk-margin-remove-top uk-margin-remove-top uk-margin-remove-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p class="uk-margin-remove-top uk-margin-remove-bottom">Rp 300.000</p>
                <button class="uk-button custom-green-button">Buy Now!</button>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <img src="img/logo.png" alt="">
                <h5 class="uk-margin-remove-top uk-margin-remove-bottom">Sepatu</h5>
                <h3 class="uk-card-title uk-margin-remove-top uk-margin-remove-bottom">Aerostreet cyberhoops</h3>
                <p class="uk-margin-remove-top uk-margin-remove-top uk-margin-remove-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p class="uk-margin-remove-top uk-margin-remove-bottom">Rp 300.000</p>
                <button class="uk-button custom-green-button">Buy Now!</button>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <img src="img/logo.png" alt="">
                <h5 class="uk-margin-remove-top uk-margin-remove-bottom">Sepatu</h5>
                <h3 class="uk-card-title uk-margin-remove-top uk-margin-remove-bottom">Aerostreet cyberhoops</h3>
                <p class="uk-margin-remove-top uk-margin-remove-top uk-margin-remove-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p class="uk-margin-remove-top uk-margin-remove-bottom">Rp 300.000</p>
                <button class="uk-button custom-green-button">Buy Now!</button>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <img src="img/logo.png" alt="">
                <h5 class="uk-margin-remove-top uk-margin-remove-bottom">Sepatu</h5>
                <h3 class="uk-card-title uk-margin-remove-top uk-margin-remove-bottom">Aerostreet cyberhoops</h3>
                <p class="uk-margin-remove-top uk-margin-remove-top uk-margin-remove-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p class="uk-margin-remove-top uk-margin-remove-bottom">Rp 300.000</p>
                <button class="uk-button custom-green-button">Buy Now!</button>
            </div>
        </div>
    </div>
</div>
@endsection