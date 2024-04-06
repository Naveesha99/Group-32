<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/employeeRequests.css">
    <title>Employee Requests</title>
</head>

<?php require_once 'employeeSideBar.php' ?>
<?php include 'navBar.php' ?>

<body>
    <div class="container">
        <div class="cardBox">
            <div class="card">
            <a href="<?= ROOT ?>/EmployeeRequestForm">
                <div>
                    <div class="cardName">Request to Leave</div>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="cardName">Total Leaves</div>
                    <div class="numbers">10</div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Leave Type</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Reason</th>
                        <th>State</th>
                        <th>Option</th>
                    </tr>
                </thead>
            </table>
        </div>


    </div>

</body>

</html>