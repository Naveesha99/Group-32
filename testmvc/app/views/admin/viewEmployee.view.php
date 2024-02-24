<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/viewEmployee.css">
    <title>Employee View</title>
</head>

<body>
    <style>
        .profile-box {
            position: relative;
            width: 300px;
            height: 400px;
            overflow: hidden;
            align-items: center;
        }

        #profilePhotoContainer {
            width: 100%;
            height: 100%;
        }

        #profilePhotoContainer img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
    <!-- end of styling are -->

    <!-- Page content -->

    <hr>

    <div class="container">

        <h1 align="center">User Profile</h1>

        <hr>

        <div class="form-left">

            <!-- <div align="center">
            <div style="font-size: 24px; margin-bottom: 10px;"><b>
                    <?php echo $data['user']->first_name . ' ' . $data['user']->last_name; ?>
                </b></div>
            <div style="font-size: 18px; margin-bottom: 10px;">
                <?php echo $data['user']->identification_code; ?>
            </div>
            <div style="font-size: 18px; margin-bottom: 10px;">
                <?php echo $data['user']->role_name; ?>
            </div>

            <div class="profile-box">
                <div id="profilePhotoContainer">
                    <?php
                    // Creating profile photo name
                    $profile_photo_name = str_replace("/", "-", $data['user']->identification_code);
                    ?>
                    <img src="<?php echo ROOT; ?>/img/profile_pictures/<?php echo $profile_photo_name; ?>.jpg"
                        alt="">
                </div>
                <input type="file" id="profilePhotoInput" onchange="displayProfilePhoto(event)">
            </div>

        </div> -->

        </div>
        <div class="form-right">

            <!-- Personal Email -->
            <label for="full_name">Employee Name:</label>
            <input type="text" id="full_name" value="<?= $data['employee'][0]->empName ?>" disabled />

            <!-- NIC -->
            <label for="nic">Email:</label>
            <input type="text" id="nic" value="<?= $data['employee'][0]->empEmail ?>" disabled />

            <!-- DOB -->
            <label for="full_name">NIC:</label>
            <input type="text" id="full_name" value="<?= $data['employee'][0]->empNIC ?>" disabled />

            <!-- Address -->
            <label for="address">Date of Birth:</label>
            <input type="text" id="address" value="<?= $data['employee'][0]->empDOB ?>" disabled />

            <!-- Contact No -->
            <label for="contact_no">Address:</label>
            <input type="text" id="contact_no" value="<?= $data['employee'][0]->empAddress ?>" disabled />

            <!-- Hired Date -->
            <label for="hired_date">Contact:</label>
            <input type="text" id="hired_date" value="<?= $data['employee'][0]->empContact ?>" disabled />

            <label for="hired_date">Employee Roll:</label>
            <input type="text" id="hired_date" value="<?= $data['employee'][0]->empRoll ?>" disabled />

        </div>

    </div>
</body>

</html>