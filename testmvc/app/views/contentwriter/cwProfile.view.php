<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="<?= ROOT ?>/assets/css/cwProfile.css">
      <title>Profile</title>
</head>
<?php require_once 'cwNaviBar.php' ?>
<?php include 'navBar.php' ?>

<body>
      <!-- Content -->
      <div class="container">
            <div class="carddiv">
                  <div class="card">
                        <img src="<?= ROOT ?>/assets/images/customer.jpeg" />
                        <div>
                              <h2>John Dias</h2>
                              <div class="details">
                                    <div class="infor"><b>Email</b> :nivo@gmail.com</div>
                                    <div class="infor"><b>Mobile Number</b> : 075-8963240</div>
                                    <!-- <div class="infor"><b>Experience</b> : <?php echo $coach[0]->experience; ?> year experience in coaching</div>
                                    <div class="infor"><b>Specialities</b> : <?php echo $coach[0]->specialty; ?></div>
                                    <div class="infor"><b>Certificate</b> : <?php echo $coach[0]->certificate; ?> cricket coach</div>
                                    <div class="infor"><b>Achivements</b> : <?php echo $coach[0]->achivements; ?></div> -->
                              </div>
                        </div>
                  </div>
            </div>
      </div>


</body>

</html>