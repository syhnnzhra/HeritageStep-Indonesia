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
  <div class="bg-green-800 text-white w-64 p-4 custom-warna">
    <h2 class="text-2xl font-bold mb-4">HERITAGE_STEP</h2>
    <ul>
      <li class="mb-2">
        <a href="#" class="hover:text-gray-300">dashboard</a>
      </li>
      <li class="mb-2">
        <a href="#" class="hover:text-gray-300">Mengelola Pesanan</a>
      </li>
      <li class="mb-2">
        <a href="#" class="hover:text-gray-300">Mengelola Produk</a>
      </li>
      <li class="mb-2">
        <a href="#" class="hover:text-gray-300">Memproses Pembayaran</a>
      </li>
      <li class="mb-2">
        <a href="#" class="hover:text-gray-300">Daftar Pengguna</a>
      </li>
      <li class="mb-2">
        <a href="#" class="hover:text-gray-300">Laporan</a>
      </li>
    </ul>
  </div>

  <div class="container" >
    @yield('container')
  </div>
</body>
</html>
