<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/empEditProfile.css">
    <title>User Profile</title>
</head>

<body>
    <div class="container">
        <h1>Edit profile</h1>
        <form method="POST">
            <label for="employee_name">Employee Name:</label>
            <input type="text" id="empName" name="empName" value="<?= $data['employee'][0]->empName ?>">
            <?php if (!empty($errors['empName'])) : ?>
                <span style="color: red; font-weight: bold; margin-bottom: 5px;">
                    <?= show($errors['empName']) ?>
                </span>
            <?php endif; ?>

            <label for="email">Email:</label>
            <input type="email" id="email" name="empEmail" value="<?= $data['employee'][0]->empEmail ?>">
            <?php if (!empty($errors['empEmail'])) : ?>
                <span style="color: red; font-weight: bold; margin-bottom: 5px;">
                    <?= show($errors['empEmail']) ?>
                </span>
            <?php endif; ?>

            

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?= $data['employee'][0]->empAddress ?>">
            
            <label for="phone">Contact Number:</label>
            <input type="text" id="phone" name="phone" value="<?= $data['employee'][0]->empContact ?>">
            
            <button type="submit" name="submit">SUBMIT</button>
        </form>
    </div>

</body>

</html>