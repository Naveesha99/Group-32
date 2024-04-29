<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/adminTask.css">
    <title>Admin Task</title>
</head>

<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body>
    <div class="container">
        <div class="cardBox">

            <a href="<?= ROOT ?>/createtask">
                <div class="card">
                    <div class="numbers">Create Task</div>
                </div>
            </a>
            <a href="<?= ROOT ?>/assignTask">
                <div class="card">
                <div class="numbers">Assign Task</div>
                </div>
            </a>
        </div>
    </div>

</body>

</html>