<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?=ROOT?>/assets/css/ticket_booking/addseats.css" rel="stylesheet">

	<title>signup</title>
</head>
<body>
	<section class="signup">
		<div class="signup_box">
			<div class="left">
				<div class="contact">
					<form  method="POST" action="<?=ROOT?>/addseats"  enctype="multipart/form-data" >
						<h3 class="sign">ADD DRAMA</h3>

						<input type="text" name="title" placeholder="title">
						<?php if(isset($data['no_title'])){?>  <div class="errors"><?= $data['no_title'] ?></div> <?php } ?>


						<!--<input type="text" name="description" placeholder="description">-->
						<label for="description">Description</label>
						<textarea rows="10" id="content" name="description"></textarea>
						<?php if(isset($data['no_description'])){?>  <div class="errors"><?= $data['no_description'] ?></div> <?php } ?>

						<label for="image">Image</label>
                		<input type="file" id="image" name="image" accept="image/*">
						<?php if(isset($data['no_image'])){?>  <div class="errors"><?= $data['no_image'] ?></div> <?php } ?>
						<?php if(isset($data['not_all'])){?>  <div class="errors"><?= $data['not_all'] ?></div> <?php } ?>


						<?php if(!empty($errors)):?>
							<h5>
								<?= implode("<br>",$errors)?>
							</h5>
						<?php endif;?>

						<button class="submit">ADD</button>
						<?php if(isset($data['ok'])){?>  <div class="errors"><?= $data['ok'] ?></div> <?php } ?>

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

