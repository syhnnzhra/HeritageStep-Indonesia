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
</head>
<body class="flex h-screen bg-gray-100">
  <div class="bg-green-800 text-white w-64 p-4 custom-warna ">
    <h2 class="text-2xl font-bold mb-4">HERITAGE_STEP</h2>
    <ul>
      <li class="mb-2">
        <a href="#" class="hover:text-gray-300" style="color:black; background-color:#EAECCC;" >dashboard</a>
      </li>
      <li class="mb-2">
        <a href="#" class="hover:text-gray-300" style="color:black; background-color:#EAECCC;">Mengelola Pesanan</a>
      </li>
      <li class="mb-2">
        <a href="#" class="hover:text-gray-300" style="color:black; background-color:#EAECCC;">Mengelola Produk</a>
      </li>
      <li class="mb-2">
        <a href="#" class="hover:text-gray-300" style="color:black; background-color:#EAECCC;" >Memproses Pembayaran</a>
      </li>
      <li class="mb-2">
        <a href="#" class="hover:text-gray-300" style="color:black; background-color:#EAECCC;" >Daftar Pengguna</a>
      </li>
      <li class="mb-2">
        <a href="#" class="hover:text-gray-300" style="color:black; background-color:#EAECCC;"  >Laporan</a>
      </li>
    </ul>
  </div>
<style>
.uk-card {
  background:#EAECCC;
}
.custom-warna {
  background-color:#CD8D7A;
}
.flex {
  background-color:#EAECCC;
}
.uk-search{
  background-color:#CD8D7A;
  font-color:#00000;
  align-items: center;
  justify-content: center;
  display: flex;
}
.uk-table-shrink{
  background-color:#CD8D7A;
  font-color:#00000;
}
.uk-width-small{
  background-color:#CD8D7A;
}
.uk-table-expand{
  background-color:#CD8D7A;
  font-family:#00000;
}
.uk-icon-link {
  background-color:#CD8D7A;
  font-color:#00000;
  margin-right: 14px;
}




</style>

  <div class="container" >
    @yield('container')
  </div>
</body>
</html>
