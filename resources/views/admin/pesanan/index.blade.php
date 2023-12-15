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

<div class="uk-card uk-card-default uk-card-body uk-width-1-1@m my-10 mx-5 mr-5">
<table class="uk-table uk-table-justify uk-table-divider">
    <thead>
        <tr>
            <th class="uk-width-small">tanggal</th>
            <th>Table Heading</th>
            <th>Table Heading</th>
            <th>Table Heading</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Table Data</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
            <td><button class="uk-button uk-button-default" type="button">Button</button></td>
        </tr>
        <tr>
            <td>Table Data</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
            <td><button class="uk-button uk-button-default" type="button">Button</button></td>
        </tr>
    </tbody>
</table>
  </div>


@endsection
