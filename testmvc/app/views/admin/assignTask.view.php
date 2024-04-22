<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/assignTask.css">
    <title>Assign Task</title>
</head>

<?php include 'adminSidebar.php'?>
<?php include 'navBar.php' ?>

<body>
    <div class="container">
        <div class="content">
            <div class="assign-task">
                <form method="POST">
                    <h1>Assign Task</h1>
                    <form>
                        <label for="taskType">Task</label>
                        <select name="taskType">
                            <?php
                            foreach ($data['task'] as $row) {
                                echo "<option value='" . $row->taskType . "'>" . $row->taskType . "</option>";
                            }
                            ?>
                        </select>

                        <label for="date">Date</label>
                        <input type="date" name="date">
                        <label for="startTime">Start Time</label>
                        <input type="time" name="startTime">
                        <label for="endTime">End Time</label>
                        <input type="time" name="endTime">
                        <button id="apply" class="btn">Apply</button>
                    </form>
                    <label for="assignEmployee">Assign Employee</label>
                    <select name="assignEmployee">
                        <?php
                        foreach ($data['available'] as $item) {
                            echo "<option value='" . $item . "'>" . $item . "</option>";
                        }
                        ?>
                    </select>
                    <label for="location">Location</label>
                    <input type="text" name="location">
                    <br>
                    <button class="btn-1">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('apply').addEventListener('click', function() {
            var taskType = document.querySelector('select[name="taskType"]').value;
            var date = document.querySelector('input[name="date"]').value;
            var startTime = document.querySelector('input[name="startTime"]').value;
            var endTime = document.querySelector('input[name="endTime"]').value;
            var assignEmployee = document.querySelector('select[name="assignEmployee"]').value;
            var location = document.querySelector('input[name="location"]').value;

            var data = {
                taskType: taskType,
                date: date,
                startTime: startTime,
                endTime: endTime,
                assignEmployee: assignEmployee,
                location: location
            }

            fetch('<?= ROOT ?>/assignTask', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Success:', data);
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
        });
    </script>
</body>

</html>