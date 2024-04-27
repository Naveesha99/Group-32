
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="<?= ROOT ?>/assets/css/reservaSettings.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/cwEditProfile.css">


    <title>Admin Panel</title>

</head>
<!-- <?//php require_once 'reservaNavBar.php' ?> -->
<?php if (isset($_SESSION['USER'])) {
    require_once 'reservaNavBarAfter.php';
} else {
    require_once 'reservaNavBar.php';
} ?>

<!-- <body class="dashboard">
    <div class="container">


        <div class="content">
            <div id="settings-container">
                <header>
                </header>


                <form onsubmit="return validateFormSettings()">
                <?//php show($data); ?>

                    <input type="file" id="photo" name="photo" accept="image/*" onchange="previewImage(this)">
                    <img id="preview" src="<?= ROOT ?>/assets/images/profilePic.png" alt="Preview">

                    <label id="photo-label" for="photo">Upload Image</label>

                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>

                    <label for="address">Address:</label>
                    <input type="address" id="address" name="address" placeholder="Enter your Address" required>

                    <label for="contact">Contact Number:</label>
                    <input type="tel" id="contact" name="contact" placeholder="Enter your contact number">
                    <span id="contact-error"></span>

                    <label for="email">NIC:</label>
                    <input type="nic" id="nic" name="nic" placeholder="Enter your NIC" required>

                    <div class="btn2">
                        <button id="edit-profile" class="btn btn-primary">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function previewImage(input) {
            var preview = document.getElementById('preview');
            var file = input.files[0];
            var reader = new FileReader();

            reader.onload = function (e) {
                preview.src = e.target.result;
            };

            if (file) {
                reader.readAsDataURL(file);
            }
        }

        function validateFormSettings() {
            var contactInput = document.getElementById('contact');
            var contactError = document.getElementById('contact-error');

            var phoneRegex = /^\d{10}$/;

            if (!phoneRegex.test(contactInput.value)) {
                contactError.textContent = 'Please enter a valid 10-digit phone number.';
                return false;
            } else {
                contactError.textContent = '';
                return true;
            }
        }


        window.onload = function () {
        const urlSearchParams = new URLSearchParams(window.location.search);
        var session=urlSearchParams.get('loggedin');
        document.getElementById('img-profile').style.display = 'none';
        if(session == 'false'){
            document.getElementById('img-profile').style.display = 'none';
        }
        if(session == 'true'){
            document.getElementById('img-profile').style.display = 'block';
            document.getElementById('login-btn').style.display='none';
        }
        
        }

        document.getElementById('edit-profile').addEventListener('click', function() {
        window.location.href = 'reservaProfileEdit';
        });
    </script>
</body> -->



<div class="container">
        <h1>Edit profile</h1>
        <!-- <?php show($data); ?> -->
        <form method="post" action="reservaProfileEdit1">

            <input type="hidden" id="id" name="id" value="<?=$data['fromUser1'][0]->id?>" required>

            <label for="Full Name">Employee Name:</label>
            <input type="text" id="fullname" name="fullname" value="<?=$data['fromUser1'][0]->fullname?>" required>

            <label for="Contact Number">Employee Name:</label>
            <input type="text" id="mobile" name="mobile" value="<?=$data['fromReserva1'][0]->contactNumber?>" required>

            <!-- <label for="password">Password:</label>
            <input type="text" id="password" name="password" value="<?=$data['contentwriter'][0]->password?>" required> -->

            <button type="submit" name="submit">SUBMIT</button>

        </form>
    </div>



</html>
