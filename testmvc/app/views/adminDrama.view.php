<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/adminDrama.css">

    <title>admin drama</title>
</head>

<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body>
<body class="drama">
    <div class="container">
        <div class="content">
            <div class="cards">
                <a href="<?=ROOT?>/adddrama">
                    <div class="card">
                        <div class="box">
                            <h1>Add Drama</h1>
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
                <a href="<?=ROOT?>/addjobrole">
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
                        <a href="<?=ROOT?>/employees" class="btn">View All</a>
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
                        // foreach ($data['employee'] as $row) {
                        //     echo '<tr>
                        //             <td>' . $row->id . '</td>
                        //             <td>' . $row->empName . '</td>
                        //             <td>' . $row->empNIC . '</td>
                        //             <td>' . $row->empRoll . '</td>
                        //             <td><a href="#" class="btn">View</a></td>
                        //           </tr>';
                        // }

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
                        // foreach ($data['role'] as $row) {
                        //     echo '<tr>
                        //             <td>' . $row->jobTitle . '</td>
                        //             <td><a href="#" class="btn">View</a></td>
                        //           </tr>';
                        // }

                        ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</body>
</html>