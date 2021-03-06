<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Including the Styles -->
	<link rel="stylesheet" href="<?= base_url()?>css/login_a.css">
	<link rel="stylesheet" href="<?= base_url()?>css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url()?>css/all.css">



    <title>Login</title>
</head>
<body>

<body>
	<div id="overlay"></div>
	<div class="container">
		<div class="row">
		<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
			<div class="card card-signin my-5 shadow">
			<div class="card-body">
				<h5 class="card-title text-center">Welcome Back!</h5>
				<!-- <?php echo form_open('authenticate'); ?> -->
				<form action="<?= site_url('login/authenticate')?>" method="post" class="form-signin">
					<div class="form-label-group">
						<input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus value="<?= $user['email']?>">
						<label for="inputEmail">Email address</label>
						<P>This is the email field</P>
					</div>

					<div class="form-label-group">
						<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" value="<?= $user['password']?>" required>
						<label for="inputPassword">Password</label>
						<p>This is the password field</p>
					</div>

					<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Log in</button>
					<hr class="my-4">
					</form>
					<div class="text" >
						<a href="<?= site_url('login/register')?>" class="regLink">Don`t have an Account?</a> 
						
					</div>
					<!-- <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button> -->
				

				
				
			</div>
			</div>
		</div>
		</div>
	</div>
</body>

<!-- My Custom JavaScripts File -->
<script src="<?= base_url()?>js/myscripts.js"></script>
<script src="<?= base_url()?>js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url()?>js/jquery.slim.js"></script>



    
</body>
</html>
