<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?= ROOT ?>/assets/css/login.css" rel="stylesheet">
	<title>Forgot Password</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
	<section class="login">
		<div class="login_box">

			<div class="left">
				<!-- <div class="top_link"><a href="#"><img src="/public/styles/images/login.jpg" alt="">Return home</a></div> -->
				<div class="contact">
					<form method="POST">
						<h3 class="log">RESET PASSWORD</h3>
						<input type="password" name="password" placeholder="Password">
                        <input type="password" name="confirm_password" placeholder="Confirm Password">
						<?php if (!empty($errors)) : ?>
							<span style="color: red; font-weight: bold; border: 1px solid #ccc; padding: 10px; margin-bottom: 10px; background-color: #ffe6e6;">
								<?= implode('<br>', $errors) ?>
							</span>
						<?php endif; ?>

						<button class="submit">Continue</button>
					</form><br>
				</div>
			</div>
			<div class="right">
				<div class="right-text">
				</div>
				<div class="right-inductor"><img src="/public/styles/images/login.jpg"></div>
			</div>
			<div id="otp-popup" style="display: none;">
				<h3>Enter OTP</h3>
				<form id="otp-form">
					<input type="text" id="otp-input" placeholder="Enter OTP">
					<button type="submit">Submit</button>
				</form>
			</div>
		</div>
	</section>
</body>

</html>


</html>