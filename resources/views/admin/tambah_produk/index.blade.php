@extends('admin.layouts.main')
@section('container')
<form action="/tambahdata" method="POST" enctype="multipart/form-data">
@csrf
    <fieldset class="uk-fieldset">

        <legend class="uk-legend">Tambahkan Produk</legend>

        <div class="uk-margin m-10">
            <input class="uk-input" type="text" placeholder="Masukkan Judul Barang" aria-label="Masukkan Judul Barang">
        </div>

        <form>

<!-- <div class="uk-margin">
    <div uk-form-custom>
        <input type="file" aria-label="Custom controls">
        <button class="uk-button uk-button-default" type="button" tabindex="-1">Select</button>
    </div>
</div> -->

<div class="uk-margin m-10 mx-5">
    <div uk-form-custom>
        <input type="file" aria-label="Custom controls">
    </div>
</div>

<div class="uk-margin m-10">
    <div uk-form-custom="target: true">
        <input type="file" aria-label="Custom controls">
        <input class="uk-input" type="text" placeholder="Select file" aria-label="Custom controls" disabled>
    </div>
    <button class="uk-button uk-button-default">Submit</button>
</div>

</form>

        <div class="uk-margin m-10">
            <textarea class="uk-textarea" rows="5" placeholder="Deskripsi" aria-label="Deskripsi"></textarea>
        </div>

        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid m-10">
            <label><input class="uk-radio" type="radio" name="radio2" checked>S</label>
            <label><input class="uk-radio" type="radio" name="radio2">M</label>
            <label><input class="uk-radio" type="radio" name="radio2">L</label>
            <label><input class="uk-radio" type="radio" name="radio2">XL</label>
            <label><input class="uk-radio" type="radio" name="radio2">XXL</label>
            <label><input class="uk-radio" type="radio" name="radio2"></label>
        </div>

        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid m-10">
            <label><input class="uk-checkbox" type="checkbox" checked>38</label>
            <label><input class="uk-checkbox" type="checkbox">37</label>
            <label><input class="uk-checkbox" type="checkbox">39</label>
            <label><input class="uk-checkbox" type="checkbox">40</label>
            <label><input class="uk-checkbox" type="checkbox">41</label>
            <label><input class="uk-radio" type="radio" name="radio2"></label>
        </div>
     
        <!-- <div class="uk-margin">
            <input class="uk-range" type="range" value="2" min="0" max="10" step="0.1" aria-label="Range">
        </div> -->

    </fieldset>
</form>

<p class="uk-margin mx-10">
    <button class="uk-button uk-button-default" type="button" onclick="UIkit.notification({message: 'Data berhasil Ditambahkan', pos: 'top-center'})">simpan</button>
</p>

@endsection