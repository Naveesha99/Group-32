<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/adminDrama.css">

    <title>admin drama</title>
</head>

<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body>

    <body class="drama">
        <div class="container">
            <div class="content">
                <div class="cards">
                    <a href="<?= ROOT ?>/adddrama">
                        <div class="card">
                            <div class="box">
                                <h1>Add Drama</h1>
                            </div>
                        </div>
                    </a>
                    <a href="<?= ROOT ?>/scheduledrama">
                        <div class="card">
                            <div class="box">
                                <h1>Schedule Drama</h1>
                            </div>
                        </div>
                    </a>

                    <a href="<?= ROOT ?>/delete_drama">
                        <div class="card">
                            <div class="box">
                                <h1>All Dramas</h1>
                            </div>
                        </div>
                    </a>
            </div>
        </div>
    </body>
</body>

</html>