<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/adminRequest.css">

    <title>Admin Request</title>
</head>

<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php'?>

<body>
    <div class="container">
        <div class="content">
            <div class="cards">
                <div class="box">
                    <a href="<?= ROOT ?>/request">
                        <div class="card">
                            <h1>All Requests</h1>
                        </div>
                    </a>

                    <div class="details">
                        <p>Pending : <?= $data['pending']?> </p>
                        <p>Accepted : <?= $data['accepted']?> </p>
                        <p>Rejected : <?= $data['rejected']?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>