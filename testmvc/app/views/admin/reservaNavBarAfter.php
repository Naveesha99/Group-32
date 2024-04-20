<!DOCTYPE html>
<!-- Creadted by Coding Pakistan Youtube Channel -->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> navUser</title>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Catamaran:400,700');

    :root {
      --primary-color: #5c48ee;
      --primary-color-dark: #0f1e6a;
      --secondary-color: #f9fafe;
      --text-color: #333333;
      --white: #ffffff;
      --max-width: 1200px;
    }

    body {
      overflow-x: hidden;
      /* font-family: "Poppins", sans-serif; */
      /* background-color: var(--secondary-color); */

      /* background: #dfc2f2; */
      background-image: linear-gradient(to right, #ffffb3, #ffe6e6);
      background-attachment: fixed;
      background-size: cover;
    }


    * {
      margin: 0;
      padding: 0;
      font-family: catamaran;
      box-sizing: border-box;
    }

    /*.hero {
      width: 100%;
      min-height: 100vh;
      background: #eceaff;
      color: #525252;
    }*/

    nav {
      /* background: black; */
      width: 100%;
      padding: 10px 5%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      /* height: 50px; */
      /* position: relative; */
      top: 0;
      position: fixed;
      z-index: 1000;
      /* background: rgba(0, 0, 0, 0.2); Black see-through */

    }

    .logo {
      width: 50px;
      height: 30px;
      /* color: white; */
    }

    .user-pic {
      width: 30px;
      border-radius: 50%;
      cursor: pointer;
      margin-left: 10px;
      display: block;
    }

    nav ul {
      width: 100%;
      text-align: right;
      text-align: center;
    }

    nav ul li {
      display: inline-block;
      list-style: none;
      margin: 2px 5px;
    }

    nav ul li a {
      /* color: white; */
      color: black;
      text-decoration: none;
      font-size: 13px;
      font-weight: 700;
    }

    nav ul li a:hover {
      color: yellow;
    }
/* 
    img{
      display: block;
    } */
    .sub-menu-wrap {
      position: absolute;
      top: 100%;
      right: 1%;
      width: 200px;
      max-height: 0px;
      overflow: hidden;
      transition: max-height 0.5s;
      z-index: 100;

    }

    .sub-menu-wrap.open-menu {
      max-height: 400px;
    }

    .sub-menu {
      background: white;
      padding: 10px;
      margin: 10px;
    }

    .user-info {
      display: flex;
      align-items: center;
    }

    .user-info h3 {
      font-weight: bold;
    }

    .user-info img {
      width: 60px;
      border-radius: 50%;
      margin-right: 15px;
    }

    .sub-menu hr {
      border: 0;
      height: 2px;
      width: 90%;
      background: #ccc;
      margin: 15px 0 10px;
    }

    .sub-menu-link {
      display: flex;
      align-items: center;
      text-decoration: none;
      color: #525252;
      margin: 5px 0;
    }

    .sub-menu-link p {
      width: 100%;
      font-size: smaller;
      font-weight: 700;
    }

    .sub-menu-link img {
      width: 30px;
      background: #e5e5e5;
      border-radius: 50%;
      padding: 8px;
      margin-right: 15px;
    }

    .sub-menu-link span {
      font-size: 22px;
      transition: transform 0.5s;
    }

    .sub-menu-link:hover span {
      transform: translate(5px);
    }

    .sub-menu-link:hover p {
      font-weight: 600;
    }

    #login-btn {
      background-color: #FA7436;
      color: #ffffff;
      padding: 5px 8px;
      border-radius: 4px;
      border: none;
    }

    #login-btn:hover {
      background-color: #7B0303;
      color: #ffffff;
    }
  </style>
</head>

<body>


  <!-- <div class="hero"> -->
  <nav>
    <!-- <h2 class="logo">Coding Pakistan</h2> -->
    <img src="<?= ROOT ?>/assets/images/Logo.png" class="logo">
    <ul>
      <li> <a href="#"> HOME </a></li>
      <li> <a href="#"> TICKETS </a></li>
      <li> <a href="<?=ROOT?>/reservaHall"> HALLS </a></li>
      <li> <a href="#"> BLOGS </a></li>
    </ul>
    <!-- <button class="login-btn" id="login-btn" onclick="redirectToLoginPage()">LOGIN</button> -->
    <img src="<?= ROOT ?>/assets/images/profilePic.png" class="user-pic" onclick="toggleMenu()" id="img-profile">

    <div class="sub-menu-wrap" id="subMenu">
      <div class="sub-menu">
        <div class="user-info">
          <img src="<?= ROOT ?>/assets/images/profilePic.png">
          <!-- <h3> Ahmed Khan </h3> -->
          <h3>

          <?php 
          if (isset($_SESSION['USER'])) {
            echo ucfirst($_SESSION['USER']->username); 
          } else {
            show('No session');
          }
          ?>



          </h3>
        </div>
        <hr>

        <!-- <a href="reservaHall_1" class="sub-menu-link">
            <img src="<?= ROOT ?>/assets/images/theatre.png">
            <p>Hall Request</p>
            <span> > </span>
          </a> -->

        <a href="reservaSentReq" class="sub-menu-link">
          <img src="<?= ROOT ?>/assets/images/request.png">
          <p onclick="reservaSentreqPg()">Sent Request</p>
          <span> > </span>
        </a>

        <a href="reservaNotifications" class="sub-menu-link">
          <img src="<?= ROOT ?>/assets/images/notifications.png">
          <p onclick="reservaNotificationPg()">Notifications</p>
          <span> > </span>
        </a>

        <a href="reservaSettings" class="sub-menu-link">
          <img src="<?= ROOT ?>/assets/images/setting.png">
          <p onclick="reservaSettingsPg()">Settings</p>
          <span> > </span>
        </a>


        <a href="http://localhost/Group-32/testmvc/public/logout" class="sub-menu-link">
        <!-- <a href="http://localhost/Group-32/testmvc/public/logout" class="sub-menu-link">Log Out</a> -->
          <img src="<?= ROOT ?>/assets/images/logout.png">
          <p>Logout</p>
          <span> > </span>
        </a>

      </div>
    </div>

  </nav>
  <!-- </div> -->

  <script>
    let subMenu = document.getElementById("subMenu");

    // window.onload = function() {
      // const urlSearchParams = new URLSearchParams(window.location.search);
      // var session = urlSearchParams.get('loggedin');

      // if(session==null){
      //   document.getElementById('img-profile').style.display = 'none';
      //   document.getElementById('login-btn').style.display='block';

      // }
      // alert('fromnavbar' + session);

    // }

    window.onload = function() {
      console.log('from navbar');
    // Check if the user is logged in by accessing session data
    // var session = '<?php //echo isset($_SESSION['USER']) ? "true" : "false"; ?>';
    // <?php //if (isset($_SESSION['USER'])): ?>
    //   console.log('<?php //echo $_SESSION['USER']->username; ?>');
    // <?php //endif; ?>

    // If the session is not set, hide the profile image and display the login button
    //if (session === "false") {
        // document.getElementById('img-profile').style.display = 'none';
        // document.getElementById('login-btn').style.display = 'block';
    // }
}

window.onload = function() {
  document.getElementById('img-profile').style.display = 'block';
}


    function toggleMenu() {
      subMenu.classList.toggle("open-menu");
    }

    // Function to hide the sub-menu
    function hideSubMenu() {
      // subMenu.classList.remove("open-menu");
    }

    // Add event listeners to each menu item
    // document.querySelectorAll('nav ul li a').forEach(function(item) {
    //   item.addEventListener('click', hideSubMenu);
    // });

    // Add event listener to the document to hide the sub-menu on outside click
    document.addEventListener('click', function(event) {
      const isClickInside = subMenu.contains(event.target) || document.querySelector('.user-pic').contains(event.target);

      if (!isClickInside) {
        hideSubMenu();
      }
    });

    function redirectToLoginPage() {
      // Redirect to the reservalogin page
      window.location.href = 'reservaLogin';
    }

    function reservaSentreqPg() {
      event.preventDefault();

      window.location.href = 'reservaSentReq?loggedin=true';
    }

    function reservaNotificationPg() {
      event.preventDefault();

      window.location.href = 'reservaNotifications?loggedin=true';

    }

    function reservaSettingsPg() {
      event.preventDefault();

      // window.location.href = 'reservaSettings?loggedin=true';
      window.location.href = 'reservaSettings?loggedin=true';
    }
  </script>
</body>

</html>