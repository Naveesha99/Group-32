<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/addEmployee.css">
    <title>Admin Employee</title>
</head>
<div class="side-menu">
    <ul>
        <a href="admin_dashboard.html"><li><img src="" alt="">&nbsp; <span>Dashboard</span> </li></a>
        <a href="admin_drama.html"><li><img src="" alt="">&nbsp; <span>Drama</span> </li></a>
        <a href="admin_employee.html"><li><img src="" alt="">&nbsp; <span>Employee</span> </li></a>
        <a href="admin_theater.html"><li><img src="" alt="">&nbsp; <span>Theater</span> </li></a>
        <a href="admin_requests.html"><li><img src="" alt="">&nbsp; <span>Requests</span> </li></a>
        <a href="admin_reports.html"><li><img src="" alt="">&nbsp; <span>Reports</span> </li></a>
        <a href="admin_settings.html"><li><img src="" alt="">&nbsp; <span>Settings</span> </li></a>
    </ul>
</div>

<div class="header">
  <div class="nav">
    <div class="navbar">
      <a href="#home">About</a>
      <a href="#about">Theater</a>
      <a href="#services">Drama</a>
      <a href="#contact">Drama Portal</a>
      <a href="#contact">Home</a>
  </div>
  </div>
</div>

<body>
    <div class="container">
        <div class="content">
            <form action="" class="add-employee">
                <h1>Employee Registration Form</h1>
                <label for="empname">Employee Name</label>
                <input type="text" name="empname">
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
                <input type="text" name="empRoll">
                <!-- <label for="empname">Employee Name</label>
                <input type="text" name="empty" placeholder="Empty">                 -->
                <button class="btn" type="submit">Submit</button>
            </form>

            <div id="popup">
                <p>Employee added successfully!</p>
                <button onclick="addAnotherEmployee()">Add Another Employee</button>
                <button onclick="viewEmployees()">View Employees</button>
              </div>
            
              <script>
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
              </script>
        </div>
    </div>
</body>