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

            <!-- <div class="form-left">

</div> -->

            
            <div class="form-right">

                  <!-- Personal Email -->
                  <label for="full_name">Employee Name:</label>
                  <input type="text" id="full_name" value="<?= $data['content_writer'][0]->username ?>" disabled />

                  <!-- NIC -->
                  <label for="nic">Email:</label>
                  <input type="text" id="nic" value="<?= $data['content_writer'][0]->email ?>" disabled />

                  <!-- DOB -->
                  <label for="full_name">NIC:</label>
                  <input type="text" id="full_name" value="<?= $data['content_writer'][0]->nic ?>" disabled />

                  

            </div>

      </div>


</body>

</html>