@extends('admin.layouts.main')
@section('container')

<div class="uk-card uk-card-default uk-width-1-1@m my-5 mx-5">
    <h3 class="uk-card-title">Dashboard</h3>
</div>
<nav class="uk-navbar my-1 mx-5 " uk-navbar >
    <div class="uk-navbar-left" >

        <div class="uk-navbar-item ">
            <form class="uk-search uk-search-navbar">
                <span uk-search-icon></span>
                <input class="uk-search-input" type="Cari" placeholder="Cari" aria-label="Cari">
            </form>
        </div>

    </div>
</nav>
<div class="uk-child-width-1-3@s uk-grid-match " uk-grid>
    <div>
        <div class="uk-card uk-card-hover uk-card-body my-5 mx-5">
            <h3 class="uk-card-title" style="color:black;">Total Pendapatan</h3>
            <p style="color:black;">Rp {{ number_format($total) }}</p>
        </div>
    </div>
    <div>
    <div class="uk-card uk-card-hover uk-card-body my-5 mx-5">
            <h3 class="uk-card-title" style="color:black;">Total Produk</h3>
            <p style="color:black;">{{ $totalProduk }}</p>
        </div>
    </div>
    <div>
    <div class="uk-card uk-card-hover uk-card-body my-5 mx-5">
            <h3 class="uk-card-title" style="color:black;">total Order</h3>
            <p style="color:black;">{{ $totalorder }}</p>
        </div>
        </div>
    </div>

    <div>
    <div class="uk-overflow-auto mr-2 my-5">
    <table class="uk-table uk-table-hover my-5 mx-5">
        
        <thead>
            <tr>
               
                <caption style="color:black;">pesanan baru-baru ini</caption>
                <th class="uk-width-small" style="color:black;">Barang</th>
                <th class="uk-width-small" style="color:black;">Nama Barang</th>
                <th class="uk-table-shrink uk-text-nowrap" style="color:black;">Harga Barang</th>
                <th class="uk-table-shrink uk-text-nowrap" style="color:black;">status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($odetail as $product)
            <tr>
                <!-- <td><input class="uk-checkbox" type="checkbox" aria-label="Checkbox"></td> -->
                <td><div class="image-wrapper "><img class="image" src="{{ $product->item->foto }}" width="80" height="80"/></div></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href="">{{ $product->item->nama }}</a>
                </td>
                <td class="uk-text-truncate">Rp {{ number_format($product->item->harga) }}</td>
                <td class="uk-text-nowrap">{{ $product->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
<!-- -------------------------------------------------------------------------------->
   

@endsection
