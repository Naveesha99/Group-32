<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/adminEmployee.css">
    <title>Admin Employee</title>
</head>

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
  
<div class="side-menu">
    <div class="brand-name">
        <h1>Brand</h1>
    </div>
    <ul>
            <a href="<?=ROOT?>/admindashboard"><li><img src="" alt="">&nbsp; <span>Dashboard</span> </li></a>
            <a href="<?=ROOT?>/admindrama"><li><img src="" alt="">&nbsp; <span>Drama</span> </li></a>
            <a href="<?=ROOT?>/adminemployee"><li><img src="" alt="">&nbsp; <span>Employee</span> </li></a>
            <a href="<?=ROOT?>/admindrama"><li><img src="" alt="">&nbsp; <span>Theater</span> </li></a>
            <a href="<?=ROOT?>/adminrequests"><li><img src="" alt="">&nbsp; <span>Requests</span> </li></a>
            <a href="<?=ROOT?>/adminreports"><li><img src="" alt="">&nbsp; <span>Reports</span> </li></a>
            <a href="<?=ROOT?>/adminsettings"><li><img src="" alt="">&nbsp; <span>Settings</span> </li></a>
    </ul>
</div>

<body class="drama">
    <div class="container">
        <div class="content">
            <div class="cards">
                <a href="addEmployee.html">
                    <div class="card">
                        <div class="box">
                            <h1>Add Employee</h1>
                        </div>
                    </div>
                </a>
                <a href="createTask.html">
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
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>001</td>
                            <td>Sanath Nishantha</td>
                            <td>782500789v</td>
                            <td>Cleaner</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
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