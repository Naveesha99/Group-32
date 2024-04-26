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
            <input type="text" name="empName">
            <?php if (!empty($errors['empName'])) : ?>
                <span style="color: red; font-weight: bold; margin-bottom: 5px;">
                    <?= show($errors['empName']) ?>
                </span>
            <?php endif; ?>
            <label for="empEmail">E-mail</label>
            <input type="email" name="empEmail">
            <?php if (!empty($errors['empEmail'])) : ?>
                <span style="color: red; font-weight: bold; margin-bottom: 5px;">
                    <?= show($errors['empEmail']) ?>
                </span>
            <?php endif; ?>
            <label for="empNIC">NIC</label>
            <input type="text" name="empNIC">
            <?php if (!empty($errors['empNIC'])) : ?>
                <span style="color: red; font-weight: bold; margin-bottom: 5px;">
                    <?= show($errors['empNIC']) ?>
                </span>
            <?php endif; ?>
            <label for="empDOB">Date of Birth</label>
            <input type="date" name="empDOB">
            <?php if (!empty($errors['empDOB'])) : ?>
                <span style="color: red; font-weight: bold; margin-bottom: 5px;">
                    <?= show($errors['empDOB']) ?>
                </span>
            <?php endif; ?>
            <label for="empAddress">Address</label>
            <input type="text" name="empAddress">
            <?php if (!empty($errors['empAddress'])) : ?>
                <span style="color: red; font-weight: bold; margin-bottom: 5px;">
                    <?= show($errors['empAddress']) ?>
                </span>
            <?php endif; ?>
            <label for="empContact">Contact</label>
            <input type="text" name="empContact">
            <?php if (!empty($errors['empContact'])) : ?>
                <span style="color: red; font-weight: bold; margin-bottom: 5px;">
                    <?= show($errors['empContact']) ?>
                </span>
            <?php endif; ?>
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