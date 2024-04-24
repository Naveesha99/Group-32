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
            <div class="cards">
                <a href="<?= ROOT ?>/addemployee">
                    <div class="card">
                        <div class="box">
                            <h1>Add Employee</h1>
                        </div>
                    </div>
                </a>

                <a href="<?= ROOT ?>/createtask">
                    <div class="card">
                        <div class="box">
                            <h1>Create Tasks</h1>
                        </div>
                    </div>
                </a>
                <?php
                date_default_timezone_set('Asia/Colombo');
                $date = date('Y-m-d');
                // show($date);
                ?>
                <a href="<?= ROOT ?>/assignTask?date=<?= $date ?>">
                    <div class="card">
                        <div class="box">
                            <h1>Assign Tasks</h1>
                        </div>
                    </div>
                </a>
                <a href="<?= ROOT ?>/addjobrole">
                    <div class="card">
                        <div class="box">
                            <h1>Add Job</h1>
                        </div>
                    </div>
                </a>
            </div>
            <div class="content-2">
                <div class="employees">
                    <div class="title">
                        <h2>Employees</h2>
                        <a href="<?= ROOT ?>/employees" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Emp.No</th>
                            <th>Name</th>
                            <th>NIC</th>
                            <th>Employee type</th>
                            <!-- <td><a href="#" class="btn">View</a></td> -->
                        </tr>
                        <?php
                        foreach ($data['employee'] as $row) {
                            echo '<tr>
                                    <td>' . "emp" . $row->id . '</td>
                                    <td>' . $row->empName . '</td>
                                    <td>' . $row->empNIC . '</td>
                                    <td>' . $row->empRoll . '</td>
                                    <td><a href="#" class="btn">View</a></td>
                                  </tr>';
                        }

                        ?>

                    </table>
                </div>
                <div class="new-employee">
                    <div class="title">
                        <h2>Job Roles</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Job Title</th>
                            <th>option</th>
                        </tr>

                        <?php
                        $role = array_slice($data['role'], -5);
                        foreach ($role as $row) {
                            echo '<tr>
                                    <td>' . $row->jobTitle . '</td>
                                    <td><a href="#" class="btn">View</a></td>
                                  </tr>';
                        }

                        ?>

                    </table>
                </div>
            </div>
            <div class="content-3">
                <div class="Tasks">
                    <div class="title">
                        <h2>Tasks</h2>
                        <a href="<?= ROOT ?>/employees" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Task</th>
                            <th>Date</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Location</th>
                            <th>Status</th>
                            <!-- <td><a href="#" class="btn">View</a></td> -->
                        </tr>
                        <?php
                        foreach ($data['task'] as $row) {
                            echo '<tr>
                                    <td>' . $row->taskType . '</td>
                                    <td>' . $row->date . '</td>
                                    <td>' . $row->startTime . '</td>
                                    <td>' . $row->endTime . '</td>
                                    <td>' . $row->location . '</td>
                                    <td>' . $row->status . '</td>
                                    <td><a href="#" class="btn">View</a></td>
                                  </tr>';
                        }

                        ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>