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
            <a href="<?= ROOT ?>/EmployeeRequestForm">
                <div>
                    
                    <div class="numbers">Request to Leave</div>

                </a>

                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">To Do</div>
                    <div class="cardName"><?= $data['to_do'] ?></div>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">Completed</div>
                    <div class="cardName"><?= $data['completed'] ?></div>
                </div>
            </div>
        </div>

        <div class="content-2">
            <div class="tasks">
                <div class="title">
                    <h2>Today : <?= date('Y-m-d'); ?></h2>
                    <!-- <a href="#" class="btn">View All</a> -->
                </div>
                <table>
                    <tr>
                        <th>Task</th>
                        <th>Place</th>
                        <th>Time</th>
                        <th>Status</th>
                    </tr>

                    <?php
                    if ($today_tasks && (is_array($today_tasks) || is_object($today_tasks))) {
                        foreach ($today_tasks as $row) {
                            echo '<tr>
                            <td>' . $row->task . ' </td>
                            <td>' . $row->place . ' </td>
                            <td>' . $row->relavant_time . ' </td>
                            <td>' . $row->status . '</td>
                            <td> <a href = "empTaskView?id=' . $row->id . '" class = "btn">View</a>
                            </tr>';
                        }
                    } else {
                        echo '<tr><td colspan="5">No data available</td></tr>';
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

</body>

</html>