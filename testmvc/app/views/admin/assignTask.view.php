<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/assignTask.css">
    <title>Assign Task</title>
</head>

<?php include 'adminSidebar.php'?>
<?php include 'navBar.php'?>

<body>
    <div class="container">
        <div class="content">
            <div class="assign-task">
                <form method="POST">
                    <h1>Assign Task</h1>
                    <label for="taskType">Task</label>
                    <select name="taskType">
                        <?php
                        foreach ($data['task'] as $row) {
                            echo "<option value='" . $row->taskType . "'>" . $row->taskType . "</option>";
                        }
                        ?>
                    </select>

                    <label for="date">Date</label>
                    <input type="date" name="date" value="<?= set_value('date')?>">
                    <label for="startTime">Start Time</label>
                    <input type="time" name="startTime" value="<?= set_value('startTime')?>">
                    <label for="endTime">End Time</label>
                    <input type="time" name="endTime" value="<?= set_value('endTime')?>">
                    <button name="check" class="btn">Check Available Employees</button>
                </form>
                <form method="POST">
                    <input type="hidden" name="taskType" value="<?= $data['temp1']['taskType'] ?>">
                    <input type="hidden" name="date" value="<?= $data['temp1']['date'] ?>">
                    <input type="hidden" name="startTime" value="<?= $data['temp1']['startTime'] ?>">
                    <input type="hidden" name="endTime" value="<?= $data['temp1']['endTime'] ?>">
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
                    <button name="submit" class="btn-1">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>