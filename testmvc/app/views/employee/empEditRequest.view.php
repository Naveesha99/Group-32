<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit leave request</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/employeeRequestForm.css">
</head>

<?php require_once 'employeeSideBar.php' ?>
<?php include 'navBar.php' ?>

<body>
    <div class="container">

        <!-- <?php show($data['emp_req']); ?> -->

        <form method="POST" class="employeRequest">
            <h1> Edit Leave Request</h1>

            <label for="employee_name">Employee Name:</label>
            <input type="text" id="employee_name" name="employee_name" value="<?= $data['emp_req'][0]->employee_name ?>">

            <label for="leave_type">Leave Type:</label>
            <select id="leave_type" name="leave_type" value="<?= $data['emp_req'][0]->leave_type ?>">
                <option value="Sick Leave">Sick Leave</option>
                <option value="Vacation Leave">Vacation Leave</option>
                <option value="Personal Leave">Personal Leave</option>
            </select>

            <label for="start_date">Start Date:</label>
            <input type="date" id="start_date" name="start_date" value="<?= $data['emp_req'][0]->start_date ?>">

            <label for="end_date">End Date:</label>
            <input type="date" id="end_date" name="end_date" value="<?= $data['emp_req'][0]->end_date ?>">

            <label for="reason">Reason:</label>
            <textarea id="reason" name="reason" rows="4" required><?= htmlspecialchars($data['emp_req'][0]->reason) ?>
            </textarea>

            <button type="submit" name="submit">EDIT</button>
        </form>
    </div>


</body>

</html>