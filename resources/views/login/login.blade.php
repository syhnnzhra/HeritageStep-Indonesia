<!DOCTYPE html>
<html>
<head>
	<title>HeritageStep | Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/016d287a45.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit-icons.min.js"></script>
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/online-shopping.png">
		</div>
		<div class="login-content">
			<form action="/login" method="post">
			@csrf
				<img src="img/logo.png">
				<h2 class="title">Welcome</h2>
				
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

           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="email" class="input @error('email') is-invalid @enderror" name="email" required>
						@error('email')
							<span class="uk-form-danger" role="alert">
								<strong>{{ $message }}</strong>
							</span>
                    	@enderror
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password" required>
            	   </div>
            	</div>
                <a href="/register">Make new account?</a>
                <input type="submit" class="btn" value="Login">

                <p>Or Login with:</p>
                <div class="img-google">
                    <a href="/auth/google" class="uk-button uk-button-default" style="text-align:center;"> <img src="img/google.png" style="height: 20px !important;" alt=""> Google</a>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/login.js"></script>
</body>
</html>