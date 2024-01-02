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

  .dashed-line {
            border-top: 1px dashed #000; /* Garis putus-putus dengan ketebalan 1px dan warna hitam */
            width: 100%;
            margin-top: 20px; /* Spasi atas untuk memisahkan dari konten lain */
        }

  .card a {
            color: #000; /* Ganti dengan warna teks yang diinginkan */
            text-decoration: none;
  }
  </style>
</head>

<body class="flex h-screen bg-gray-100 sidebar">
@include('sweetalert::alert')

  <div class="bg-green-800 text-white w-64 p-4 custom-warna cardd " style="text-align: center;">
    <h2 class="text-2xl font-bold mb-4">HERITAGE_STEP</h2>
    <ul class="card">
      <li class="uk-card uk-card-hover uk-card-body mb-2 mx-5" style="background:#C3E2C2; text-align: center;">
        <a href="/dashboard"  class="text-1xl font-bold mt-2">dashboard</a>
      </li>
      <li class="uk-card uk-card-hover uk-card-body mb-2 mx-5 my-2" style="background:#C3E2C2; text-align: center;">
        <a href="/order"  class="text-0xl font-bold mb-2">Mengelola Pesanan</a>
      </li>
      <li class="uk-card uk-card-hover uk-card-body mb-2 mx-5" style="background:#C3E2C2; text-align: center;">
        <a href="/produk"  class="text-1xl font-bold mb-2">Mengelola Produk</a>
      </li>
      <li class="uk-card uk-card-hover uk-card-body mb-2 mx-5" style="background:#C3E2C2; text-align: center;">
        <a href="/customer" class="font-bold mb-2">Daftar Pengguna</a>
      </li>
      <li class="uk-card uk-card-hover uk-card-body mb-2 mx-5" style="background:#C3E2C2; text-align: center;">
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
