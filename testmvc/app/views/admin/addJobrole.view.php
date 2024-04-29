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
                <?php if (!empty($errors['jobTitle'])) : ?>
                    <span class="error">
                        <?= '* ' . $errors['jobTitle'] ?>
                    </span>
                <?php endif; ?>
                <?php if (!empty($errors['added'])) : ?>
                    <span class="error">
                        <?= '* ' . $errors['added'] ?>
                    </span>
                <?php endif; ?>
                <input type="text" name="jobTitle">
                <label for="jobSummary">Job Summary</label>
                <?php if (!empty($errors['jobSummary'])) : ?>
                    <span class="error">
                        <?= '* ' . $errors['jobSummary'] ?>
                    </span>
                <?php endif; ?>
                <input type="text" name="jobSummary">
                <label for="time">Work Hours</label>
                <?php if (!empty($errors['startTime'])) : ?>
                        <span class="error">
                            <?= '* ' . $errors['startTime'] ?>
                        </span>
                    <?php endif; ?>
                    <?php if (!empty($errors['endTime'])) : ?>
                        <span class="error">
                            <?= '* ' . $errors['endTime'] ?>
                        </span>
                    <?php endif; ?>
                    <?php if (!empty($errors['before'])) : ?>
                        <span class="error">
                            <?= '* ' . $errors['before'] ?>
                        </span>
                    <?php endif; ?>
                <div class="work-hours">
                    
                    <input type="time" name="startTime">

                    <span class="separator">to</span>
                    
                    <input type="time" name="endTime">
                </div>
                <label for="salary">Basic Salary</label>
                <?php if (!empty($errors['salary'])) : ?>
                    <span class="error">
                        <?= '* ' . $errors['salary'] ?>
                    </span>
                <?php endif; ?>
                <?php if (!empty($errors['string'])) : ?>
                    <span class="error">
                        <?= '* ' . $errors['string'] ?>
                    </span>
                <?php endif; ?>
                <?php if (!empty($errors['negative'])) : ?>
                    <span class="error">
                        <?= '* ' . $errors['negative'] ?>
                    </span>
                <?php endif; ?></br>
                <input type="text" name="salary"><br>

                <button class="btn-1">Add Job</button>
            </form>
        </div>
    </div>
</body>

</html>