<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= ROOT ?>/assets/css/navBar.css">
  <script src="https://kit.fontawesome.com/8bff7d7f97.js" crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" href="/css/nav.css"> -->



  <title>Document</title>
</head>

<body>

  <div class="navBar">
    <div class="logo">
      <img src="<?= ROOT ?>/assets/images/Logo.png" alt="">
    </div>

    <div class="nav">
      <ul>
        <li><a href="<?= ROOT ?>/home">Home</a></li>
        <li><a href="<?= ROOT ?>/dramaPortal">Drama Portal</a></li>
        <li><a href="#">Drama</a></li>
        <li><a href="#">Theater</a></li>
        <li><a href="<?= ROOT ?>/logout" class="signup-button">Log Out</a></li>
      </ul>

      <div class="Profile">
        <?php
        $id = $_SESSION['USER']->id;
        if (!empty($_SESSION['PROFILE_IMAGE'])) {
          echo '<img src="' . ROOT . '/assets/images/Upload/profile' . $id . '.jpeg" onclick="toggleMenu()">';
        } else {
          echo '<img src="' . ROOT . '/assets/images/Upload/profiledefault.jpeg" onclick="toggleMenu()">';
        }
        ?>
      </div>
    </div>

    <div class="sub-menu-wrap" id="subMenu">
      <div class="sub-menu">
        <div class="user-info">
          <?php
          if (!empty($_SESSION['PROFILE_IMAGE'])) {
            echo '<img src="' . ROOT . '/assets/images/Upload/' . $_SESSION['PROFILE_IMAGE'] . '">';
          } else {
            echo '<img src="' . ROOT . '/assets/images/Upload/profiledefault.jpeg">';
          }
          ?>
          <h3><?php echo $_SESSION['USER']->fullname; ?></h3>
        </div>
        <hr>

        <a href="<?= ROOT ?>/employeeSetting" class="sub-menu-link">
          <i class="fa-solid fa-user"></i>
          <p>Profile</p>
          <span>></span>
        </a>
        <?php
        $ID = $_SESSION['USER']->id;

        echo '<a href="empEditProfile?id=' . $ID . '" class="sub-menu-link">';
        ?>
        <i class="fa-solid fa-wrench"></i>
        <p>Edit Profile</p>
        <span>></span>
        </a>

        <a href="<?= ROOT ?>/empEditPassword" class="sub-menu-link">
          <<i class="fa-solid fa-lock"></i>
          <p>Change Password</p>
          <span>></span>
        </a>




      </div>

    </div>



  </div>

  <script>
    let subMenu = document.getElementById("subMenu");

    function toggleMenu() {
      subMenu.classList.toggle("open-menu");
    }
  </script>

</body>

</html>