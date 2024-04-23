<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/addFacility.css">
    <title>Admin Employee</title>
</head>

<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body>
    <div class="container">
            <form method="POST" class="add-facility" onsubmit="return validateForm()" name="facilityForm" enctype="multipart/form-data">
                <h1>Add Facility</h1>
                <label for="name">Facility Name</label>
                <input type="text" name="name" id="name">
                
                <label for="icon">Icon</label>
                <input type="file" id="icon" name="icon" accept="image/*">

                <br>
                <button type="submit" class="btn-1" name="submit_facility">Submit</button>
            </form>
    </div>  
</body>

<script>
function validateForm() {
    var nameField = document.forms["facilityForm"]["name"].value;
    var iconField = document.forms["facilityForm"]["icon"].value;
    
    if (nameField.trim() === "") {
        alert("Facility Name must be filled out");
        return false;
    }
    
    if (iconField.trim() === "") {
        alert("Icon must be selected");
        return false;
    }
}
</script>
