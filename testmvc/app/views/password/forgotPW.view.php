<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?= ROOT ?>/assets/css/login.css" rel="stylesheet">
	<title>Forgot Password</title>
</head>

<body>
	<section class="login">
		<div class="login_box">

			<div class="left">
				<!-- <div class="top_link"><a href="#"><img src="/public/styles/images/login.jpg" alt="">Return home</a></div> -->
				<div class="contact">
					<form method="POST">
						<h3 class="log">FORGOT PASSWORD</h3>
						<input type="text" name="email" placeholder="E-Mail">
						<?php if (!empty($errors)) : ?>
							<span class="error-msg">
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
				<!-- <div class="right-inductor"><img src="/public/styles/images/login.jpg" ></div> -->
			</div>
		</div>
	</section>
</body>

</html>


</html>