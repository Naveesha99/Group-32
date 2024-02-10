<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= ROOT ?>/assets/css/reservaSettings.css" rel="stylesheet">

    <title>Admin Panel</title>

</head>
<?php require_once 'reservaNavBar.php' ?>


<body class="dashboard">
    <div class="container">
        <!-- <div class="header">


            <?php //require_once 'navBar.php' ?>
        </div> -->


        <div class="content">
            <div id="settings-container">
                <header>
                    <!-- <h1>Settings Page</h1> -->
                </header>

                <form onsubmit="return validateFormSettings()">

                    <input type="file" id="photo" name="photo" accept="image/*" onchange="previewImage(this)">
                    <!-- <img id="preview" src="/images/profilePic.png" alt="Preview"> -->
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
                        <button type="submit">Save Settings</button>
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

            // Regular expression for a simple phone number validation
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
            // document.getElementById('login-btn').style.display='none';
        }
        if(session == 'true'){
            // document.getElementById('img-profile').style.display = 'none';
            document.getElementById('img-profile').style.display = 'block';
            document.getElementById('login-btn').style.display='none';
        }
        
        }
    </script>
</body>

</html>