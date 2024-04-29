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
      <form method="POST" class="create-task">
        <h1>Create Tasks</h1>
        <label for="taskType">Task</label>
        <?php if (!empty($errors['taskType'])) : ?>
          <span class="error">
            <?= '* ' . $errors['taskType'] ?>
          </span>
        <?php endif; ?>
        <input type="text" name="taskType">
        <label for="description">Description</label>
        <?php if (!empty($errors['description'])) : ?>
          <span class="error">
            <?= '* ' . $errors['description'] ?>
          </span>
        <?php endif; ?>
        <textarea name="description"></textarea>
        <label for="employeeType">Employee Type</label>
        <?php if (!empty($errors['employeeType'])) : ?>
          <span class="error">
            <?= '* ' . $errors['employeeType'] ?>
          </span>
        <?php endif; ?>
        <select name="employeeType">
          <?php
          foreach ($data['role'] as $row) {
            if ($row->jobTitle != 'Front Desk Officer' && $row->jobTitle != 'Content Writer') {
              echo "<option value='" . $row->jobTitle . "'>" . $row->jobTitle . "</option>";
            }
          }
          ?>
        </select>
        <br>
        <button class="btn-1">Add Task</button>
      </form>
    </div>
  </div>
</body>