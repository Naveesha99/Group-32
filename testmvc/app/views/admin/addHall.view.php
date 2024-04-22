<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/addEmployee.css">

    <title>Admin Employee</title>
</head>

<style>
    .checkbox-group {
    font-weight: 400;
    margin-right: 10px;
    /* padding: none; */
    width: 100%;
    white-space: nowrap;
}

.checkbox-group input[type="checkbox"], .checkbox-group label{
    /* vertical-align: middle; */
    /* margin-right: 10px; */
    margin-bottom: 0px;
    width: 10px;
}

.checkbox-group input[type="checkbox"] {
    display: inline-block;
}

.container .add-employee textarea {
    display: inline-block;
    width: 70%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

</style>

<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body>
    <div class="container">
            <form method="POST" class="add-employee" onsubmit="return validateForm()" name="hallForm" enctype="multipart/form-data">
                <h1>Add Hall</h1>
                <label for="name">Hall Number</label>
                <input type="text" name="hallno" id="hallno">

                <label for="amountOneHour">Amount</label>
                <input type="number" name="amountOneHour" id="amountOneHour">

                <label for="headCount">Head Count</label>
                <input type="number" name="headCount" id="headCount">
                
                <label for="image">Image</label>
                <input type="file" id="image" name="image" accept="image/*">

                <label for="content" >Content</label>
                <!-- <input type="text" id="content" name="content"> -->
                <textarea rows="10" id="content" name="content"></textarea> 

                <label for="status">Status</label>
                <select name="status" id="status">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
                


            <div class="checkbox-group" id="days">
                <label for="facilities">Facilities</label>
                    <?php if (is_array($data['facility'])): ?>
                        <?php foreach ($data['facility'] as $facility): ?>
                            <label class="checkbox">
                                <input type="checkbox" name="facility[]" value="<?= $facility->name ?>">
                                <?= $facility->name ?>
                            </label>
                        <?php endforeach; ?>
                    <?php endif; ?>
            </div>
           
                <button type="submit" class="btn-1" name="submit_hall">Submit</button>
            </form>
    </div>
</body> 

<!-- <body>
    <div class="container">
            <form method="POST" class="add-facility" onsubmit="return validateForm()" name="facilityForm">
                <h1>Add Facility</h1>
                <label for="name">Facility Name</label>
                <input type="text" name="name">
                
                <label for="icon">Icon</label>
                <input type="file" id="icon" name="icon" accept="image/*">

                <br>
                <button type="submit" class="btn-1" name="submit_facility">Submit</button>
            </form>
    </div>
</body> -->
<script>
function validateForm() {
    var nameField = document.forms["hallForm"]["name"].value;
    // var amountField = document.forms["hallForm"]["amountOneHour"].value;
    // var hcountField = document.forms["hallForm"]["headcount"].value;
    // var imageField = document.forms["hallForm"]["image"].value;
    // var contentField = document.forms["hallForm"]["content"].value;
    // var statusField = document.forms["status"]["name"].value;

    
    if (nameField.trim() === "") {
        alert("Facility Name must be filled out");
        return false;
    }
    
    // if (amountField.trim() === "") {
    //     alert("Icon must be selected");
    //     return false;
    // }
    // if (hcountField.trim() === "") {
    //     alert("Icon must be selected");
    //     return false;
    // }
    // if (imageField.trim() === "") {
    //     alert("Icon must be selected");
    //     return false;
    // }
    // if (contentField.trim() === "") {
    //     alert("Icon must be selected");
    //     return false;
    // }
    // if (statusField.trim() === "") {
    //     alert("Icon must be selected");
    //     return false;
    // }
}
</script>
