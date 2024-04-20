<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/cwEdit.css">
</head>

<body>
    <div class="container">

        <h1>Edit Employe </h1>

        <form method="POST" autocomplete="off" enctype="multipart/form-data">

            <label for="employee_name">Employee Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="image">Image</label>
            <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png" required><br><br>

            <button type="submit" name="submit">Submit</button>
        </form>
    </div>


</body>

</html>