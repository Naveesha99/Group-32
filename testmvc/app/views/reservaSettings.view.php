<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="<?= ROOT ?>/assets/css/reservaSettings.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/cwProfile.css">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/new.css">


    <title>Admin Panel</title>

</head>
<!-- <?//php require_once 'reservaNavBar.php' ?> -->
<?php if (isset($_SESSION['USER'])) {
    require_once 'reservaNavBarAfter.php';
} else {
    require_once 'reservaNavBar.php';
} ?>

<!-- 
<body class="dashboard">
    <div class="container">
        


        <div class="content">
            <div id="settings-container">
                <header>
                </header>
                <form onsubmit="return validateFormSettings()">

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
                        <button id="edit-profile" class="btn btn-primary">Edit Profile</button>
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

        document.getElementById('edit-profile').addEventListener('click', function() {
        window.location.href = 'reservaProfileEdit';
        });
    </script>
</body> -->





<body>

      <div class="container">

            <h1 align="center">User Profile</h1>

            <hr>

            <div class="form-left">


                  <div class="profile-box">
                        <div id="profilePhotoContainer">
                        <!-- <?php show($data); ?> -->

                               <?php
                              if ($data['fromReserva1'] && (is_array($data['fromReserva1']) || is_object($data['fromReserva1']))) {
                                   $reservaid = $data['fromUser1'][0]->id;
                                //    echo $reservaid;

                                   $profile_photo_name = $data['fromReserva1'][0]->images;
                                   // // $profile_photo_name;
                                    $profile_photo_path = ROOT . "/assets/images/Upload/{$profile_photo_name}";

                                   echo '<img id="profileImage" src="'  . $profile_photo_path . '" alt="Profile Photo">';
                             } else {
                                   echo '<img  id="profileImage" src="' . ROOT . '/assets/images/Upload/profiledefault.jpeg" alt="Default Profile Photo">';
                             }

                              ?> 

                              <h1 class="profile-name"><?= $data['fromUser1'][0]->fullname ?></h1>
                              <div class="button-container"> <!-- Wrap the button and input in a container -->
                                    <button id="editProfileBtn" class="btn-edit">Edit</button> <!-- Edit button -->

                              </div>
                              <div class="profile-photo-edit-container" style="display: none;">

<!-- 

                              <div class="modal">
  <div class="modal-header">
    <div class="modal-logo">
      <span class="logo-circle">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          width="25"
          height="25"
          viewBox="0 0 512 419.116"
        >
          <defs>
            <clipPath id="clip-folder-new">
              <rect width="512" height="419.116"></rect>
            </clipPath>
          </defs>
          <g id="folder-new" clip-path="url(#clip-folder-new)">
            <path
              id="Union_1"
              data-name="Union 1"
              d="M16.991,419.116A16.989,16.989,0,0,1,0,402.125V16.991A16.989,16.989,0,0,1,16.991,0H146.124a17,17,0,0,1,10.342,3.513L227.217,57.77H437.805A16.989,16.989,0,0,1,454.8,74.761v53.244h40.213A16.992,16.992,0,0,1,511.6,148.657L454.966,405.222a17,17,0,0,1-16.6,13.332H410.053v.562ZM63.06,384.573H424.722L473.86,161.988H112.2Z"
              fill="var(--c-action-primary)"
              stroke=""
              stroke-width="1"
            ></path>
          </g>
        </svg>
      </span>
    </div>
    <button class="btn-close">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="24"
        height="24"
        viewBox="0 0 24 24"
      >
        <path fill="none" d="M0 0h24v24H0V0z"></path>
        <path
          d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"
          fill="var(--c-text-secondary)"
        ></path>
      </svg>
    </button>
  </div>
  <div class="modal-body">
    <p class="modal-title">Upload a file</p>
    <p class="modal-description">Attach the file below</p>
    <button class="upload-area">
      <span class="upload-area-icon">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          width="35"
          height="35"
          viewBox="0 0 340.531 419.116"
        >
          <g id="files-new" clip-path="url(#clip-files-new)">
            <path
              id="Union_2"
              data-name="Union 2"
              d="M-2904.708-8.885A39.292,39.292,0,0,1-2944-48.177V-388.708A39.292,39.292,0,0,1-2904.708-428h209.558a13.1,13.1,0,0,1,9.3,3.8l78.584,78.584a13.1,13.1,0,0,1,3.8,9.3V-48.177a39.292,39.292,0,0,1-39.292,39.292Zm-13.1-379.823V-48.177a13.1,13.1,0,0,0,13.1,13.1h261.947a13.1,13.1,0,0,0,13.1-13.1V-323.221h-52.39a26.2,26.2,0,0,1-26.194-26.195v-52.39h-196.46A13.1,13.1,0,0,0-2917.805-388.708Zm146.5,241.621a14.269,14.269,0,0,1-7.883-12.758v-19.113h-68.841c-7.869,0-7.87-47.619,0-47.619h68.842v-18.8a14.271,14.271,0,0,1,7.882-12.758,14.239,14.239,0,0,1,14.925,1.354l57.019,42.764c.242.185.328.485.555.671a13.9,13.9,0,0,1,2.751,3.292,14.57,14.57,0,0,1,.984,1.454,14.114,14.114,0,0,1,1.411,5.987,14.006,14.006,0,0,1-1.411,5.973,14.653,14.653,0,0,1-.984,1.468,13.9,13.9,0,0,1-2.751,3.293c-.228.2-.313.485-.555.671l-57.019,42.764a14.26,14.26,0,0,1-8.558,2.847A14.326,14.326,0,0,1-2771.3-147.087Z"
              transform="translate(2944 428)"
              fill="var(--c-action-primary)"
            ></path>
          </g>
        </svg>
      </span>
      <span class="upload-area-title">Drag file(s) here to upload.</span>
      <span class="upload-area-description">
        Alternatively, you can select a file by <br /><strong
          >clicking here</strong
        >
      </span>
    </button>
  </div>
  <div class="modal-footer">
    <button class="btn-secondary">Cancel</button>
    <button class="btn-primary">Upload File</button>
  </div>
</div> -->








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
                  <input type="text" id="full_name" value="<?= $data['fromUser1'][0]->fullname ?>" disabled />

                  <label for="email">Email:</label>
                  <input type="text" id="email" value="<?= $data['fromUser1'][0]->email ?>" disabled />


                  <label for="nic">NIC:</label>
                  <input type="text" id="nic" value="<?= $data['fromReserva1'][0]->nic ?>" disabled />


                  <!-- <label for="address">Date of Birth:</label>
                  <input type="text" id="address" value="<?= $data['content_writer'][0]->empDOB ?>" disabled /> -->


                  <!-- <label for="address">Address:</label>
                  <input type="text" id="address" value="<?= $data['fromReserva1'][0]->contactNumber ?>" disabled /> -->


                  <label for="contact">Contact:</label>
                  <input type="text" id="contact" value="<?= $data['fromReserva1'][0]->contactNumber ?>" disabled />
<!-- 
                  <label for="emp_roll">Employee Roll:</label>
                  <input type="text" id="emp_role" value="<?= $data['content_writer'][0]->empRoll ?>" disabled /> -->




                  <form id="hiddenForm" method="post" action="reservaprofileedit">
                        <!-- Hidden input field to pass the user ID -->
                        <input type="hidden" name="id" value="<?= $data['fromUser1'][0]->id ?>">
                        <button type="submit" name="submitData" id="submitData">Edit Details</button>
                    </form>

                  <?php
                //   $ID = $data['fromUser1'][0]->id;
                //   echo '<a href="reservaProfileEdit?id=' . $ID . '" class="btn-update">Edit </a>';
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