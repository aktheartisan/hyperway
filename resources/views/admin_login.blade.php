<!doctype html>
<html lang="en">
<head>
	<title>Hyperway</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{url('public/login/css/style.css')}}">

</head>
<body class="img js-fullheight" style="background-image: url('public/login/images/bg.jpg');">
	
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<h3 class="mb-4 text-center">ADMIN</h3>
						<form action="{{route('login')}}" method="post" class="signin-form" >
							@csrf
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Username" name="email" required>
								<x-input-error :messages="$errors->get('email')" class="mt-2" />
							</div>
							<div class="form-group">
								<input id="password-field" type="password" class="form-control" placeholder="password" name="password" required>
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
								<x-input-error :messages="$errors->get('password')" class="mt-2" />
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
							</div>
							<center> <button class="btn btn-primary"><a href="{{('/')}}" style="text-decoration: none;color:black;">Home</a></button></center>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{url('public/login/js/jquery.min.js')}}"></script>
	<script src="{{url('public/login/js/popper.js')}}"></script>
	<script src="{{url('public/login/js/bootstrap.min.js')}}"></script>
	<script src="{{url('public/login/js/main.js')}}"></script>

</body>
</html>

