@extends('admin.layouts.main')
@section('container')
<div class="uk-card uk-card-default uk-card-body uk-width-1-1@m">
    <h3 class="uk-card-title">Pesanan</h3>
</div>
<div class="uk-child-width-1-3@s uk-grid-match " uk-grid>
    
    <div>
        <div class="uk-card uk-card-default uk-card-hover uk-card-body my-10 mx-5">
            <h3 class="uk-card-title text-center">DIPROSES</h3>
            <p class="text-center">100</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-hover uk-card-body my-10 ">
            <h3 class="uk-card-title text-center">DIKIRIM</h3>
            <p class="text-center">100</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-hover uk-card-body my-10 mr-5">
            <h3 class="uk-card-title text-center">SELESAI</h3>
            <p class="text-center">100</p>
        </div>
    </div>
 
    
</div>

<table class="uk-table uk-table-hover uk-table-divider my-10 mx-5 ">
    <caption style="color:black">Laporan Pengiriman</caption>
    <thead>
        <tr>
            <th style="color:black; background-color:#39A7FF;">Nama Penerima</th>
            <th style="color:black; background-color:#39A7FF;"> ID Pesanan</th>
            <th style="color:black; background-color:#39A7FF;"> Nomor Resi</th>
            <th style="color:black; background-color:#39A7FF;"> Tanggal Pesanan</th>
            <th style="color:black; background-color:#39A7FF;"> Total Jumlah Barang</th>
            <th style="color:black; background-color:#39A7FF;"> Status Pembayaran</th>
            <th style="color:black; background-color:#39A7FF;"> Status Pengiriman</th>
        </tr>
    </thead>
    <tbody style="color:black">
        <tr>
            <td>THIA</td>
            <td>HT-11111</td>
            <td>6498629642817</td>
            <td>12-12-2023</td>
            <td>150.000</td>
            <td>COD</td>
            <td>Diproses</td>
        </tr>
        <tr>
            <td>THIA</td>
            <td>HT-11111</td>
            <td>6498629642817</td>
            <td>12-12-2023</td>
            <td>150.000</td>
            <td>COD</td>
            <td>Diproses</td>
        </tr>
        <tr>
            <td>THIA</td>
            <td>HT-11111</td>
            <td>6498629642817</td>
            <td>12-12-2023</td>
            <td>150.000</td>
            <td>COD</td>
            <td>selesai</td>
        </tr>
        <tr>
            <td>THIA</td>
            <td>HT-11111</td>
            <td>6498629642817</td>
            <td>12-12-2023</td>
            <td>150.000</td>
            <td>COD</td>
            <td>selesai</td>
        </tr>
        <tr>
            <td>THIA</td>
            <td>HT-11111</td>
            <td>6498629642817</td>
            <td>12-12-2023</td>
            <td>150.000</td>
            <td>COD</td>
            <td>selesai</td>
        </tr>
        <tr>
            <td>THIA</td>
            <td>HT-11111</td>
            <td>6498629642817</td>
            <td>12-12-2023</td>
            <td>150.000</td>
            <td>COD</td>
            <td>Diproses</td>
        </tr>
        <tr>
            <td>THIA</td>
            <td>HT-11111</td>
            <td>6498629642817</td>
            <td>12-12-2023</td>
            <td>150.000</td>
            <td>COD</td>
            <td>Diproses</td>
        </tr>
    </tbody>
</table>    

@endsection
