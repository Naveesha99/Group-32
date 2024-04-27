<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?= ROOT ?>/assets/css/addDrama.css" rel="stylesheet">

	<title>signup</title>
</head>

<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body>
	<div class="container">
		<div class="content">
			<form method="POST" class="add-Drama">
				<h1>ADD DRAMA</h1>
				<label for="title">Drama Name</label>
				<input type="text" name="title">
                <?php if (!empty($errors['title'])) : ?>
							<span style="color: red; font-weight: bold; margin-bottom: 5px;">
								<?= show($errors['title']) ?>
							</span>
						<?php endif; ?>
				<label for="description">Description</label>
				<input type="text" name="description">
				<?php if (!empty($errors['description'])) : ?>
							<span style="color: red; font-weight: bold; margin-bottom: 5px;">
								<?= show($errors['description']) ?>
							</span>
						<?php endif; ?>
				<label for="image">Image</label>
				<input type="file" name="image">
				<?php if (!empty($errors['image'])) : ?>
							<span style="color: red; font-weight: bold; margin-bottom: 5px;">
								<?= show($errors['image']) ?>
							</span>
						<?php endif; ?>

				<button class="btn-1">Add Drama</button>
			</form>
		</div>
	</div>
</body>

</html>