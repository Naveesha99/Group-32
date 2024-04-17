<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= ROOT ?>/assets/css/navBar.css">
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
        <li><a href="#">Drama Portal</a></li>
        <li><a href="#">Drama</a></li>
        <li><a href="#">Theater</a></li>
        <li><a href="<?= ROOT ?>/logout" class="signup-button">Log Out</a></li>
      </ul>

      <div class="Profile">
        <img src="<?= ROOT ?>/assets/images/upload/user2.jpeg" onclick="toggleMenu()">
      </div>
    </div>

    <div class="sub-menu-wrap" id="subMenu">
      <div class="sub-menu">
        <div class="user-info">
          <img src="<?= ROOT ?>/assets/images/upload/user2.jpeg">
          <h3><?php echo $_SESSION['USER']->username;?></h3>
        </div>
        <hr>

        <a href="#" class="sub-menu-link">
          <i class="fa-solid fa-user"></i>
          <p>Edit Profile</p>
          <span>></span>
        </a>

        <a href="<?=ROOT?>/employeeSetting" class="sub-menu-link">
          <i class="fa-solid fa-gear"></i>
          <p>Settings</p>
          <span>></span>
        </a>

      </div>

    </div>



  </div>

  <script>
    let subMenu = document.getElementById("subMenu");

    function toggleMenu(){
      subMenu.classList.toggle("open-menu");
    }
  </script>

</body>

</html>