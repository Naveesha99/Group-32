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
        <form method="post">
            <label for="employee_name">Employee Name:</label>
            <input type="text" id="employee_name" name="employee_name" value="<?=$data['employee'][0]->empName?>" required>

            <label for="password">Password:</label>
            <input type="text" id="password" name="password" value="<?=$data['employee'][0]->password?>" required>

            <button type="submit" name="submit">SUBMIT</button>

        </form>
    </div>

</body>

</html>