<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/employeeTasks.css">
    <title>Employee Tasks</title>
</head>

<?php require_once 'employeeSideBar.php' ?>
<?php include 'navBar.php' ?>

<body>
    <div class="container">
        <div class="cardBox">
            <div class="card">
                <div class="cardName">To Do</div>
                <div class="numbers">10</div>
            </div>

            <div class="card">
                <div class="cardName">Completed</div>
                <div class="numbers">10</div>
            </div>
        </div>

        <div class="content-2">
            <div class="tasks">
                <div class="title">
                    <h2>Today : 2024.04.11</h2>
                    <a href="#" class="btn">View All</a>
                </div>
                <table>
                    <tr>
                        <th>Task</th>
                        <th>Place</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th>Option</th>
                    </tr>

                    <tr>
                        <td>Cleaning the hall</td>
                        <td>Hall 01</td>
                        <td>8.30 A.M</td>
                        <td>to do</td>
                        <td><a href="#" class="btn">View</a></td>
                    </tr>

                    <tr>
                        <td>Cleaning the theatre</td>
                        <td>Theatre</td>
                        <td>9.30 A.M</td>
                        <td>completed</td>
                        <td><a href="#" class="btn">View</a></td>
                    </tr>

                    <tr>
                        <td>Cleaning the hall</td>
                        <td>Hall 02</td>
                        <td>11.30 A.M</td>
                        <td>to do</td>
                        <td><a href="#" class="btn">View</a></td>
                    </tr>
                </table>
            </div>

            <div class="history">
                <div class="title">
                    <h2>History</h2>
                    <a href="#" class="btn">View All</a>
                </div>
                <table>
                    <tr>
                        <th>Task</th>
                        <th>Place</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th>Option</th>
                    </tr>

                    <tr>
                        <td>Cleaning the hall</td>
                        <td>Hall 01</td>
                        <td>2024.04.10</td>
                        <td>8.30 A.M</td>
                        <td>to do</td>
                        <td><a href="#" class="btn">View</a></td>
                    </tr>

                    <tr>
                        <td>Cleaning the theatre</td>
                        <td>Theatre</td>
                        <td>2024.04.10</td>
                        <td>9.30 A.M</td>
                        <td>completed</td>
                        <td><a href="#" class="btn">View</a></td>
                    </tr>

                    <tr>
                        <td>Cleaning the hall</td>
                        <td>Hall 02</td>
                        <td>2024.04.09</td>
                        <td>11.30 A.M</td>
                        <td>to do</td>
                        <td><a href="#" class="btn">View</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>




</body>

</html>