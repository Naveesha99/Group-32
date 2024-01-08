<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/adminEmployee.css">
    <title>Admin Employee</title>
</head>

<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body class="drama">
    <div class="container">
        <div class="content">
            <div class="cards">
                <a href="<?=ROOT?>/addemployee">
                    <div class="card">
                        <div class="box">
                            <h1>Add Employee</h1>
                        </div>
                    </div>
                </a>
                <a href="<?=ROOT?>/createtask">
                    <div class="card">
                        <div class="box">
                            <h1>Create Tasks</h1>
                        </div>
                    </div>
                </a>
                <a href="assignTask.html">
                    <div class="card">
                        <div class="box">
                            <h1>Assign Tasks</h1>
                        </div>
                    </div>
                </a>
            </div>
            <div class="content-2">
                <div class="employees">
                    <div class="title">
                        <h2>Employees</h2>
                        <a href="#" class="btn">View All</a>
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
                        foreach ($data as $row) {
                            echo '<tr>
                                    <td>' . $row->id . '</td>
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
                        <h2>New Employees</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Drama</th>
                            <th>option</th>
                        </tr>
                        <tr>
                            <td>Sinhabahu</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Steve Doe</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Steve Doe</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Steve Doe</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>