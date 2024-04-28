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
    <div id="overlay"></div>
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
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                    if ($today_tasks && (is_array($today_tasks) || is_object($today_tasks))) {
                        foreach ($today_tasks as $row) {
                            echo '<tr>
                            <td>' . $row->taskType . ' </td>
                            <td>' . $row->location . ' </td>
                            <td>' . $row->startTime . ' </td>
                            <td>' . $row->endTime . ' </td>
                            <td>' . $row->status . '</td>
                            <td> 
                                <span class="action_btn">
                                <form method = "POST">
                                <input type="hidden" name="task_id" value="' . $row->id . '">
                                <button type="submit" class="btn" onClick="openPopupNew()">View</button>
                                </form>
                                </span>
                            </td>
                            </tr>';
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
                                    <input type="text" id="taskType" name="taskType" value="<?= $data['empTask'][0]->taskType ?>" readonly>

                                    <label for="location">Place:</label>
                                    <input type="text" id="location" name="location" value="<?= $data['empTask'][0]->location ?>" readonly>

                                    <label for="date">Date:</label>
                                    <input type="text" id="date" name="date" value="<?= $data['empTask'][0]->date ?>" readonly>

                                    <label for="startTime">Start Time:</label>
                                    <input type="text" id="startTime" name="startTime" value="<?= $data['empTask'][0]->startTime ?>" readonly>

                                    <label for="endTime">End Time:</label>
                                    <input type="text" id="endTime" name="endTime" value="<?= $data['empTask'][0]->endTime ?>" readonly>

                                    <label for="status">Status:</label>
                                    <input type="text" id="status" name="status" value="<?= $data['empTask'][0]->status ?>" readonly>
                                    <button onclick="closePopupNew()">Close</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </tbody>
            </table>
        </div>

    </div>

    <div class="content-3">

        <div class="title">
            <h2>Tasks to Complete</h2>

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
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                    if ($future_tasks && (is_array($future_tasks) || is_object($future_tasks))) {
                        foreach ($future_tasks as $row) {
                            echo '<tr>
                            <td>' . $row->taskType . ' </td>
                            <td>' . $row->location . ' </td>
                            <td>' . $row->date . ' </td>
                            <td>' . $row->startTime . ' </td>
                            <td>' . $row->endTime . ' </td>
                            <td>' . $row->status . '</td>
                            <td>
                            <span class="action_btn">
                             
                               <form method = "POST">
                               <input type="hidden" name="task_id" value="' . $row->id . '">
                               <button type="submit" class="btn" onClick="openPopup()">View</button>
                               </form>
                               </span>
                            </td>
                            </tr>';
                        }
                    } else {
                        echo '<tr><td colspan="5">No data available</td></tr>';
                    }
                    ?>

                    <div class="card1" id="card1">
                        <div class="box">
                            <div class="content">

                                <div class="paragraph">
                                    <label for="taskType">Task:</label>
                                    <input type="text" id="taskType" name="taskType" value="<?= $data['empTask'][0]->taskType ?>" readonly>

                                    <label for="location">Place:</label>
                                    <input type="text" id="location" name="location" value="<?= $data['empTask'][0]->location ?>" readonly>

                                    <label for="date">Date:</label>
                                    <input type="text" id="date" name="date" value="<?= $data['empTask'][0]->date ?>" readonly>

                                    <label for="startTime">Start Time:</label>
                                    <input type="text" id="startTime" name="startTime" value="<?= $data['empTask'][0]->startTime ?>" readonly>

                                    <label for="endTime">End Time:</label>
                                    <input type="text" id="endTime" name="endTime" value="<?= $data['empTask'][0]->endTime ?>" readonly>

                                    <label for="status">Status:</label>
                                    <input type="text" id="status" name="status" value="<?= $data['empTask'][0]->status ?>" readonly>
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

</body>
<script>
    function openPopup() {
        document.getElementById('card1').style.display = 'block';
        document.getElementById('overlay').style.display = 'block';
        event.preventDefault();
    };

    function closePopup() {
        document.getElementById('card1').style.display = 'none';
        document.getElementById('overlay').style.display = 'none';
    };

    function openPopupNew() {
        document.getElementById('card2').style.display = 'block';
        document.getElementById('overlay').style.display = 'block';
        event.preventDefault();
    };

    function closePopupNew() {
        document.getElementById('card2').style.display = 'none';
        document.getElementById('overlay').style.display = 'none';
    };
</script>

</html>