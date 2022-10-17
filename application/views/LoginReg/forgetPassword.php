<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sukaii-Login</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer">

	<link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/bootstrap.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<style>
		.register a {
			color: #ea088b;
		;
		}

		.submit_btn button {
			background-color: #ea088b;
		}

		.register_btn button {
			background-color: #949090;
		}

		#forgetPassword_email:focus {
			box-shadow: none;
			outline: none;
		}

		#forgetPassword_email {
			font-size: 16px;
			font-weight: 500;
		}
	</style>
</head>

<body>
<?php $this->load->view('layout/header'); ?>
<!-- <header id="Header"></header> -->
<div class="container-fluid">
	<div class="lockImage text-center">
		<img src="<?=base_url()?>assets/images/forget_password.png" alt="">
	</div>
	<h4 class="text-center mb-4" style="color: #ec098d;">Ohh! Forget Your Password</h4>
	<p class="mb-3 mx-auto small text-center text-muted" style="width: 90%;">No Worries! Enter your emailand we will send you a reset</p>
	<div id="sendRequestInput" class="align-items-baseline border-left-0 border-right-0 border-top-0 d-flex email mx-auto rounded-0 w-75" style="border-bottom: 2px solid lightblue;">
		<span class="ml-2" style="color: #00b3b7;"><i class="fa-solid fa-envelope"></i></span>
		<input type="email" placeholder="example@gmail.com" class="border-0 form-control" name="forgetPassword_email" id="forgetPassword_email">
	</div>
	<div id="pass_change_input" class="align-items-baseline border-left-0 border-right-0 border-top-0 d-flex email mx-auto rounded-0 w-75" style="display: none !important; border-bottom: 2px solid lightblue;">
		<span class="ml-2" style="color: #00b3b7;"><i class="fa-solid fa-key"></i></span>
		<input type="email" placeholder="******" class="border-0 form-control" name="forgetPassword_email" id="forgetPassword_email">
	</div>
	<div class=" text-center mt-5">
		<button type="button" id="sendRequest" class="btn text-light font-weight-bold btn-sm text-center" style="background-color: #ea088b;">Send Request</button>
		<button type="button" id="pass_change" class="btn text-light font-weight-bold btn-sm text-center" style="display: none; background-color: #ea088b;">Password Changed</button>
	</div>



</div>

</body>
<?php //$this->load->view('layout/footer'); ?>
<script>
	/*$(function() {
		$("#Header").load("header.html");
		$("#footer").load("footer.html");
	});*/
	$("#sendRequest").click(function() {
		$(this).hide();
		$('#sendRequestInput').hide();
		$('#pass_change_input').show();
		$('#pass_change').show();

	});
</script>

<script>
	$("#sendRequest").click(function() {
		// $("#notRegistered").toggle();
		var email = $("#forgetPassword_email").val();
		$.ajax({
			url: "<?php echo site_url('UserController/forgotPassword'); ?>",
			async: true,
			method: 'post',
			data: {
				email: email
			},
			dataType: 'json',
			success: function(data) {
				if (data.status == 200) {
					$('#pass_change_input').show();
					$('#confirm_pass_change_input').show();
				} else if (data.status == 202) {
					$('#pass_change').hide();
					$("#sendRequest").show();
					app.errorToast("Email should not blank");
				} else {
					modal.style.display = "block";
					$('#pass_change').hide();
					$("#sendRequest").show();
				}
			}
		});


		$(this).hide();
		$('#sendRequestInput').hide();
		$('#pass_change').show();
	});
	$("#forgotPassword").click(function() {
		$("#forgotPasswordField").show();
		$(".login_register").hide();
	});
	$("#cancleRequest").click(function() {
		$("#forgotPasswordField").hide();
		$(".login_register").show();
	});

	function changePassword() {
		var email = $("#forgetPassword_email").val();
		var newPassword = $("#reset_password").val();
		var confirmPassword = $("#confirm_reset_password").val();

		if (newPassword == "" || confirmPassword == "") {
			app.errorToast("Password should not be blank.");
		} else if (newPassword.length < 5 || confirmPassword < 5) {
			app.errorToast("Password length should be more than 5.");
		} else {
			if (newPassword === confirmPassword) {
				$.ajax({
					url: "<?php echo site_url('UserController/changePassword'); ?>",
					async: true,
					method: 'post',
					data: {
						newPassword: newPassword,
						email: email
					},
					dataType: 'json',
					success: function(data) {
						if (data.status == 201) {
							alert("error");
						}
						if (data.status == 200) {
							app.successToast(data.body);
							window.location = baseURL + "login";
						}
					}
				});
			} else {
				app.errorToast("Passwords does not match..");
			}
		}
	}
</script>

</html>
