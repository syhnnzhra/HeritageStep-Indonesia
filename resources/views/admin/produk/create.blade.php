@extends('admin.layouts.main')
@section('container')
<div class="uk-card uk-card-default uk-card-body uk-width-1-1@m produk mb-10">
    <h3 class="uk-card-title ">Tambah Produk</h3>
</div>
<div class="uk-container">
    <div class="uk-card uk-card-default uk-card-body uk-width-1-1@m">
        <form class="uk-form-stacked" method="post" action="/produk/store">
            @csrf
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Nama Produk</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" name="nama" required type="text" placeholder="Masukan nama produk">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Kategori Produk</label>
                <div class="uk-form-controls">
                    <select class="uk-select" id="form-stacked-select">
                        <option>Option 01</option>
                        <option>Option 02</option>
                    </select>
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Stok</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" name="stock" required type="number" placeholder="Masukan kategori produk">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Harga</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" name="harga" required type="number" placeholder="Masukan kategori produk">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Deskripsi</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" name="keterangan" required type="text" placeholder="Masukan kategori produk">
                </div>
            </div>
            <div class="uk-margin" uk-margin>
                <label class="uk-form-label" for="form-stacked-text">Foto</label>
                <div uk-form-custom="target: true">
                    <input type="file" aria-label="Custom controls">
                    <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" aria-label="Custom controls" disabled>
                </div>
                <button class="uk-button uk-button-default">Submit</button>
            </div>
            <div class="uk-margin" uk-margin>
                <button class="uk-button uk-button-default" type="submit">Kirim</button>
            </div>
        </form>
    </div>
</div>
@endsection