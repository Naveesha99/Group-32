<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="<?= ROOT ?>/assets/css/employeeSetting.css">
      <title>Content Writer Profile</title>
</head>
<?php require_once 'employeeSideBar.php' ?>
<?php include 'navBar.php' ?>

<body>
      <div class="container">

            <h1 align="center">User Profile</h1>

            <hr>

            <div class="form-left">


                  <div class="profile-box">
                        <div id="profilePhotoContainer">

                              <img id="profileImage" src="<?= ROOT ?>/assets/images/Upload/profiledefault.jpeg" alt="Profile Photo">

                              <div class="profile-photo-edit-container" style="display: none;">
                                    <form method="post" autocomplete="off" enctype="multipart/form-data">
                                          <input type="file" id="profilePhotoInput" class="hidden" name="image" accept=".jpg, .jpeg, .png" required>
                                          <button type="submit" name="submit">Submit</button>
                                    </form>
                              </div>



                              <!-- <?php
                                    $empid = $data['emp'][0]->id;
                                    echo $empid;
                                    $profile_photo_name = "profile{$empid}.jpeg";
                                    echo $profile_photo_name;

                                    if (!empty($profile_photo_name)) {
                                          echo '<img src="' . ROOT . '/assets/images/Upload' . $profile_photo_name . '" alt="Profile Photo">';
                                    } else {
                                          echo '<img src="' . ROOT . '/assets/images/Upload/profiledefault.jpeg" alt="Default Profile Photo">';
                                    }





                                    $allowed_extensions = ['jpg', 'jpeg', 'png'];
                                    $profile_photo_name = '';

                                    foreach ($allowed_extensions as $extension) {
                                          $profile_photo_name = "profile{$empid}.{$extension}";
                                          echo $profile_photo_name;
                                          $profile_photo_path = ROOT . "/assets/images/Upload/{$profile_photo_name}";

                                          echo $profile_photo_path;

                                          if (file_exists($profile_photo_path)) {
                                                echo $profile_photo_path;
                                                echo '<img id="profileImage" src="'  . $profile_photo_path . '" alt="Profile Photo">';
                                                break;
                                          } else {
                                                $profile_photo_path = '';
                                          }
                                    }
                                    if (empty($profile_photo_name)) {
                                          echo '<img  id="profileImage" src="' . ROOT . '/assets/images/Upload/profiledefault.jpeg" alt="Default Profile Photo">';
                                    }

                                    ?>  -->

                              <h1 class="profile-name"><?= $data['emp'][0]->empName ?></h1>
                              <div class="button-container"> <!-- Wrap the button and input in a container -->
                                    <button id="editProfileBtn" class="btn-edit">Edit</button> <!-- Edit button -->
                                    
                              </div>

                        </div>

                        <!-- <input type="file" id="profilePhotoInput" onchange="displayProfilePhoto(event)"> -->
                  </div>

            </div>

            <div class="form-right">

                  <label for="full_name">Employee Name:</label>
                  <input type="text" id="full_name" value="<?= $data['emp'][0]->empName ?>" disabled />


                  <label for="email">Email:</label>
                  <input type="text" id="email" value="<?= $data['emp'][0]->empEmail ?>" disabled />


                  <label for="nic">NIC:</label>
                  <input type="text" id="nic" value="<?= $data['emp'][0]->empNIC ?>" disabled />


                  <label for="address">Date of Birth:</label>
                  <input type="text" id="address" value="<?= $data['emp'][0]->empDOB ?>" disabled />


                  <label for="address">Address:</label>
                  <input type="text" id="address" value="<?= $data['emp'][0]->empAddress ?>" disabled />


                  <label for="contact">Contact:</label>
                  <input type="text" id="contact" value="<?= $data['emp'][0]->empContact ?>" disabled />

                  <label for="emp_roll">Employee Roll:</label>
                  <input type="text" id="emp_role" value="<?= $data['emp'][0]->empRoll ?>" disabled />

                  <?php
                  $ID = $data['emp'][0]->id;
                  echo '<a href="empEditProfile?id=' . $ID . '" class="btn-update">Edit </a>';
                  // show($ID);
                  ?>
            </div>

      </div>

      <script>
            document.getElementById('editProfileBtn').addEventListener('click', function() {
                  var profilePhotoContainer = document.querySelector('.profile-photo-edit-container');
                  profilePhotoContainer.style.display = 'block'; // Display profile photo input
            });

            // document.getElementById('profilePhotoInput').addEventListener('change', function(event) {
            //       var file = event.target.files[0];
            //       if (file) {
            //             var reader = new FileReader();
            //             reader.onload = function(e) {
            //                   document.getElementById('profileImage').src = e.target.result;
            //             }
            //             reader.readAsDataURL(file);
            //       }
            // });
      </script>

</body>

</html>