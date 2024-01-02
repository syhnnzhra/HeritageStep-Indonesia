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
    background-color:#ffffff;
    display: block;
    color: black;
    padding: 16px;
    text-decoration: none;

  }
  .sidebar{
    background:#ffffff;
  }
  .flex {
    background-color:#C3E2C2;
  }
  .uk-search{
    background-color:#ffffff;
    font-color:#00000;
    align-items: center;
    justify-content: center;
    display: flex;
  }
  .uk-table-shrink{
    background-color:#ffffff; //biru
    font-color:#00000;
  }
  .uk-width-small{
    background-color:#ffffff;
  }
  .uk-table-expand{
    background-color:#ffffff;
  }
  .uk-icon-link {
    background-color:#C3E2C2;
    font-color:#00000;
    margin-right: 14px;
  }
  uk-text-nowrap{
    background-color:#C3E2C2;
  } 

  .uk-card-hover {
    background-color:#ffffff;
  }

  
  </style>
</head>

<body class="flex h-screen bg-gray-100 sidebar">
@include('sweetalert::alert')

  <div class="bg-green-800 text-white w-64 p-4 custom-warna ">
    <h2 class="text-2xl font-bold mb-4">HERITAGE_STEP</h2>
    <ul>
      <li class="mb-2 a" >
      <i class="https://www.flaticon.com/free-icon/dashboard_1828791?term=dashboard&page=1&position=3&origin=search&related_id=1828791"></i>
        <a href="/dashboard"  class="text-1xl font-bold mt-2"  >dashboard</a>
      </li>
      <li class="mb-2 b">
        <a href="/order"  class="text-1xl font-bold mb-2 ">Mengelola Pesanan</a>
      </li>
      <li class="mb-2 c">
        <a href="/produk"  class="text-1xl font-bold mb-2 ">Mengelola Produk</a>
      </li>
      <li class="mb-2 d">
        <a href="/customer" class="text-1xl font-bold mb-2">Daftar Pengguna</a>
      </li>
      <li class="mb-2 e">
        <form action="/logout" method="post"  class="text-1xl font-bold mb-4">
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
