<!DOCTYPE html>
<html lang="en">
<head>
	<title>HeritageStep | Sign Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="auth/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="auth/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="auth/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="auth/vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="auth/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="auth/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="auth/vendor/select2/select2.min.css">	
	<link rel="stylesheet" type="text/css" href="auth/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="auth/css/util.css">
	<link rel="stylesheet" type="text/css" href="auth/css/main.css">

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit-icons.min.js"></script>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="/register" method="post">
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
					<span class="login100-form-title p-b-49">
						Sign In
					</span>

					<input type="hidden" name="provider" value="local">
        			<input type="hidden" name="role" value="user">
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Name is reauired">
						<span class="label-input100">Nama</span>
						<input class="input100 @error('name') is-invalid @enderror" type="text" name="name" placeholder="Type your name" required>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
                        @error('name')
                            <span class="uk-form-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Email is reauired">
						<span class="label-input100">Email</span>
						<input class="input100 @error('email') is-invalid @enderror" type="text" name="email" placeholder="Type your Email" required>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
                        @error('email')
                            <span class="uk-form-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
                        Already have an account? 
						<a href="#">
							Sign In
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Sign Up
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<script src="auth/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="auth/vendor/animsition/js/animsition.min.js"></script>
	<script src="auth/vendor/bootstrap/js/popper.js"></script>
	<script src="auth/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="auth/vendor/select2/select2.min.js"></script>
	<script src="auth/vendor/daterangepicker/moment.min.js"></script>
	<script src="auth/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="auth/vendor/countdowntime/countdowntime.js"></script>
	<script src="auth/js/main.js"></script>

</body>
</html>