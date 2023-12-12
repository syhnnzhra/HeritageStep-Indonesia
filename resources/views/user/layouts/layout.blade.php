<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HeritageStep</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />
    <style>
        .kontainer{
            margin-top: 50px;
        }
        .uk-mb{
            margin-bottom: 50px;
        }
        .uk-mt{
            margin-top: 50px;
        }
        .uk-navbar-container.nav {
            background-color: #ffffff;
        }
        .custom-green-button {
            background-color: #0AEE13;
            margin-top: 20px;
        }
        .custom-mgray-button {
            background-color: #C7FFC9;
            margin-top: 20px;
        }
        
        .promo-banner {
            width: 100%;
            height: 300px;
            background-color: #09ee13;
            background: url('img/aerostreet.png') center/cover;
            position: relative;
            overflow: hidden;
        }

        .promo-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
        }

        .promo-content h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .w-hijau{
            background-color: #0AEE13;
        }        

        .uk-ml{
            margin: 20px;
        }

        .form{
            width: 600px;
        }
        .uk-margin{
            align-items: center;
            justify-content: center;
            display: flex;
        }
        .custom-footer {
            background-color: #C7FFC9;
        }
  </style>
</head>
<body>
    <nav class="uk-navbar-container nav">
        <div class="uk-container">
            <div uk-navbar>

                <div class="uk-navbar-left">
                    <img src="css/assets/image-1.png" alt="" width="100px"> HeritageStep Indonesia
                </div>

                <div class="uk-navbar-center">
                    <ul class="uk-navbar-nav">
                        <li class="uk-active"><a href="/">Home</a></li>
                        <li><a href="#">Category</a></li>
                        <li><a href="#">Product</a></li>
                        <li><a href="#"><img src="flaticon/bag.png" alt="" width="20px"></a></li>
                    </ul>
                </div>
                
                <div class="uk-navbar-right">
                    <ul class="">
                        @auth
                            <a href="#" class="uk-button uk-button-dafault">usr</a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <!-- <li class="uk-active"><a href="#">Active</a></li>
                                    <li><a href="#">Item</a></li> -->
                                    <li><form action="/logout" method="post">
                                        @csrf
                                        <button type="submit">Logout</button>
                                    </form></li>
                                </ul>
                            </div>
                        @else
                            <a href="/login" class="uk-button custom-mgray-button">Sign In</a>
                            <a href="/register" class="uk-button custom-green-button">Sign Up</a>
                        @endif
                    </ul>
                </div>

            </div>
        </div>
    </nav>

    <!-- slider -->
    <div class="promo-banner">
        <div class="promo-content">
            <h1>Diskon 30%!</h1>
            <h3>Produk baru aerostreet cyberhoops</h3>
        </div>
    </div>

    <div class="kontainer">
        @yield('container')
    </div>

    <!-- footer -->
    <div class="uk-section custom-footer uk-dark">
        <div class="uk-container">
            <footer class="uk-padding">
                <div class="uk-grid-match uk-child-width-expand@s" uk-grid>
                    <div>
                        <h3>About Us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dapibus dapibus mollis.</p>
                    </div>
                    <div>
                        <h3>Contact</h3>
                        <address>
                            <p>Email: info@example.com</p>
                            <p>Phone: +123 456 789</p>
                        </address>
                    </div>
                    <div>
                        <h3>Follow Us</h3>
                        <ul class="uk-list">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Instagram</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit-icons.min.js"></script>
</body>
</html>
