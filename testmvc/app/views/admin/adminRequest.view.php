<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Request</title>
</head>

<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

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
                if ($data && (is_array($data) || is_object($data))) {
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

                    <td>
                        <form method="POST">
                            <input type="hidden" name="view_employee" value="' . $row->id . '">
                            <button type="submit" name="View" id = "openProfile" class="btn">View</button>
                        </form>
                    </td>

                    <td>
                        <form method="POST">
                            <input type="hidden" name="update_employee" value="' . $row->id . '">
                            <button type="submit" name="Update" id = "openPopup" class="btn-update">Update</button>
                        </form>
                    </td>
                    
                    <td>
                        <form method="POST">
                            <input type="hidden" name="delete_employee" value="' . $row->id . '">
                            <button type="submit" name="Delete" class="btn-delete">Delete</button>
                        </form>
                    </td>
                  </tr>';
                    }
                } else {
                    echo '<tr><td colspan="9">No data available</td></tr>';
                }
                ?>
        </div>
    </div>
</body>

</html>