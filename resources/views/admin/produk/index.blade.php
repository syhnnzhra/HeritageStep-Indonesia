@extends('admin.layouts.main')
@section('container')
<div class="uk-card uk-card-default my-5 mx-5 ">
    <h3 class="uk-card-title">Produk</h3>
</div>
<!-- icon -->
<!-- <div class="uk-margin uk-table-divider my-10 ml-96">
    <a href="/add" class="uk-icon-link table-responsive col-lg-8 " style="color:black;" uk-icon="plus" ></a>
    <a href="/edit" class="uk-icon-link uk-margin-small-right" style="color:black;" uk-icon="file-edit"></a>
    <a href="/hapus" class="uk-icon-link" style="color:black;" uk-icon="trash"></a> -->

    <div class=" uk-table-divider mx-5 search">
    <form class="uk-search uk-search-default">
        <a href="" class="uk-search-icon-flip" uk-search-icon style="color:black;"></a>
        <input class="uk-search-input" type="search" placeholder="Search" aria-label="Search">
    </form> 
 </div> 

  <div class="uk-table-divider  mx-5 my-5 ">
  <a href="/hapus" class="uk-icon-link" style="color:black;" uk-icon="trash"></a>
    <a href="/produk/create" class="uk-icon-link table-responsive col-lg-8 " style="color:black;" uk-icon="plus" ></a>
  </div>



 
<!-- </div> --> 
<div class="uk-overflow-auto">
<div class=" uk-table-divider  mx-5 my-1 data">
    <!-- <a href="/produk/create">Tambah Data</a> -->
    </div>
    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider my-3 mx-3">
        <thead>
            <tr>
                <th class="uk-table-shrink"></th>
                <th class="uk-table-shrink" style="color:black;">Produk</th>
                <th class="uk-width-small" style="color:black;">Nama Produk</th>
                <th class="uk-table-expand" style="color:black;">Deskripsi</th>
                <th class="uk-table-shrink uk-text-nowrap" style="color:black;">Id Produk</th>
                <th class="uk-table-shrink uk-text-nowrap"style="color:black;">Harga</th>
                <th class="uk-table-shrink uk-text-nowrap"style="color:black;">Sisa Barang</th>
                <th class="uk-text-nowrap aksi" style="color:black;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $produk)
            <tr>
                <td><input class="uk-checkbox" type="checkbox" aria-label="Checkbox"></td>
                <td><div class="image-wrapper"><img class="image" src="{{ $produk->foto }}"/></div></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href="">{{ $produk->nama }}</a>
                </td>
                <td class="uk-text-truncate">{{ $produk->keterangan }}</td>
                <td class="uk-text-nowrap">{{ $produk->id }}</td>
                <td class="uk-text-nowrap">Rp {{ number_format($produk->harga) }}</td>
                <td class="uk-text-nowrap">{{ $produk->stock }}</td>
                <td class="uk-text-nowrap">
                <div class="uk-table-divider">
                 
                 <a href="/edit" class="uk-icon-link uk-margin-small-right" style="color:black;" uk-icon="file-edit"></a>
                
</div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection