<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/employees.css">
    <title>employees</title>
</head>

<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>


<script>
    function showAlert() {
        alert("View button clicked!");
        // You can customize the alert message as needed
    }
</script>

<body>
    <div class="container">
        <div class="content">
            <div class="employees">
                <table>
                    <tr class="tr-1">
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
                    // Check if $data is not false and is an array or object
                    if ($data && (is_array($data) || is_object($data))) {
                        foreach ($data['employees'] as $row) {
                            echo '<tr class = "tr-2">
                                <td>' . $row->id . '</td>
                                <td>' . $row->empName . '</td>
                                <td>' . $row->empEmail . '</td>
                                <td>' . $row->empNIC . '</td>
                                <td>' . $row->empDOB . '</td>
                                <td>' . $row->empAddress . '</td>
                                <td>' . $row->empContact . '</td>
                                <td>' . $row->empRoll . '</td>
                                
                                <td>
                                <span class="action_btn">
                                    <a class = "btn" href="viewEmployee?id=' . $row->id . '">View</a>
                                </span>
                                </td>

                                <td>
                                <span class="action_btn">
                                    <a class = "btn-update" href="editEmployee?id=' . $row->id . '">Edit</a>
                                </span>
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

                </table>
            </div>
            <!-- user profile -->
            <!-- user profile -->
        </div>
    </div>
</body>

</html>