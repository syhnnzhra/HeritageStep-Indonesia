<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <title>Sign in</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A300%2C400%2C500"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A300%2C400%2C500"/>
    <link rel="stylesheet" href="css/signup.css"/>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit-icons.min.js"></script>
</head>
<body>
<div class="sign-in-fuf">
  <div class="auto-group-tvc5-zS9">
    <img class="image-1-WQV" src="css/assets/image-1-t7f.png"/>
    <p class="daftar-sekarang-2td">Masuk Sekarang</p>
  </div>
  <div class="auto-group-csqk-wVo">
    <div class="auto-group-wyqf-Gny">
      <img class="image-15-ppV" src="css/assets/image-15.png"/>
      <img class="image-16-yBb" src="css/assets/image-16.png"/>
    </div>
    <div class="auto-group-elfo-u5F">
      <div class="primary-button-container-d1F">
        <a href="/auth/google">Google</a>
      </div>
      <div class="primary-button-container-d1F">
        <a href="#">Facebook</a>
      </div>
    </div>
    </div>
    <div class="group-6-ZJD">
        <div class="line-4-fs3">
        </div>
        <p class="atau-daftar-dengan-1AD">Atau masuk dengan</p>
        <div class="line-5-9GR">
        </div>
    </div>

    <form action="/login" method="post">
        @csrf
        @if(session()->has('success'))
            <div class="uk-alert-success" uk-alert>
                <a href class="uk-alert-close" uk-close></a>
                <p>{{ session('success') }}</p>
            </div>
        @endif
        @if(session()->has('loginError'))
            <div class="uk-alert-danger" uk-alert>
                <a href class="uk-alert-close" uk-close></a>
                <p>{{ session('loginError') }}</p>
            </div>
        @endif
        @if(session()->has('error'))
            <div class="uk-alert-danger" uk-alert>
                <a href class="uk-alert-close" uk-close></a>
                <p>{{ session('error') }}</p>
            </div>
        @endif

        <div class="group-5-HNd">
            <p class="phone-number-or-email-cfo">Email</p>
                <input type="text" name="email" class="rectangle-47-M7b @error('email') is-invalid @enderror" required>
                @error('email')
                    <span class="uk-form-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="group-5-HNd">
                <p class="phone-number-or-email-cfo">Password</p>
                <input type="password" name="password" class="rectangle-47-M7b" required>
                <p class="example-heritagegmailcom-Ui1">Belum punya akun? <a href="/register">Sign Up</a></p>
            </div>
            <button type="submit" class="primary-button-container-Qbf"> Sign In</button>
    </form>
</div>
</body>