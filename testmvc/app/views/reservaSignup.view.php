<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?= ROOT ?>/assets/css/signup.css" rel="stylesheet">
	<title>login</title>
</head>

<body>
	<section class="login">
		<div class="login_box">

			<div class="left">
				<div class="contact">
					<form method="POST">
						
						<input type="hidden" value="reservationist" name="empRoll" id="empRoll">
						<?php if (!empty($errors['fullname'])) : ?>
							<span class="error">
								<?= '* ' . $errors['fullname'] ?>
							</span>
						<?php endif; ?>
						<input type="text" placeholder="FULLNAME" name="fullname" id="fullname" class="fullname">
						<?php if (!empty($errors['username'])) : ?>
							<span class="error">
								<?= '* ' . $errors['username'] ?>
							</span>
						<?php endif; ?>
						<input type="text" placeholder="USERNAME" name="username" id="username" class="username">
						<?php if (!empty($errors['email'])) : ?>
							<span class="error">
								<?= '* ' . $errors['email'] ?>
							</span>
						<?php endif; ?>
						<?php if (!empty($errors['exist'])) : ?>
							<span class="error">
								<?= '* ' . $errors['exist'] ?>
							</span>
						<?php endif; ?>
						<input type="text" placeholder="EMAIL" name="email" id="email" class="email">
						<?php if (!empty($errors['contactNumber'])) : ?>
							<span class="error">
								<?= '* ' . $errors['contactNumber'] ?>
							</span>
						<?php endif; ?>
						<input type="tel" placeholder="CONTACTNUMBER" name="contactNumber" id="contactNumber" class="contactNumber">
						<?php if (!empty($errors['nic'])) : ?>
							<span class="error">
								<?= '* ' . $errors['nic'] ?>
							</span>
						<?php endif; ?>
						<input type="text" placeholder="NIC" name="nic" id="nic" class="nic">

						<!-- <input type="password" placeholder="PASSWORD" /> -->
						<?php if (!empty($errors['password'])) : ?>
							<span class="error">
								<?= '* ' . $errors['password'] ?>
							</span>
						<?php endif; ?>
						<input type="password" placeholder="PASSWORD" name="password" id="password">
						<?php if (!empty($errors['confirmPassword'])) : ?>
							<span class="error">
								<?= '* ' . $errors['confirmPassword'] ?>
							</span>
						<?php endif; ?>
						<input type="password" placeholder="CONFIRMPASSWORD" name="confirmPassword" id="confirmPassword">
						<div id="error-message" style="color: white;"></div>


						<button type="submit" class="submit">Register</button>

						<h3 class="heading">
							<br><a href="<?= ROOT ?>/login">Already have an account?</a>
						</h3>
					</form>
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