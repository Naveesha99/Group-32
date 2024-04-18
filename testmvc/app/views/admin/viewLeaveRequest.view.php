<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/viewRequest.css">
    <title>Employee View</title>
</head>

<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body>
    <!-- end of styling are -->

    <!-- Page content -->

    <hr>

    <div class="container">

        </h1>
        <h1 align="center">Request ID <?= $data['request'][0]->id ?></h1>


        <hr>
        <div class="form-right">

            <!-- Personal Email -->
            <label for="employee_name">Employee Name:
                <input type="text" id="employee_name" value="<?= $data['request'][0]->employee_name ?>" disabled /></label>

            <!-- Employee ID -->
            <label for="emp_id">Employee ID:
                <input type="text" id="emp_id" value="<?= $data['request'][0]->emp_id ?>" disabled /></label>

            <!-- NIC -->
            <label for="leave_type">Leave Type:
                <input type="text" id="leave_type" value="<?= $data['request'][0]->leave_type ?>" disabled /></label>

            <!-- DOB -->
            <label for="start_date">Start Date:
                <input type="text" id="start_date" value="<?= $data['request'][0]->start_date ?>" disabled /></label>

            <!-- Address -->
            <label for="end_date">End Date:
                <input type="text" id="end_date" value="<?= $data['request'][0]->end_date ?>" disabled /></label>

            <!-- Contact No -->
            <label for="reason">Reason:
                <input type="text" id="reason" value="<?= $data['request'][0]->reason ?>" disabled /></label>

            <!-- Hired Date -->
            <label for="state">Status:
                <input type="text" id="state" value="<?= $data['request'][0]->state ?>" disabled /></label>

            <div class="btn-container">
                <form method="POST">
                    <input type="hidden" name="accept_request" value="<?= $data['request'][0]->id ?>">
                    <button type="submit" name="Accept" class="btn-accept">Accept</button>
                </form>
                <form method="POST">
                    <input type="hidden" name="reject_request" value="<?= $data['request'][0]->id ?>">
                    <button type="submit" name="Reject" class="btn-reject">Reject</button>
                </form>
            </div>
        </div>

    </div>
</body>

</html>