@extends('admin.layouts.main')
@section('container')
<div class="uk-card uk-card-default  uk-width-1-1@m produk my-5 mx-5">
    <h3 class="uk-card-title ">Tambah Produk</h3>
</div>
<div class="uk-container">
    <div class="uk-card uk-card-default uk-card-body uk-width-1-1@m">
        <form class="uk-form-stacked" method="post" action="{{ route('produk.store') }}" enctype="multipart/form-data">
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
                    <select class="uk-select" name="category_id" id="form-stacked-select">
                        @foreach ($category as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Stok</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" name="stok" required type="number" placeholder="Masukan kategori produk">
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
                    <input type="file" aria-label="Custom controls" name="foto" required>
                    <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" aria-label="Custom controls" disabled>
                </div>
                <!-- <button class="uk-button uk-button-default" type="submit">Submit</button> -->
            </div>

            <div class="uk-margin" uk-margin>
                <button class="uk-button uk-button-default" type="submit">Kirim</button>
            </div>
        </form>
    </div>
</div>
@endsection