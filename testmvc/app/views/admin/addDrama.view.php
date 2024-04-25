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
				<label for="description">Description</label>
				<input type="text" name="description">
				<label for="image">Image</label>
				<input type="file" name="image">

				<button class="btn-1">Add Drama</button>
			</form>
		</div>
	</div>
</body>

</html>