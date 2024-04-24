<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?=ROOT?>/Upload/index" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="submit">UPLOAD</button>
    </form>

    
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/empEditProfile.css">
    <title>User Profile</title>
</head>

<?php require_once 'employeeSideBar.php' ?>
<?php include 'navBar.php' ?>


<!-- <body>
    <div class="container">
        <h1>User Profile</h1>
        <hr>
        <div class="profile">
            <div class="profile-photo">
                <img id="profileImage" src="<?=ROOT?>/assets/images/Upload/profiledefault.jpeg" alt="Profile Photo">
                <p class="profile-name">John Doe</p>
                <label for="profilePhotoInput" class="change-photo-button">Change Photo</label>
                <input type="file" id="profilePhotoInput" onchange="displayProfilePhoto(event)">
                
            </div>
            <div class="profile-details">
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" value="John Doe" disabled>
                <label for="email">Email:</label>
                <input type="email" id="email" value="john@example.com" disabled>
                <label for="bio">Bio:</label>
                <textarea id="bio" disabled>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</textarea>
            </div>
        </div>
    </div>

    <script>
        function displayProfilePhoto(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const profileImage = document.getElementById('profileImage');
                profileImage.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</body> -->

</html>
