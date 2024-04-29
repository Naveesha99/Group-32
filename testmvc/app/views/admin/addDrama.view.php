<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?= ROOT ?>/assets/css/addDramas.css" rel="stylesheet">

	<title>signup</title>
</head>

<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body>
	<div class="container">
		<div class="content">
			<form  method="POST" class="add-Drama" enctype="multipart/form-data" >
				<h1>ADD DRAMA</h1>
				<label for="title">Drama Name</label>
				<input type="text" name="title" placeholder="title">
				
			<?php if(isset($data['no_title'])){?>  <span class="error"><?= '* ' .$data['no_title'] ?></span> <?php } ?>
			<?php if(isset($data['exist_title'])){?>  <span class="error"><?= '* ' .$data['exist_title'] ?></span> <?php } ?>

                
				<label for="description">Description</label>
				<?php if(isset($data['no_description'])){?>  <span class="error"><?= '* ' .$data['no_description'] ?></span> <?php } ?>
				<?php if(isset($data['des_length'])){?>  <span class="error"><?= '* ' .$data['des_length'] ?></span> <?php } ?>
				<input type="text" name="description">

				<label for="image">Image</label>
				<?php if(isset($data['no_image'])){?>  <span class="error"><?= '* ' .$data['no_image'] ?></span> <?php } ?>
						<?php if(isset($data['not_all'])){?>  <span class="error"><?= '* ' .$data['not_all'] ?></span> <?php } ?>
				<input type="file"  id="image" name="image" accept="image/*">
				
				<?php if(!empty($errors)):?>
							<h5>
								<?= implode("<br>",$errors)?>
							</h5>
				<?php endif;?>

				<button class="btn-1">Add Drama</button>
				<?php if(isset($data['ok'])){?>  <span class="error"><?= '* ' .$data['ok'] ?></span> <?php } ?>
			</form>
		</div>
	</div>
</body>

</html>