<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT?>/assets/css/adminTheater.css">
    <title>Admin Theater</title>
</head>
<?php include 'adminSideBar.php'; ?>
<?php include 'navBar.php'; ?>
<body>
    <div class="container">
        <div class="content">
            <div class="cards">
            <a href="<?= ROOT ?>/addHall">
                    <div class="card">
                        <div class="box">
                            <h1>Add Hall</h1>
                        </div>
                    </div>
                </a>
                <a href="<?= ROOT ?>/editHall">
                    <div class="card">
                        <div class="box">
                            <h1>Edit Hall</h1>
                        </div>
                    </div>
                </a>
                <a href="<?= ROOT ?>/viewHall">
                    <div class="card">
                        <div class="box">
                            <h1>View Hall</h1>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>
</html>