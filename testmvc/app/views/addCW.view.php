<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/addCW.css">
    <title>Admin Employee</title>
</head>

<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>


<body>
    <div class="container">
        <div class="content">
            <form method="POST" class="add-cw">
                <h1>Content writers Registration Form</h1>

                <label for="username">Content writer Name</label>
                <input type="text" name="username">

                <label for="email">E-mail</label>
                <input type="email" name="email">

                <label for="password">Password</label>
                <input type="text" name="password">

                <label for="contactNumber">Contact Number</label>
                <input type="text" name="contactNumber">

                <label for="nIC">NIC</label>
                <input type="text" name="nic">
                <!-- <label for="empAddress">Address</label>
                <input type="text" name="empAddress"> -->


                <br><br>
                <button type="submit" class="btn-1">Submit</button>
            </form>
        </div>
    </div>
</body>