<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= ROOT ?>/assets/css/createTask.css">
  <title>Admin Employee</title>
</head>

<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body>
  <div class="container">
    <div class="content">
      <form action="" class="create-task">
        <h1>Create Daily Tasks</h1>
        <label for="taskType">Task Type</label>
        <input type="text" name="taskType">
        <label for="date">Date</label>
        <input type="date" name="date">
        <label for="time">Time</label>
        <input type="time" name="time">
        <label for="location">Location</label>
        <input type="text" name="location">
        <label for="count">Employee count</label>
        <input type="number" name="count">
        <!-- <label for="empname">Employee Name</label>
                <input type="text" name="empty" placeholder="Empty">                 -->
                <br>
        <button class="btn" type="submit">Add Task</button>
      </form>
    </div>
  </div>
</body>