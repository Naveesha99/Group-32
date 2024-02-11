<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/addDrama.css">

    <title>Add Drama</title>
</head>
<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body>
<div class="container">
        <div class="content">
            <form method="POST" class="add-drama">
                <h1>Add New Drama</h1>
                <label for="empName">Drama Name</label>
                <input type="text" name="empName">
                <label for="empEmail">Showing Date</label>
                <input type="email" name="empEmail">
                <label for="empNIC">Showing Time</label>
                <input type="text" name="empNIC">
                <label for="empDOB">Description</label>
                <input type="text" name="empDOB">
                <label for="empAddress">Address</label>
                <input type="text" name="empAddress">
                <label for="empContact">Contact</label>
                <input type="text" name="empContact">
                <!-- <label for="empRoll">Employee Roll</label> -->
                <!-- <select class="select" name="empRoll"> -->
                <?php
                // foreach ($data['role'] as $row) {
                //     echo "<option value='" . $row->jobTitle . "'>" . $row->jobTitle . "</option>";
                // }
                  ?>
                </select>

                <br>
                <button class="btn-1">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>