<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?=ROOT?>/assets/css/signup.css" rel="stylesheet">

	<title>signup</title>
</head>
<body>
	<section class="signup">
		<div class="signup_box">
			<div class="left">
				<div class="contact">
					<form  method="POST">
						<h3 class="sign">ADD DRAMA</h3>
						<input type="text" name="title" placeholder="title">
						<input type="text" name="description" placeholder="description">
						<input type="text" name="image" placeholder="image">
						<!-- <input type="number" name="price" placeholder="price"> -->

						<!-- <input type="date" name="date" placeholder="date"> -->
						<!-- <input type="time" name="time" placeholder="time"> -->

						<?php if(!empty($errors)):?>
							<h5>
								<?= implode("<br>",$errors)?>
							</h5>
						<?php endif;?>

						<button class="submit">ADD</button>
					</form><br>
				</div>
			</div>

			<div class="right">
				<div class="right-text"></div>
				<a href="<?=ROOT?>/addtimes"><button class="submit">ADD TIME</button></a>
			</div>
		</div>
	</section>
</body>
</html>

