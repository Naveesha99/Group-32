<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit leave request</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/empEditRequest.css">
</head>

<body>
    <div class="container">

    <!-- <?php show($data['emp_req']); ?> -->

        <h1>Edit Leave Request Form </h1>

        <form method="POST">

            <label for="employee_name">Employee Name:</label>
            <input type="text" id="employee_name" name="employee_name" value="<?=$data['emp_req'][0]->employee_name?>" required>

            <label for="leave_type">Leave Type:</label>
            <select id="leave_type" name="leave_type" value="<?=$data['emp_req'][0]->leave_type?>" required>
                <option value="Sick Leave">Sick Leave</option>
                <option value="Vacation Leave">Vacation Leave</option>
                <option value="Personal Leave">Personal Leave</option>
            </select>

            <label for="start_date">Start Date:</label>
            <input type="date" id="start_date" name="start_date" value="<?=$data['emp_req'][0]->start_date?>" required>

            <label for="end_date">End Date:</label>
            <input type="date" id="end_date" name="end_date" value="<?=$data['emp_req'][0]->end_date?>" required>

            <label for="reason">Reason:</label>
            <textarea id="reason" name="reason" rows="4" required>
                <?= htmlspecialchars($data['emp_req'][0]->reason) ?>
            </textarea>

            <button type="submit" name="submit">SUBMIT</button>
        </form>
    </div>


</body>

</html>