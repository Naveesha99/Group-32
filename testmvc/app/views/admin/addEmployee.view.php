<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/addEmployee.css">
    <title>Admin Employee</title>
</head>

<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body>
    <div class="container">
        <form method="POST" class="add-employee">
            <h1>Employee Registration Form</h1>
            <label for="empName">Employee Name</label>
            <?php if (!empty($errors['empName'])) : ?>
                <span class="error">
                    <?= '* ' . $errors['empName'] ?>
                </span>
            <?php endif; ?>
            <input type="text" name="empName">
            
            <label for="empEmail">E-mail</label>
            <?php if (!empty($errors['empEmail'])) : ?>
                <span class="error">
                    <?= '* ' . $errors['empEmail'] ?> </br>
                </span>
            <?php endif; ?>
            <input type="email" name="empEmail">
            
            <label for="empNIC">NIC</label>
            <?php if (!empty($errors['empNIC'])) : ?>
                <span class="error">
                    <?= '* ' . $errors['empNIC'] ?> </br>
                </span>
            <?php endif; ?>
            <input type="text" name="empNIC">
            
            <label for="empDOB">Date of Birth</label>
            <?php if (!empty($errors['empDOB'])) : ?>
                <span class="error">
                    <?= '* ' . $errors['empDOB'] ?> </br>
                </span>
            <?php endif; ?>
            <input type="date" name="empDOB">
            
            <label for="empAddress">Address</label>
            <?php if (!empty($errors['empAddress'])) : ?>
                <span class="error">
                    <?= '* ' . $errors['empAddress'] ?> </br>
                </span>
            <?php endif; ?>
            <input type="text" name="empAddress">
          
            <label for="empContact">Contact</label>
            <?php if (!empty($errors['empContact'])) : ?>
                <span class="error">
                    <?= '* ' . $errors['empContact'] ?> </br>
                </span>
            <?php endif; ?>
            <input type="text" name="empContact">
            
            
            <label for="empRoll">Employee Roll</label>
            <select class="select" name="empRoll">
                <?php
                foreach ($data['role'] as $row) {
                    echo "<option value='" . $row->jobTitle . "'>" . $row->jobTitle . "</option>";
                }
                ?>
            </select>

            <br>
            <button class="btn-1">Submit</button>
        </form>
    </div>
</body>