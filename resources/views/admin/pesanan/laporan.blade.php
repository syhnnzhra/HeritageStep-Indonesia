<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HeritageStep Indonesia | Laporan</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <table>
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
        <tbody>
            @foreach ($order as $o)
            <tr>
                <th>{{ $o->first_name }} {{ $o->last_name }}</th> 
                <th>{{ $o->id }}</th> 
                <th>{{ $o->no_resi }}</th> 
                <th>{{ $o->updated_at }}</th> 
                <th>Rp {{ number_format($o->subtotal) }}</th> 
                <th>{{ $o->payment_status }}</th> 
                <th>{{ $o->status }}</th> 
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>