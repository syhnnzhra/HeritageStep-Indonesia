<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HeritageStep | Admin</title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit-icons.min.js"></script>

    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="assets/vendors/boxicons/css/boxicons.min.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-HLRDVwsGL0tVepFM5RueEk7PpkYY2F9jE2VZj5fNjOgspW6VpOo/4UZfHj4kKr+6LlzQZ5ek+Cp9VlY7+zDzUSg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .center-text {
            text-align: center;
        }
        .nav-item {
            list-style: none;
        }

        .profile-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .profile-image {
            width: 40px; /* Sesuaikan ukuran foto sesuai kebutuhan */
            height: 40px; /* Sesuaikan ukuran foto sesuai kebutuhan */
            border-radius: 50%; /* Untuk foto bulat, sesuaikan dengan setengah lebar atau tinggi */
            margin-bottom: 5px; /* Jarak antara foto dan nama admin */
        }

        .nav-name {
            text-align: center;
            font-size: 14px; /* Sesuaikan ukuran teks nama sesuai kebutuhan */
        }
    </style>
</head>
<body style="background-color: #D9D9D9;">
    @include('admin.layouts.sidebar')
    
    <div class="content-wrapper">
        <!-- <div class="text">Home Content</div> -->
        <div class="uk-section">
            @yield('container')
        </div>
    </div>
    
    <script src="assets/scripts/script.js"></script>
</body>
</html>