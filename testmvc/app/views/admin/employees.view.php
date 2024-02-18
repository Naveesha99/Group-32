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
                // Check if $data is not false and is an array or object
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

            </table>

            <div id="overlay"></div>
            <div id="popupForm">
                <form method="POST" class="add-employee" id="addemployee">
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
            <script src="<?= ROOT ?>/assets/js/popup.js"></script>


            <!-- user profile -->
            <div id="popupProfile">
                <div id="profile">
                    <?php
                    if ($data['view'] && (is_array($data['view']) || is_object($data['view']))){
                        echo '<div class="image"></div> ;
                    <h2>Name:' .$row->id. '</h2>
                    <p>20-year-old part time photograpger who enjoys binge-watching boxed sets, watching sport and hockey. She is intelligent and careful, but can also be a bit grumpy.</p>
                    <button id="closePopup" class="close-btn">close</button>';
                    }
                    ?>
                </div>
            </div>
            <script src="<?= ROOT ?>/assets/js/profile.js"></script>

        </div>
    </div>
</body>

</html>