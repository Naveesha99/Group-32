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
				<!-- <div class="top_link"><a href="#"><img src="/public/styles/images/login.jpg" alt="">Return home</a></div> -->
				<div class="contact">
					<form method="POST">
						<h3 class="log">LOG IN</h3>
						<input type="text" name="email" placeholder="E-Mail">
						<?php if (!empty($errors)) : ?>
							<span style="color: red; font-weight: bold; padding: 10px; margin-bottom: 10px;">
								<?= implode('<br>', $errors) ?>
							</span>
						<?php endif; ?>
						<input type="password" name="password" placeholder="PASSWORD">
						<?php if (!empty($errors)) : ?>
							<span style="color: red; font-weight: bold; padding: 10px; margin-bottom: 10px;">
								<?= implode('<br>', $errors) ?>
							</span>
						<?php endif; ?>

						<!-- <div class="remember-me">
                            <input type="checkbox" id="remember-me">
                            <label for="remember-me">Remember Me</label>
                        </div> -->

						<button class="submit">LOGIN</button>
						<h3 class="heading">
							<br><a href="<?= ROOT ?>/forgotPW">Forgot password?</a>
						</h3>
					</form><br>
				</div>
			</div>
			<div class="right">
				<div class="right-text">
				</div>
				<!-- <div class="right-inductor"><img src="/public/styles/images/login.jpg" ></div> -->
			</div>
		</div>
	</section>
</body>

</html>


</html>