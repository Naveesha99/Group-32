<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="<?= ROOT ?>/assets/css/cwProfile.css">
      <title>Content Writer Profile</title>
</head>
<?php require_once 'cwNaviBar.php' ?>
<?php include 'navBar.php' ?>

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


            <div class="profile-box">
                <div id="profilePhotoContainer">
                    <?php
                        
                        $profile_photo_name = $data['content_writer'][0]->username;

                        if (!empty($profile_photo_name)) {
                              echo '<img src="' . ROOT . '/assets/images/Upload' . $profile_photo_name . '" alt="Profile Photo">';
                          } else {
                              echo '<img src="' . ROOT . '/assets/images/Upload/profiledefault.jpeg" alt="Default Profile Photo">';
                          }
                        
                        ?>
                    
                </div>

                <input type="file" id="profilePhotoInput" onchange="displayProfilePhoto(event)">
            </div>

        </div>

                  <div class="form-right">

                        <!-- Personal Email -->
                        <label for="full_name">Employee Name:</label>
                        <input type="text" id="full_name" value="<?= $data['content_writer'][0]->username ?>" disabled />

                        <!-- NIC -->
                        <label for="email">Email:</label>
                        <input type="text" id="nic" value="<?= $data['content_writer'][0]->email ?>" disabled />

                        <!-- DOB -->
                        <label for="full_name">NIC:</label>
                        <input type="text" id="full_name" value="<?= $data['content_writer'][0]->nic ?>" disabled />



                  </div>

            </div>

            <script>
        // JavaScript function to display the selected profile photo
        function displayProfilePhoto(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const profilePhotoContainer = document.getElementById('profilePhotoContainer');
                profilePhotoContainer.innerHTML = '';
                const img = document.createElement('img');
                img.src = reader.result;
                img.style.width = '100%';
                img.style.height = '100%';
                img.style.objectFit = 'cover';
                profilePhotoContainer.appendChild(img);
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>


</body>

</html>