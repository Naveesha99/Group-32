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

    foreach ($data['result'] as $row) {
        if ($row->date == $currentDate) {
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
    <div id="overlay"></div>

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
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Status</th>
                                <th>Option</th>

                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            if ($today_tasks) {
                                foreach ($today_tasks as $row) {
                            ?>
                                    <tr>
                                        <td><?=$row->taskType ?></td>
                                        <td><?=$row->location ?> </td>
                                        <td><?=$row->startTime ?> </td>
                                        <td><?=$row->endTime ?> </td>
                                        <td><?=$row->status ?></td>
                                        <td>

                                            <span class="action_btn">
                                                <form method="POST">
                                                    <input type="hidden" name="task_id" value="<? $row->id ?>">
                                                    <button type="button" data-order='<?= json_encode($row) ?>' class="btn" onClick="openPopupNew(this)">View</button>
                                                </form>
                                            </span>
                                        </td>

                                    </tr>
                            <?php
                                }
                            } else {
                                echo '<tr><td colspan="5">No data available</td></tr>';
                            }
                            ?>

                            <div class="card2" id="card2">
                                <div class="box">
                                    <div class="content">

                                        <div class="paragraph">
                                            <label for="taskType">Task:</label>
                                            <input type="text" id="taskType" name="taskType" readonly>

                                            <label for="location">Place:</label>
                                            <input type="text" id="location" name="location" readonly>

                                            <label for="date">Date:</label>
                                            <input type="text" id="date" name="date" readonly>

                                            <label for="startTime">Start Time:</label>
                                            <input type="text" id="startTime" name="startTime" readonly>

                                            <label for="endTime">End Time:</label>
                                            <input type="text" id="endTime" name="endTime" readonly>

                                            <label for="status">Status:</label>
                                            <input type="text" id="status" name="status" readonly>
                                            <button onclick="closePopupNew()">Close</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
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
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Status</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            if ($historyTasks) {
                                foreach ($historyTasks as $row) {
                            ?>
                                    <tr>
                                        <td><?=$row->taskType ?> </td>
                                        <td><?=$row->location ?> </td>
                                        <td><?=$row->date ?> </td>
                                        <td><?=$row->startTime ?> </td>
                                        <td><?=$row->endTime ?> </td>
                                        <td><?=$row->status ?></td>
                                        <td>
                                         <span class="action_btn">
                                                <form method="POST">
                                                    <input type="hidden" name="task_id" value="' . $row->id . '">
                                                    <button type="button" data-order='<?=json_encode($row)?>' class="btn" onClick="openPopup(this)">View</button>
                                                </form>
                                            </span>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo '<tr><td colspan="6">No data available</td></tr>';
                            }
                            ?>

                            <div class="card1" id="card1">
                                <div class="box">
                                    <div class="content">

                                        <div class="paragraph">
                                            <label for="taskType">Task:</label>
                                            <input type="text" id="taskType" name="taskType"  readonly>

                                            <label for="location">Place:</label>
                                            <input type="text" id="location" name="location"  readonly>

                                            <label for="date">Date:</label>
                                            <input type="text" id="date" name="date"  readonly>

                                            <label for="startTime">Start Time:</label>
                                            <input type="text" id="startTime" name="startTime"  readonly>

                                            <label for="endTime">End Time:</label>
                                            <input type="text" id="endTime" name="endTime"  readonly>

                                            <label for="status">Status:</label>
                                            <input type="text" id="status" name="status"  readonly>
                                            <button onclick="closePopup()">Close</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function openPopup() {
            var order = JSON.parse(button.getAttribute("data-order"));
            document.getElementById('taskType').value = order.taskType;
            document.getElementById('location').value = order.location;
            document.getElementById('date').value = order.date;
            document.getElementById('startTime').value = order.startTime;
            document.getElementById('endTime').value = order.endTime;
            document.getElementById('status').value = order.status;
            document.getElementById('card1').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
            
        };

        function closePopup() {
            document.getElementById('card1').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
            window.location.href = "EmpTask";

        };

        function openPopupNew(button) {
            var order = JSON.parse(button.getAttribute("data-order"));
            document.getElementById('taskType').value = order.taskType;
            document.getElementById('location').value = order.location;
            document.getElementById('date').value = order.date;
            document.getElementById('startTime').value = order.startTime;
            document.getElementById('endTime').value = order.endTime;
            document.getElementById('status').value = order.status;

            document.getElementById('card2').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';

        };

        function closePopupNew() {
            document.getElementById('card2').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
            window.location.href = "EmpTask";
        };
    </script>




</body>

</html>