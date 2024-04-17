<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/addHall.css">
    <title>Add New Hall</title>
</head>
 

<body>
    <div class="container">
        <div class="content">
            <form method="POST" class="add-Hall">
                <label for="hallName">Hall Name</label>
                <input type="text" name="hallName" id="hallName" required>
                <label for="description">Description</label>
                <textarea name="description" id="description" required></textarea>
                <label for="images">Images</label>
                <?php for ($i = 1; $i <= 3; $i++) { ?>
                    <input type="file" name="images[]" id="images" required>
                <?php } ?>
            </form>
        </div>
    </div>
</body>

</html>