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
                <!-- <a href="<?=ROOT?>/addemployee">
                    <div class="card">
                        <div class="box">
                            <h1>Add Employee</h1>
                        </div>
                    </div>
                </a> -->
                <div class="card" id="openPopup">
                <div class="box">
                            <h1>Add Employee</h1>
                        </div>
                </div>

                <div id = "overlay"></div>
                <div id = "popupForm">
                <form method="POST" class="add-employee" id = "addemployee">
                        <h1>Employee Registration Form</h1>
                        <label for="empName">Employee Name</label>
                        <input type="text" name="empName">
                        <label for="empEmail">E-mail</label>
                        <input type="email" name="empEmail">
                        <label for="empNIC">NIC</label>
                        <input type="text" name="empNIC">
                        <label for="empDOB">Date of Birth</label>
                        <input type="date" name="empDOB">
                        <label for="empAddress">Address</label>
                        <input type="text" name="empAddress">
                        <label for="empContact">Contact</label>
                        <input type="text" name="empContact">
                        <label for="empRoll">Employee Roll</label>
                        <select class="select" name="empRoll">
                        <?php
                        foreach ($data['role'] as $row) {
                            echo "<option value='" . $row->jobTitle . "'>" . $row->jobTitle . "</option>";
                        }
                        ?>
                        </select>

                        <br>
                        <button class="btn-1">Submit</button>
                        <button id="closePopup" class="close-btn">close</button>
                </form>
                </div>

                <script src="<?=ROOT?>/assets/js/popup.js"></script>

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
                        foreach ($data['employee'] as $row) {
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
                        <h2>Job Roles</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Job Title</th>
                            <th>option</th>
                        </tr>
                        
                        <?php
                        foreach ($data['role'] as $row) {
                            echo '<tr>
                                    <td>' . $row->jobTitle . '</td>
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