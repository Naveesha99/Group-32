<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/employees.css">
    <title>employees</title>
</head>

<?php require_once 'nav.php' ?>

<body>
    <div class="container">
        <div class="content">
        <table>
                        <tr>
                            <th>Emp.No</th>
                            <th>Employee Name</th>
                            <th>E-mail</th>
                            <th>NIC</th>
                            <th>Date of Birth</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Employee type</th>
                            <!-- <td><a href="#" class="btn">View</a></td> -->
                        </tr>
                        <?php
                        foreach ($data as $row) {
                            echo '<tr>
                                    <td>' . $row->id . '</td>
                                    <td>' . $row->empName . '</td>
                                    <td>' . $row->empEmail . '</td>
                                    <td>' . $row->empNIC . '</td>
                                    <td>' . $row->empDOB . '</td>
                                    <td>' . $row->empAddress . '</td>
                                    <td>' . $row->empContact . '</td>
                                    <td>' . $row->empRoll . '</td>
                                    <td><a href="#" class="btn">View</a></td>
                                  </tr>';
                        }

                        ?>

                    </table>
        </div>
    </div>
</body>
</html>