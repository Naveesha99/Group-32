<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/addEmployee.css">
    <title>Admin Employee</title>
</head>

<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>


<body>
    <div class="container">
        <div class="content">
            <form method="POST" class="add-employee">
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
                <select name="empRoll">
                <?php
                foreach ($data['role'] as $row) {
                    echo "<option value='" . $row->jobTitle . "'>" . $row->jobTitle . "</option>";
                }
                  ?>
                </select>

                <br>
                <!-- <label for="empname">Employee Name</label>
                <input type="text" name="empty" placeholder="Empty">                 -->
                <button class="btn">Submit</button>
            </form>

            <!-- <div id="popup">
                <p>Employee added successfully!</p>
                <button onclick="addAnotherEmployee()">Add Another Employee</button>
                <button onclick="viewEmployees()">View Employees</button>
              </div> -->
            
              <!-- <script>
                function showPopup() {
                  // Display the popup
                  document.getElementById('popup').style.display = 'block';
                }
            
                function addAnotherEmployee() {
                  // Add logic to handle "Add Another Employee" option
                  alert('Adding another employee...');
                  // You can redirect to another page or perform other actions
                }
            
                function viewEmployees() {
                  // Add logic to handle "View Employees" option
                  alert('Viewing employees...');
                  // You can redirect to the page where you display employees or perform other actions
                }
              </script> -->
        </div>
    </div>
</body>