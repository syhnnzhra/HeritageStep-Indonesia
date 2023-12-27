@extends('admin.layouts.main')
@section('container')
<div class="uk-card uk-card-default uk-card-body uk-width-1-1@m ">
    <h3 class="uk-card-title">Daftar Pengguna</h3>
</div>
<!-- <nav class="uk-navbar-container mx-5 " uk-navbar >
    <div class="uk-navbar-left" >

        <div class="uk-navbar-item ">
            <form class="uk-search uk-search-navbar">
                <span uk-search-icon></span>
                <input class="uk-search-input" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div> --> 
<!-- tabel 1 --> 
<!-- <div class="uk-card uk-card-default uk-width-1-3@m my-10 mx-5 ">
<td><input class="uk-checkbox" type="checkbox" aria-label="Checkbox"></td>
    <div class="uk-card-header">
        <div class="uk-grid-small uk-flex-middle " uk-grid>
            <div class="uk-width-auto">
                <img class="uk-border-circle" width="40" height="40" src="images/avatar.jpg" alt="Avatar">
            </div>
            <div class="uk-width-expand">
                <h3 class="uk-card-title uk-margin-remove-bottom">Thia</h3>
                <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p>
            </div>
        </div>
    </div>
    <table class="uk-table uk-table-hover uk-table-divider my-10 mx-5 ">
    <thead>
        <tr>
            <th>Email</th>
            <th>No HP</th>
        </tr>

        <tbody>
        <tr>
            <td>THIA@gmail.com</td>
            <td>091234567890</td>
        </tr>
</tbody>
    </thead>
    </div>
</div> -->
<!-- tabel 2 -->

<nav class="uk-navbar-container mx-5 " uk-navbar >


        <div class="uk-navbar-item ">
            <form class="uk-search uk-search-navbar">
                <span uk-search-icon></span>
                <input class="uk-search-input" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
</nav>

<div class="uk-overflow-auto mx-5">
    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
        <thead>
            <tr>
               
                <th class="uk-table-shrink"></th>
                <th class="uk-width-small">Nama</th>
                <th class="uk-width-small">Email</th>
                <!-- <th class="uk-width-small">Alamat</th>
                <th class="uk-table-shrink uk-text-nowrap">No Handphone</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach($customer as $c)
            <tr>
                <td><img class="uk-preserve-width uk-border-circle" src="img/user.png" width="40" height="40" alt=""></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href="">{{ $c->name }}</a>
                </td>
                <td class="uk-text-truncate">{{ $c->email }}</td>
                <!-- <td class="uk-text-truncate">Bandung</td>
                <td class="uk-text-nowrap">081234567890</td> -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection