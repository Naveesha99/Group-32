<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/adminEmployee.css">
    <title>Admin Employee</title>
</head>

<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body class="drama">
    <div class="container">
        <div class="content">
            <div class="cardBox">
                <a href="<?= ROOT ?>/addemployee">
                    <div class="card">
                        <div class="numbers">Add Employee</div>
                    </div>
                </a>
                <a href="<?= ROOT ?>/addjobrole">
                    <div class="card">
                        <div class="numbers">Add Job Role</div>
                    </div>
                </a>
                <a href="<?= ROOT ?>/leaveRequest">
                    <div class="card">
                        <div class="numbers">Leave Requests</div>
                    </div>
                </a>
            </div>
            <div class="title">
                        <h2>Employees</h2>
                        <a href="<?= ROOT ?>/employees" class="btn-1">View All</a>
                    </div>
                    <br>
            <div class="content-2">
                <div class="employees">
                    <table>
                        <thead>
                            <tr>
                                <th>Emp.No</th>
                                <th>Name</th>
                                <th>NIC</th>
                                <th>Employee type</th>
                                <!-- <td><a href="#" class="btn">View</a></td> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $employees = array_slice($data['employee'], -6);
                            foreach ($employees as $row) {
                                echo '<tr>
                                    <td>' . "emp" . $row->id . '</td>
                                    <td>' . $row->empName . '</td>
                                    <td>' . $row->empNIC . '</td>
                                    <td>' . $row->empRoll . '</td>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="jobs">
                    <!-- <div class="title">
                        <h2>Job Roles</h2>
                    </div> -->
                    <table>
                        <thead>
                            <tr>
                                <th>Job Title</th>
                                <th>option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $role = array_slice($data['role'], -5);
                            foreach ($role as $row) {
                                echo '<tr>
                                    <td>' . $row->jobTitle . '</td>
                                    <td><a href="#" class="btn">View</a></td>
                                  </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>