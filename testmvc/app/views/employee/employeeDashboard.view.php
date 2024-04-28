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
        
            <div class="title">
                <h2>Today : <?= date('Y-m-d'); ?></h2>
                
            </div>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Task</th>
                        <th>Place</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                    if ($today_tasks && (is_array($today_tasks) || is_object($today_tasks))) {
                        foreach ($today_tasks as $row) {
                            echo '<tr>
                            <td>' . $row->task . ' </td>
                            <td>' . $row->place . ' </td>
                            <td>' . $row->relavant_time . ' </td>
                            <td>' . $row->status . '</td>
                            <td> 
                                <span class="action_btn">
                                    <a href = "empTaskView?id=' . $row->id . '" class = "btn">View</a>
                                </span>
                            </td>
                            </tr>';
                        }
                    } else {
                        echo '<tr><td colspan="5">No data available</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
    </div>
    </div>

</body>

</html>