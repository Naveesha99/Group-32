<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/adminDashboard.css">
    
    <title>Admin Panel</title>
</head>

<?php require_once 'nav.php' ?>

<body class="dashboard">
    <div class="container">
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>6</h1>
                        <h3>Showing Dramas</h3>
                    </div>
                    <div class="icon-case">
                        <img src="students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>28</h1>
                        <h3>Total Employees</h3>
                    </div>
                    <div class="icon-case">
                        <img src="teachers.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>12</h1>
                        <h3>Reservation Requests</h3>
                    </div>
                    <div class="icon-case">
                        <img src="schools.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>350000</h1>
                        <h3>Income</h3>
                    </div>
                    <div class="icon-case">
                        <img src="income.png" alt="">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="tasks">
                    <div class="title">
                        <h2>Daily Tasks</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Task</th>
                            <th>Status</th>
                            <!-- <th>Amount</th>
                            <th>Option</th> -->
                        </tr>
                        <tr>
                            <td>Check reservation request</td>
                            <td>
                                <label for="dropdown"></label>
                                <select id="dropdown" name="dropdown">
                                <option value="option1">To do</option>
                                <option value="option2">In progress</option>
                                <option value="option3">Done</option>
                                </select>
                            </td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>
                                <label for="dropdown"></label>
                                <select id="dropdown" name="dropdown">
                                <option value="option1">To do</option>
                                <option value="option2">In progress</option>
                                <option value="option3">Done</option>
                                </select>
                            </td>                            
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>
                                <label for="dropdown"></label>
                                <select id="dropdown" name="dropdown">
                                <option value="option1">To do</option>
                                <option value="option2">In progress</option>
                                <option value="option3">Done</option>
                                </select>
                            </td>                            
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>
                                <label for="dropdown"></label>
                                <select id="dropdown" name="dropdown">
                                <option value="option1">To do</option>
                                <option value="option2">In progress</option>
                                <option value="option3">Done</option>
                                </select>
                            </td>                            
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>
                                <label for="dropdown"></label>
                                <select id="dropdown" name="dropdown">
                                <option value="option1">To do</option>
                                <option value="option2">In progress</option>
                                <option value="option3">Done</option>
                                </select>
                            </td>                            
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>
                                <label for="dropdown"></label>
                                <select id="dropdown" name="dropdown">
                                <option value="option1">To do</option>
                                <option value="option2">In progress</option>
                                <option value="option3">Done</option>
                                </select>
                            </td>                            
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                    </table>
                </div>
                <div class="new-dramas">
                    <div class="title">
                        <h2>New Dramas</h2>
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

</html>