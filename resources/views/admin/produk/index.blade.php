@extends('admin.layouts.main')
@section('container')
    <div class="uk-card uk-card-default uk-width-1-1@m my-5 mx-5">
        <h3 class="uk-card-title">Produk</h3>
    </div>
    <!-- icon -->
    <!-- <div class="uk-table uk-table-divider my-10 ml-96">
        <a href="/add" class="uk-icon-link costum.ikon" style="color:black;" uk-icon="plus" ></a>
        <a href="/edit" class="uk-icon-link uk-margin-small-right" style="color:black;" uk-icon="file-edit"></a>
        <a href="/hapus" class="uk-icon-link" style="color:black;" uk-icon="trash"></a>
    
        <form class="uk-search uk-search-default">
            <a href="" class="uk-search-icon-flip" uk-search-icon style="color:black;"></a>
            <input class="uk-search-input" type="search" placeholder="Search" aria-label="Search">
        </form>
    </div> -->
    <div class="uk-overflow-auto mr-2 my-5">
    <a href="/produk/create" class="my-10 mx-5" style="font-size:15px;"> Tambah Data</a>
        <table class="uk-table uk-table-hover uk-table-middle uk-table-divider my-0 mx-5">
            <thead>
                <tr>
                    <!-- <th class="uk-table-shrink"></th> -->
                    <th class="uk-table-shrink" style="color:black;">Produk</th>
                    <th class="uk-width-small" style="color:black;">Nama Produk</th>
                    <th class="uk-width-small" style="color:black;">Deskripsi</th>
                    <th class="uk-table-shrink uk-text-nowrap" style="color:black;">Id Produk</th>
                    <th class="uk-table-shrink uk-text-nowrap"style="color:black;">Harga</th>
                    <th class="uk-table-shrink uk-text-nowrap"style="color:black;">Stock</th>
                    <th class="uk-table-shrink uk-text-nowrap"style="color:black;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $produk)
                <tr>
                    <!-- <td><input class="uk-checkbox" type="checkbox" aria-label="Checkbox"></td> -->
                    <td><div class="image-wrapper"><img class="image" src="gambar/{{ $produk->foto }}"/></div></td>
                    <td class="uk-table-link">
                        <a class="uk-link-reset" href="">{{ $produk->nama }}</a>
                    </td>
                    <td class="uk-text-truncate">{{ $produk->keterangan }}</td>
                    <td class="uk-text-nowrap ">{{ $produk->id }}</td>
                    <td class="uk-text-nowrap">Rp {{ number_format($produk->harga) }}</td>
                    <td class="uk-text-nowrap">{{ $produk->stock }}</td>
                    <td class="uk-text-nowrap">
                        <a href="{{route('produk.edit',$produk->id)}}">Edit</a>
                        <form action="{{route('produk.destroy',$produk->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit">
                                delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection