<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit-icons.min.js"></script>
<title>HERITAGE_STEP Dashboard</title>
  <style>
  .custom-warna {
    background-color:#39A7FF;
  }
  .flex {
    background-color:#EEF5FF;
  }
  .uk-search{
    background-color:#39A7FF;
    font-color:#00000;
    align-items: center;
    justify-content: center;
    display: flex;
  }
  .uk-table-shrink{
    background-color:#39A7FF; //biru
    font-color:#00000;
  }
  .uk-width-small{
    background-color:#39A7FF;
  }
  .uk-table-expand{
    background-color:#39A7FF;
  }
  .uk-icon-link {
    background-color:#CD8D7A;
    font-color:#00000;
    margin-right: 14px;
  }
  /* .uk-text-nowrap{
    background-color:#39A7FF;
  } */

  .uk-card-hover {
    background-color:#39A7FF;
  }
  </style>
</head>

<body class="flex h-screen bg-gray-100">
  <div class="bg-green-800 text-white w-64 p-4 custom-warna ">
    <h2 class="text-2xl font-bold mb-4">HERITAGE_STEP</h2>
    <ul>
      <li class="mb-2">
        <a href="/dashboard" style="font-color:white;" >dashboard</a>
      </li>
      <li class="mb-2">
        <a href="/order" style="font-color:white;">Mengelola Pesanan</a>
      </li>
      <li class="mb-2">
        <a href="/produk" style="font-color:white;">Mengelola Produk</a>
      </li>
      <li class="mb-2">
        <a href="/customer" style="font-color:white;" >Daftar Pengguna</a>
      </li>
      <li class="mb-2">
        <form action="/logout" method="post">
            @csrf
            <button type="submit">Logout</button>
        </form>
      </li>
    </ul>
  </div>

  <div class="container" >
    @yield('container')
  </div>
</body>
</html>
