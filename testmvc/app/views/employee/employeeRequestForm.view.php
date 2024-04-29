<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/employeeRequestForm.css">
    <title>Employee Requests Form</title>
</head>

<body>
    <div class="container">

        <h1>Leave Request Form </h1>

        <form method="POST">
            <?php if (!empty($errors['employee_name'])) : ?>
                <span class="error">
                    <?= '* ' . $errors['employee_name'] ?> </br>
                </span>
            <?php endif; ?>
            <label for="employee_name">Employee Name:</label>
            <input type="text" id="employee_name" name="employee_name" value="<?= $_SESSION['USER']->fullname ?>">


            <?php if (!empty($errors['leave_type'])) : ?>
                <span class="error">
                    <?= '* ' . $errors['leave_type'] ?> </br>
                </span>
            <?php endif; ?>
            <label for="leave_type">Leave Type:</label>
            <select id="leave_type" name="leave_type">
                <option value="Sick Leave">Sick Leave</option>
                <option value="Vacation Leave">Vacation Leave</option>
                <option value="Personal Leave">Personal Leave</option>
            </select>

            <?php if (!empty($errors['start_date'])) : ?>
                <span class="error">
                    <?= '* ' . $errors['start_date'] ?> </br>
                </span>
            <?php endif; ?>
            <label for="start_date">Start Date:</label>
            <input type="date" id="start_date" name="start_date">


            <?php if (!empty($errors['end_date'])) : ?>
                <span class="error">
                    <?= '* ' . $errors['end_date'] ?> </br>
                </span>
            <?php endif; ?>

            <label for="end_date">End Date:</label>
            <input type="date" id="end_date" name="end_date">


            <?php if (!empty($errors['reason'])) : ?>
                <span class="error">
                    <?= '* ' . $errors['reason'] ?> </br>
                </span>
            <?php endif; ?>
            <label for="reason">Reason:</label>
            <textarea id="reason" name="reason" rows="4"></textarea>


            <button type="submit" name="submit">SUBMIT</button>
        </form>
    </div>



</body>

</html>