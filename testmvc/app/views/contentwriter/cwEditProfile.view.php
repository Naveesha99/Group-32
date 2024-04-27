<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/cwEditProfile.css">
    <title>User Profile</title>
</head>

<body>
    <div class="container">
        <h1>Edit profile</h1>
        <form method="post">
            <label for="employee_name">Employee Name:</label>
            <input type="text" id="employee_name" name="employee_name" value="<?=$data['contentwriter'][0]->empName?>">

            <label for="email">Email:</label>
            <input type="email" id="email" name="empEmail" value="<?= $data['contentwriter'][0]->empEmail ?>">

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?= $data['contentwriter'][0]->empAddress ?>">
            
            <label for="phone">Contact Number:</label>
            <input type="text" id="phone" name="phone" value="<?= $data['contentwriter'][0]->empContact ?>">

            <button type="submit" name="submit">SUBMIT</button>

        </form>
    </div>

</body>

</html>