<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task history</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/empHistory.css">
</head>

<?php require_once 'employeeSideBar.php' ?>
<?php include 'navBar.php' ?>

<body>
    <div class="container">
        <div class="cardBox">
            <div class="card">
                <div>
                    <div class="numbers">Total Tasks</div>
                    <div class="cardName"><?= $data['total'] ?></div>
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


            <div class="history">
                <div class="title">
                    <h2>History</h2>
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

                    <?php
                    if ($historyTasks) {
                        foreach ($historyTasks as $row) {
                            echo '<tr>
                            <td>' . $row->task . ' </td>
                            <td>' . $row->place . ' </td>
                            <td>' . $row->relavant_date . ' </td>
                            <td>' . $row->relavant_time . ' </td>
                            <td>' . $row->status . '</td>
                            <td> <a href = "empTaskView?id=' . $row->id . '" class = "btn">View</a>
                            </tr>';
                        }
                    } else {
                        echo '<tr><td colspan="6">No data available</td></tr>';
                    }
                    ?>

                </table>
            </div>
        </div>
    </div>

</body>

</html>