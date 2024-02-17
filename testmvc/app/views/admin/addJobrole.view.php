<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/addJobrole.css">
    <title>Add Job Role</title>
</head>

<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body>
    <div class="container">
        <div class="content">
            <form method="POST" class="add-job">
                <h1>Create Job role</h1>
                <label for="jobTitle">Job Title</label>
                <input type="text" name="jobTitle">
                <label for="jobSummary">Job Summary</Summary></label>
                <input type="text" name="jobSummary">
                <label for="time">Work Hours</label>
                <div class="work-hours">
                    <input type="time" name="startTime">
                    <span class="separator">to</span>
                    <input type="time" name="endTime">
                </div>
                <label for="salary">Basic Salary</label>
                <input type="text" name="salary"><br>

                <button class="btn-1">Add Job</button>
            </form>
        </div>
    </div>
</body>

</html>