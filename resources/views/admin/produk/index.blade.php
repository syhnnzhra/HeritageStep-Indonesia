@extends('admin.layouts.main')
@section('container')
<div class="uk-card uk-card-default uk-card-body uk-width-1-1@m ">
    <h3 class="uk-card-title">Produk</h3>
</div>
<div class="uk-overflow-auto">
    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider my-10 mx-5">
        <thead>
            <tr>
                <th class="uk-table-shrink"></th>
                <th class="uk-table-shrink">Produk</th>
                <th class="uk-width-small">Nama Produk</th>
                <th class="uk-table-expand">Deskripsi</th>
                <th class="uk-table-shrink uk-text-nowrap">Id Produk</th>
                <th class="uk-table-shrink uk-text-nowrap">Harga</th>
                <th class="uk-table-shrink uk-text-nowrap">Stock</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input class="uk-checkbox" type="checkbox" aria-label="Checkbox"></td>
                <td><img class="uk-preserve-width uk-border-circle" src="images/avatar.jpg" width="40" height="40" alt=""></td>
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
                <td><img class="uk-preserve-width uk-border-circle" src="images/avatar.jpg" width="40" height="40" alt=""></td>
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
                <td><img class="uk-preserve-width uk-border-circle" src="images/avatar.jpg" width="40" height="40" alt=""></td>
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
                <td><img class="uk-preserve-width uk-border-circle" src="images/avatar.jpg" width="40" height="40" alt=""></td>
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