@extends('admin.layouts.main')
@section('container')
<div class="uk-card uk-card-default uk-card-body uk-width-1-1@m">
    <h3 class="uk-card-title">Dashboard</h3>
</div>
<div class="uk-child-width-1-3@s uk-grid-match " uk-grid>
    <div>
        <div class="uk-card uk-card-hover uk-card-body my-10 mx-5">
            <h3 class="uk-card-title">Total Pendapatan</h3>
            <p>10.000.000</p>
        </div>
    </div>
    <div>
    <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light my-10 mx-5">
            <h3 class="uk-card-title">Total Produk</h3>
            <p>100</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light my-10 mx-5">
            <h3 class="uk-card-title">total keuntungan</h3>
            <p>15.000.000</p>
        </div>
        </div>
    </div>

    <div>
    <div class="uk-overflow-auto">
    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider underline-offset-auto my-5">
        <thead>
            <tr>
                <th class="uk-table-shrink"></th>
                <th class="uk-table-shrink">photo</th>
                <th class="uk-table-expand">Nama</th>
                <th class="uk-width-small">Harga</th>
                <th class="uk-table-shrink uk-text-nowrap">status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input class="uk-checkbox" type="checkbox" aria-label="Checkbox"></td>
                <td><img class="uk-preserve-width uk-border-circle" src="images/avatar.jpg" width="40" height="40" alt=""></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href="">Baju</a>
                </td>
                <td class="uk-text-truncate">200.000</td>
                <td class="uk-text-nowrap">Diproses</td>
            </tr>
            <tr>
                <td><input class="uk-checkbox" type="checkbox" aria-label="Checkbox"></td>
                <td><img class="uk-preserve-width uk-border-circle" src="images/avatar.jpg" width="40" height="40" alt=""></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href="">Sepatu</a>
                </td>
                <td class="uk-text-truncate">200.000</td>
                <td class="uk-text-nowrap">Selesai</td>
            </tr>
            <tr>
                <td><input class="uk-checkbox" type="checkbox" aria-label="Checkbox"></td>
                <td><img class="uk-preserve-width uk-border-circle" src="images/avatar.jpg" width="40" height="40" alt=""></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href="">baju A</a>
                </td>
                <td class="uk-text-truncate"> 200.000</td>
                <td class="uk-text-nowrap">Diproses</td>
            </tr>
        </tbody>
    </table>



@endsection
