<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>HeritageStep Indonesia | Login</title>
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <form action="/login" method="post">
                @csrf
                <h2>Login</h2>
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" class="@error('email') is-invalid @enderror" id="email" name="email" required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="d-grid justify-content-center">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
            <p class="text-center mt-2">Or login with:</p>
            <div class="social-login d-flex justify-content-center">
                <a href="/auth/google" class="btn btn-light"> <img src="img/google.png" height="21px" alt=""> Google</a>
            </div>
            <div class="social-login mt-2 d-flex justify-content-center">
                <a href="your_facebook_oauth_url" class="btn btn-light"><img src="img/facebook.png" height="21px" alt=""> Facebook</a>
            </div>
            <div class="register-link">
                <p>Don't have an account? <a href="/register">Register</a></p>
            </div>
        </div>

    </div>

</body>
</html>
