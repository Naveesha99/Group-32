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

      <div class="container">

            <h1 align="center">User Profile</h1>

            <hr>

            <div class="form-left">


                  <div class="profile-box">
                        <div id="profilePhotoContainer">
                              <?php
                              if ($data['profile'] && (is_array($data['profile']) || is_object($data['profile']))) {
                                    $empid = $data['profile'][0]->id;
                                    // echo $empid;

                                    $profile_photo_name = $data['profile'][0]->images;
                                    // $profile_photo_name;
                                    $profile_photo_path = ROOT . "/assets/images/Upload/{$profile_photo_name}";

                                    echo '<img id="profileImage" src="'  . $profile_photo_path . '" alt="Profile Photo">';
                              } else {
                                    echo '<img  id="profileImage" src="' . ROOT . '/assets/images/Upload/profiledefault.jpeg" alt="Default Profile Photo">';
                              }

                              ?>

                              <h1 class="profile-name"><?= $data['content_writer'][0]->username ?></h1>
                              <div class="button-container"> <!-- Wrap the button and input in a container -->
                                    <button id="editProfileBtn" class="btn-edit">Edit</button> <!-- Edit button -->

                              </div>
                              <div class="profile-photo-edit-container" style="display: none;">
                                    <form method="post" autocomplete="off" enctype="multipart/form-data">
                                          <input type="file" id="profilePhotoInput" class="hidden" name="image" accept=".jpg, .jpeg, .png" required>
                                          <button type="submit" name="submit">Submit</button>
                                    </form>
                              </div>

                        </div>

                        <!-- <input type="file" id="profilePhotoInput" onchange="displayProfilePhoto(event)"> -->
                  </div>

            </div>

            <div class="form-right">

                  <!-- Personal Email -->
                  <label for="full_name">Employee Name:</label>
                  <input type="text" id="full_name" value="<?= $data['content_writer'][0]->username ?>" disabled />

                  <!-- NIC -->
                  <label for="email">Email:</label>
                  <input type="text" id="email" value="<?= $data['content_writer'][0]->email ?>" disabled />

                  <!-- DOB -->
                  <label for="full_name">NIC:</label>
                  <input type="text" id="nic" value="<?= $data['content_writer'][0]->nic ?>" disabled />

                  <?php
                  $ID = $data['content_writer'][0]->id;
                  echo '<a href="cwEditProfile?id=' . $ID . '" class="btn-update">Edit </a>';
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