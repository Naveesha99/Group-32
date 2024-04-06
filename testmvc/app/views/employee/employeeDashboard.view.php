<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/employeeDashboard.css">
    <title>Employee Dashboard</title>
</head>

<?php require_once 'employeeSideBar.php' ?>
<?php include 'navBar.php' ?>

<body>
    <div class="container">
        <div class="cardBox">
            <div class="card">
                <div>
                    <div class="numbers">Request to Leave</div>
                    <!-- <div class="cardName">Total Articles</div> -->
                </div>
            </div>
        </div>

        <div class="content-2">
            <div class="tasks">
                <div class="title">
                    <h2>Daily tasks</h2>
                    <a href="#" class="btn">View All</a>
                </div>
                <table>
                    <tr>
                        <th>Task</th>
                        <th>Place</th>
                        <th>Time</th>
                    </tr>

                    <tr>
                        <td>Cleaning the hall</td>
                        <td>Hall 01</td>
                        <td>8.30 A.M</td>
                        <td><a href="#" class="btn">View</a></td>
                    </tr>

                    <tr>
                        <td>Cleaning the theatre</td>
                        <td>Theatre</td>
                        <td>9.30 A.M</td>
                        <td><a href="#" class="btn">View</a></td>
                    </tr>

                    <tr>
                        <td>Cleaning the hall</td>
                        <td>Hall 02</td>
                        <td>11.30 A.M</td>
                        <td><a href="#" class="btn">View</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</body>

</html>