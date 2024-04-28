<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/Halls.css">
    <title>Employee Dashboard</title>
</head>

<?php require_once 'adminSideBar.php' ?>
<?php include 'navBar.php' ?>

<body>
    <div class="container">
        <div class="cardBox">

            <a href="<?= ROOT ?>/adminHalls">
                <div class="card">
                    <div class="numbers">Halls</div>
                </div>
            </a>

            <a href="<?= ROOT ?>/adminFacilities">
                <div class="card">
                    <div class="numbers">Facilities</div>
                </div>
            </a>

            <a href="<?= ROOT ?>/resRequest">
                <div class="card">
                    <div class="numbers">Reser. Requests</div>
                </div>
            </a>


        </div>

        <div class="content-2">
            <div class="table-responsive">
            </div>

        </div>

        <div class="content-3">

            <div class="title">
                <h2>Tasks to Complete</h2>

            </div>
            <div class="table-responsive">
            </div>

        </div>
    </div>
    </div>

</body>

</html>