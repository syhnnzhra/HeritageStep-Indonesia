@extends('admin.layouts.main')
@section('container')
<div class="uk-card uk-card-default uk-card-body uk-width-1-1@m ">
    <h3 class="uk-card-title">Dashboard</h3>
</div>
<div class="uk-child-width-1-3@s uk-grid-match " uk-grid>
    <div>
        <div class="uk-card uk-card-hover uk-card-body my-10 mx-5">
            <h3 class="uk-card-title" style="color:black;">Total Pendapatan</h3>
            <p style="color:black;">10.000.000</p>
        </div>
    </div>
    <div>
    <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light my-10 mx-5">
            <h3 class="uk-card-title" style="color:black;">Total Produk</h3>
            <p style="color:black;">100</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light my-10 mx-5">
            <h3 class="uk-card-title" style="color:black;">total keuntungan</h3>
            <p style="color:black;">15.000.000</p>
        </div>
        </div>
    </div>

    <div>
    <div class="uk-overflow-auto">
    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider my-5 mx-5">
        
        <thead>
            <tr>
                <th class="uk-table-shrink"></th>
                <caption style="color:black;">pesanan baru-baru ini</caption>
                <th class="uk-table-expand" style="color:black;">Barang</th>
                <th class="uk-width-small" style="color:black;">Nama Barang</th>
                <th class="uk-table-shrink uk-text-nowrap" style="color:black;">Harga Barang</th>
                <th class="uk-table-shrink uk-text-nowrap" style="color:black;">status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <!-- <td><input class="uk-checkbox" type="checkbox" aria-label="Checkbox"></td> -->
                <td><div class="image-wrapper"><img class="image" src="css/assets/rectangle-39.png" width="80" height="80"/></div></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href="">Baju</a>
                </td>
                <td class="uk-text-truncate">200.000</td>
                <td class="uk-text-nowrap">Diproses</td>
            </tr>
            <tr>
                <!-- <td><input class="uk-checkbox" type="checkbox" aria-label="Checkbox"></td> -->
                <td><div class="image-wrapper"><img class="image" src="css/assets/rectangle-39.png" width="80" height="80"/></div></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href="">Baju</a>
                </td>
                <td class="uk-text-truncate">200.000</td>
                <td class="uk-text-nowrap">Diproses</td>
            </tr>
            <tr>
                <!-- <td><input class="uk-checkbox" type="checkbox" aria-label="Checkbox"></td> -->
                <td><div class="uk-preserve-width uk-border-circle"><img class="image" src="css/assets/rectangle-39.png" width="80" height="80"/></div></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href="">Sepatu</a>
                </td>
                <td class="uk-text-truncate">200.000</td>
                <td class="uk-text-nowrap">Selesai</td>
            </tr>
            <tr>
                <!-- <td><input class="uk-checkbox" type="checkbox" aria-label="Checkbox"></td> -->
                <td><div class="image-wrapper"><img class="image" src="css/assets/rectangle-39.png" width="80" height="80"/></div></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href="">baju A</a>
                </td>
                <td class="uk-text-truncate"> 200.000</td>
                <td class="uk-text-nowrap">Diproses</td>
            </tr>
        </tbody>
    </table>
<!-- -------------------------------------------------------------------------------->
    <div class="uk-overflow-auto">
    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider my-5 mx-5">
    <caption>Laporan Pengiriman</caption>
        <thead>
            <tr>
                <th class="uk-table-shrink"></th>
                <!-- <caption>Laporan Pengiriman</caption> -->
                <th class="uk-table-shrink" style="color:black;">Barang</th>
                <th class="uk-table-expand" style="color:black;">Nama Barang</th>
                <th class="uk-width-small" style="color:black;">Harga Barang</th>
                <th class="uk-table-shrink uk-text-nowrap" style="color:black;">Status</th>
            </tr>
        </thead>
        <tbody>
             <tr>
                <!-- <td><input class="uk-checkbox" type="checkbox" aria-label="Checkbox"></td> -->
                <td><div class="image-wrapper"><img class="image" src="css/assets/rectangle-39.png" width="80" height="80"/></div></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href="">Baju</a>
                </td>
                <td class="uk-text-truncate">200.000</td>
                <td class="uk-text-nowrap">Diproses</td>
            </tr>
            <tr>
                <!-- <td><input class="uk-checkbox" type="checkbox" aria-label="Checkbox"></td> -->
                <td><div class="image-wrapper"><img class="image" src="css/assets/rectangle-39.png" width="80" height="80"/></div></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</a>
                </td>
                <td class="uk-text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</td>
                <td class="uk-text-nowrap">Lorem ipsum dolor</td>
            </tr>
            <tr>
                <!-- <td><input class="uk-checkbox" type="checkbox" aria-label="Checkbox"></td> -->
                <td><div class="image-wrapper"><img class="image" src="css/assets/rectangle-39.png" width="80" height="80"/></div></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</a>
                </td>
                <td class="uk-text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</td>
                <td class="uk-text-nowrap">Lorem ipsum dolor</td>
            </tr>
            <tr>
                <!-- <td><input class="uk-checkbox" type="checkbox" aria-label="Checkbox"></td> -->
                <td><div class="image-wrapper"><img class="image" src="css/assets/rectangle-39.png" width="80" height="80"/></div></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href=""></a>
                </td>
                <td class="uk-text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</td>
                <td class="uk-text-nowrap">Lorem ipsum dolor</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
