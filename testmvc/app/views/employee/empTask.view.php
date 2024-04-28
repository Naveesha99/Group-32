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
    <?php
    $today_tasks = [];
    $historyTasks = [];

    $currentDate = date('Y-m-d');

    foreach ($data as $row) {
        if ($row->relavant_date == $currentDate) {
            $today_tasks[] = $row;
        } else {
            $historyTasks[] = $row;
        }
    }

    $todoCount = 0;
    $completedCount = 0;

    foreach ($today_tasks as $task) {
        if ($task->status == 'To do') {
            $todoCount++;
        } elseif ($task->status == 'Completed') {
            $completedCount++;
        }
    }


    ?>

    <div class="container">
        <div class="cardBox">
            <div class="card">
                <div class="cardName">To Do</div>
                <div class="numbers"><?= $todoCount ?></div>
            </div>

            <div class="card">
                <div class="cardName">Completed</div>
                <div class="numbers"><?= $completedCount ?></div>
            </div>
        </div>

        <div class="content-2">
            <div class="tasks">
                <div class="title">
                    <h2>Today : <?= date('Y-m-d'); ?></h2>
                    <span class="action_btn">
                        <a href="<?= ROOT ?>/employeeDashboard" class="btn-view">View All</a>
                    </span>
                </div>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Task</th>
                                <th>Place</th>
                                <th>Time</th>
                                <th>Status</th>
                                <th>Option</th>

                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            if ($today_tasks) {
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

            <div class="history">
                <div class="title">
                    <h2>History</h2>
                    <span class="action_btn">
                        <a href="<?= ROOT ?>/empHistory" class="btn-view">View All</a>
                    </span>
                    
                </div>

                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Task</th>
                                <th>Place</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Status</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            if ($historyTasks) {
                                foreach ($historyTasks as $row) {
                                    echo '<tr>
                            <td>' . $row->task . ' </td>
                            <td>' . $row->place . ' </td>
                            <td>' . $row->relavant_date . ' </td>
                            <td>' . $row->relavant_time . ' </td>
                            <td>' . $row->status . '</td>
                            <td>  <span class="action_btn">
                                    <a href = "empTaskView?id=' . $row->id . '" class = "btn">View</a>
                                </span>
                                </td>
                            </tr>';
                                }
                            } else {
                                echo '<tr><td colspan="6">No data available</td></tr>';
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