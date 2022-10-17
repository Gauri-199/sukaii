<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sukaii-Login</title>
	<link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/index.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
			integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
			crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://apis.google.com/js/api:client.js"></script>

	<style>
		.register_btn button {
			background-color: #949090;
		}
	</style>
</head>

<body>
<?php $this->load->view('layout/header');?>

<div class="container-fluid loginBgImage">
	<div class="row">
		<div class="col-md-5 py-4 mx-auto">
			<div class="py-3 " style="background: #C0ECED; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px;">
				<div class="login_register w-75 mx-auto">
					<h5 class="mb-4 mt-5 text-center rubicFont">LOGIN / REGISTER</h5>
					<input type="hidden" id="redirectTo" value="<?= isset($redirectTo) ? $redirectTo : '' ?>" />

					<form method="post" id="loginForm">
						<div class="user_name mb-3">
							<h6 class="mb-0">EMAIL</h6>
							<input type="text" class="form-control" name="email" id="email">
						</div>
						<div class="password">
							<h6 class="mb-0">PASSWORD</h6>
							<input type="password" class="form-control" name="password" id="password">
							<p class="float-right mb-0" id="forgotPassword"><b><a href="<?=base_url('forgotPasswordView')?>">forget password</a></b>
							</p>
						</div>
						<div class="reminder">

								<!-- <input type="checkbox" > -->
								<input type="checkbox" id="reminde_me" name="reminder" value="">
								<label for="reminde_me" class="mb-0">Remember Password</label><br>

						</div>
						<div class="submit_btn my-4 text-center">
							<button type="submit" class="btn btn-sm signInBtn px-3 text-light"><b>SIGN IN</b></button>
						</div>
					</form>
					<div class="loginUsingapis">
						<h6 class="text-center mb-3">Login using </h6>
						<ul class="align-items-center d-flex justify-content-around list-unstyled">
							<li><img src="<?=base_url()?>assets/images/fbOGlogo.png" alt=""></li>
							<li><img src="<?=base_url()?>assets/images/lineOGLogo.png" alt=""></li>
							<!--<li><a id="customBtn"><img src="<?/*=base_url()*/?>assets/images/GoogleOGlogo.png" alt=""></a></li>-->
						</ul>
					</div>
					<div class="">
						<p class="text-center">Don't have an account? <a href="<?=base_url('register')?>"><b class="registerNow">Register NOW !</b></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('layout/footer');?>
</div>
</body>


</html>
