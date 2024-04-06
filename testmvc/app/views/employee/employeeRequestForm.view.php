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

            <label for="employee_name">Employee Name:</label>
            <input type="text" id="employee_name" name="employee_name" required>

            <label for="leave_type">Leave Type:</label>
            <select id="leave_type" name="leave_type" required>
                <option value="Sick Leave">Sick Leave</option>
                <option value="Vacation Leave">Vacation Leave</option>
                <option value="Personal Leave">Personal Leave</option>
            </select>

            <label for="start_date">Start Date:</label>
            <input type="date" id="start_date" name="start_date" required>

            <label for="end_date">End Date:</label>
            <input type="date" id="end_date" name="end_date" required>

            <label for="reason">Reason:</label>
            <textarea id="reason" name="reason" rows="4" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>

</body>

</html>