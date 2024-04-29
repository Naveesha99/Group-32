 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/addEmployee.css">
    <title>Edit Employee</title>
</head>

<?php
// show($data['employee']);

include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body>
    <div class="container">
        <form method="POST" class="add-employee">
            <h1>Edit Registration Form</h1>
            <label for="empName">Employee Name</label>
            <?php if (!empty($errors['empName'])) : ?>
                <span class="error">
                    <?= '* ' . $errors['empName'] ?>
                </span>
            <?php endif; ?>
            <input type="text" name="empName" value="<?= $data['employee'][0]->empName?>">
            <label for="empEmail">E-mail</label>
            <?php if (!empty($errors['empEmail'])) : ?>
                <span class="error">
                    <?= '* ' . $errors['empEmail'] ?>
                </span>
            <?php endif; ?>
            <input type="email" name="empEmail" value="<?= $data['employee'][0]->empEmail?>">
            <label for="empNIC">NIC</label>
            <?php if (!empty($errors['empNIC'])) : ?>
                <span class="error">
                    <?= '* ' . $errors['empNIC'] ?>
                </span>
            <?php endif; ?>
            <input type="text" name="empNIC" value="<?= $data['employee'][0]->empNIC?>" readonly>
            <label for="empDOB" >Date of Birth</label>
            <?php if (!empty($errors['empDOB'])) : ?>
                <span class="error">
                    <?= '* ' . $errors['empDOB'] ?>
                </span>
            <?php endif; ?>
            <input type="date" name="empDOB" value="<?= $data['employee'][0]->empDOB?>" readonly>
            <label for="empAddress">Address</label>
            <?php if (!empty($errors['empAddress'])) : ?>
                <span class="error">
                    <?= '* ' . $errors['empAddress'] ?>
                </span>
            <?php endif; ?>
            <input type="text" name="empAddress" value="<?= $data['employee'][0]->empAddress?>">
            <label for="empContact">Contact</label>
            <?php if (!empty($errors['empContact'])) : ?>
                <span class="error">
                    <?= '* ' . $errors['empContact'] ?>
                </span>
            <?php endif; ?>
            <input type="text" name="empContact"value="<?= $data['employee'][0]->empContact?>">
            <label for="empRoll">Employee Roll</label>
            <?php if (!empty($errors['empRoll'])) : ?>
                <span class="error">
                    <?= '* ' . $errors['empRoll'] ?>
                </span>
            <?php endif; ?>
            <select class="select" name="empRoll" value="<?= $data['employee'][0]->empRoll?>">
                <?php
                //show($data['employee']);
                foreach ($data['role'] as $row) {
                    // show($row);
                    echo "<option value='" . $row->jobTitle . "'>" . $row->jobTitle . "</option>";
                }
                ?>
            </select>

            <br>
            <button class="btn-1">Submit</button>
        </form>
    </div>
</body>