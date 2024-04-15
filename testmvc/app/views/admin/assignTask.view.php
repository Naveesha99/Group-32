<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/assignTask.css">
    <title>Assign Task</title>
</head>

<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>
<script>
    function applyFilter() {
        var selectedDate = document.getElementById("inputDate").value;
        var url = "<?= ROOT ?>/assignTask?date=" + selectedDate;
        window.location.href = url;
    }
</script>

<body>
    <div class="container">
        <div class="Tasks">
            <div class="title">
                <h2>Tasks</h2>
                <a href="<?= ROOT ?>/employees" class="btn">View All</a>
                <form class="select-date" id="dateForm">
                    <input type="date" id="inputDate">
                    <button type="button" onclick="applyFilter()">Apply</button>
                </form>

            </div>
            <table>
                <tr>
                    <th>Task</th>
                    <th>Date</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Location</th>
                    <th>Status</th>
                    <!-- <td><a href="#" class="btn">View</a></td> -->
                </tr>
                <?php
                foreach ($data['task'] as $row) {
                    echo '<tr>
                                    <td>' . $row->taskType . '</td>
                                    <td>' . $row->date . '</td>
                                    <td>' . $row->startTime . '</td>
                                    <td>' . $row->endTime . '</td>
                                    <td>' . $row->location . '</td>
                                    <td>' . $row->status . '</td>
                                    <td><a href="assigntask?id=' . $row->id . '" class="btn">Assign</a></td>
                                    </tr>';
                }
                // show($data['selectedTask']);
                ?>

            </table>
        </div>


        <!-- <script>
            function checkInputs() {
                var inputs = document.getElementsByName('assignedEmp[]');
                var submitButton = document.querySelector('.btn-1');

                for (var i = 0; i < inputs.length; i++) {
                    if (inputs[i].value === '') {
                        submitButton.disabled = true;
                        return;
                    }
                }

                submitButton.disabled = false;
            }

            var assignedEmpInputs = document.getElementsByName('assignedEmp[]');
            for (var i = 0; i < assignedEmpInputs.length; i++) {
                assignedEmpInputs[i].addEventListener('input', checkInputs);
            }
        </script> -->

        <div class="assign-Task">
            <form method="POST">
                <h1>Assign Task</h1>
                <label for="id">Task ID</label>
                <input type="text" name="id" value="<?= $data['selectedTask'][0]->id ?>" readonly>
                <label for="taskType">Task</label>
                <input type="text" name="taskType" value="<?= $data['selectedTask'][0]->taskType ?>" readonly>
                <label for="date">Date</label>
                <input type="date" name="date" value="<?= $data['selectedTask'][0]->date ?>" readonly>
                <label for="startTime">Start Time</label>
                <input type="time" name="startTime" value="<?= $data['selectedTask'][0]->startTime ?>" readonly>
                <label for="endTime">end Time</label>
                <input type="time" name="endTime" value="<?= $data['selectedTask'][0]->endTime ?>" readonly>
                <label for="location">Location</label>
                <input type="text" name="location" value="<?= $data['selectedTask'][0]->location ?>" readonly>
                <label for="count">Employee count</label>
                <input type="number" name="count" value="<?= $data['selectedTask'][0]->count ?>" readonly>
                <?php
                for ($i = 1; $i <= $data['selectedTask'][0]->count; $i++) {
                    echo '<label for="assignedEmp">Employee ' . $i . ' </label>';
                    echo '<input type="text" name="assignedEmp[]" required>';
                }
                ?>
                <br>
                <button class="btn-1">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>