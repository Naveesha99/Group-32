<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Password</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/empEditPassword.css">
</head>
<?php require_once 'cwNaviBar.php' ?>
<?php include 'navBar.php' ?>

<body>
    <div class="container">
        <div class="wrapper">
            <h2>Change Password</h2>
            <form method="post">
                <label for="current_password">Current Password:</label>
                <?php if (!empty($errors['password'])) : ?>
                <span class="error">
                    <?= '* ' . $errors['password'] ?>
                </span>
            <?php endif; ?>
                <input type="password" id="current_password" name="current_password" >

                <label for="new_password">New Password:</label>
                <input type="password" id="new_password" name="new_password" >

                <label for="confirm_password">Confirm New Password:</label>
                <input type="password" id="confirm_password" name="confirm_password">

                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>


</body>

</html>