@extends('admin.layouts.main')
@section('container')
<div class="uk-card uk-card-default uk-card-body uk-width-1-1@m produk">
    <h3 class="uk-card-title">Produk</h3>
</div>
<!-- icon -->
<div class="uk-table uk-table-hover uk-table-middle uk-table-divider my-10 ml-96">
    <a href="#" class="uk-icon-link uk-margin-small-right costum.ikon" style="color:black;" uk-icon="plus" ></a>
    <a href="#" class="uk-icon-link uk-margin-small-right" style="color:black;" uk-icon="file-edit"></a>
    <a href="#" class="uk-icon-link" style="color:black;" uk-icon="trash"></a>

    <!-- <div class="uk-margin"> -->
    <form class="uk-search uk-search-default">
        <a href="" class="uk-search-icon-flip" uk-search-icon style="color:black;"></a>
        <input class="uk-search-input" type="search" placeholder="Search" aria-label="Search">
    </form>
<!-- </div> -->
</div>
<div class="uk-overflow-auto">
    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider my-0 mx-5">
        <thead>
            <tr>
                <th class="uk-table-shrink"></th>
                <th class="uk-table-shrink" style="color:black;">Produk</th>
                <th class="uk-width-small" style="color:black;">Nama Produk</th>
                <th class="uk-table-expand" style="color:black;">Deskripsi</th>
                <th class="uk-table-shrink uk-text-nowrap" style="color:black;">Id Produk</th>
                <th class="uk-table-shrink uk-text-nowrap"style="color:black;">Harga</th>
                <th class="uk-table-shrink uk-text-nowrap"style="color:black;">Stock</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input class="uk-checkbox" type="checkbox" aria-label="Checkbox"></td>
                <td><div class="image-wrapper"><img class="image" src="css/assets/pro1.png"/></div></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href="">sepatu</a>
                </td>
                <td class="uk-text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</td>
                <td class="uk-text-nowrap">2363762</td>
                <td class="uk-text-nowrap">300.000</td>
                <td class="uk-text-nowrap">20</td>
            </tr>
            <tr>
                <td><input class="uk-checkbox" type="checkbox" aria-label="Checkbox"></td>
                <td><div class="image-wrapper"><img class="image" src="css/assets/pro1.png"/></div></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href="">sepatu</a>
                </td>
                <td class="uk-text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</td>
                <td class="uk-text-nowrap">2363762</td>
                <td class="uk-text-nowrap">300.000</td>
                <td class="uk-text-nowrap">20</td>
            </tr>
            <tr>
                <td><input class="uk-checkbox" type="checkbox" aria-label="Checkbox"></td>
                <td><div class="image-wrapper"><img class="image" src="css/assets/pro1.png"/></div></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href="">sepatu</a>
                </td>
                <td class="uk-text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</td>
                <td class="uk-text-nowrap">2363762</td>
                <td class="uk-text-nowrap">300.000</td>
                <td class="uk-text-nowrap">20</td>
            </tr>
            <tr>
                <td><input class="uk-checkbox" type="checkbox" aria-label="Checkbox"></td>
                <td><div class="image-wrapper"><img class="image" src="css/assets/pro1.png"/></div></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href="">sepatu</a>
                </td>
                <td class="uk-text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</td>
                <td class="uk-text-nowrap">2363762</td>
                <td class="uk-text-nowrap">300.000</td>
                <td class="uk-text-nowrap">20</td>
            </tr>
        </tbody>
    </table>
</div>


@endsection