<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8bff7d7f97.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/empEditPassword.css">
    <title>edit password</title>
</head>
<?php require_once 'employeeSideBar.php' ?>
<?php include 'navBar.php' ?>


<body>
    <div class="container">
        <div class="wrapper">
            <h2>Change Password</h2>
            <form method="post">
                <label for="current_password">Current Password:</label>
                <input type="password" id="current_password" name="current_password" required>

                <label for="new_password">New Password:</label>
                <input type="password" id="new_password" name="new_password" required>

                <label for="confirm_password">Confirm New Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>

                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>

</body>

</html>