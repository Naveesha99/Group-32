<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?= ROOT ?>/assets/css/login.css" rel="stylesheet">
	<title>login</title>
</head>

<body>
	<section class="login">
		<div class="login_box">

			<div class="left">
				<div class="contact">
					<form method="POST">
						<h3 class="log">LOG IN</h3>
						<?php if (!empty($errors['email'])) : ?>
							<span class="error">
								<?= '* ' . $errors['email'] ?>
							</span>
						<?php endif; ?>
						<input type="text" name="email" placeholder="E-Mail">
						<?php if (!empty($errors['password'])) : ?>
							<span class="error">
								<?= '* ' . $errors['password'] ?>
							</span>
						<?php endif; ?>
						<input type="password" name="password" placeholder="PASSWORD">
						<?php if (!empty($errors['active'])) : ?>
							<span class="error">
								<?= '* ' . $errors['active'] ?>
							</span>
						<?php endif; ?>
						<?php if (!empty($errors['empty'])) : ?>
							<span class="error">
								<?= '* ' . $errors['empty'] ?>
							</span>
						<?php endif; ?>
						<!-- <div class="remember-me">
                            <input type="checkbox" id="remember-me">
                            <label for="remember-me">Remember Me</label>
                        </div> -->

						<button class="submit">LOGIN</button>
						<h3 class="heading">
							<br><a href="<?=ROOT?>/reservasignup">Signup</a> as a new Reservationists
							<br><a href="<?= ROOT ?>/forgotPW">Forgot password?</a>
						</h3>
					</form><br>
				</div>
			</div>
			<div class="right">
				<div class="right-text">
					<h2>Welcome to </h2></br> <h1>PUNCHI THEATER</h1>
					<h3>Stay with us for a journey of </br> entertainment!</h3>
				</div>
				

			</div>
		</div>
	</section>
</body>

</html>


</html>