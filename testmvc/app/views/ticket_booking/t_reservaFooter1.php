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


    .hero {
      width: 100%;
      min-height: 100vh;
      background: #eceaff;
      color: #525252;
    }




    .footer_container {
    max-width: 1170px;
    margin: auto;
}

.rowfooter {
    display: flex;
    flex-wrap: wrap;
}

ul {
    list-style: none;
}

.footer {
    background-color: #24262b;
    padding: 70px 0;
}


.rowfooter {
    display: flex;
    flex-wrap: wrap;
}

ul {
    list-style: none;
}

.footer {
    background-color: #24262b;
    padding: 70px 0;
}

.footer {
    background-color: #24262b;
    padding: 70px 0;
}

.footer-col {
    width: 22%;
    padding: 0 15px;
    text-decoration: none;
}   

.footer-col h4 {
    font-size: 18px;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 35px;
    font-weight: 500;
    position: relative;
    text-decoration: none;
}

.footer-col h4::before {
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    background-color: var(--green);
    height: 2px;
    box-sizing: border-box;
    width: 50px;
}

.footer-col ul li:not(:last-child) {
    margin-bottom: 10px;
}

.footer-col ul li a {
    font-size: 16px;
    text-transform: capitalize;
    color: #ffffff;
    text-decoration: none;
    font-weight: 300;
    color: #bbbbbb;
    display: block;
    transition: all .3s ease;
}

.footer-col ul li a:hover {
    color: #ffffff;
    padding-left: 8px;
}

@media (max-width: 767px) {
    .footer-col {
        width: 50%;
        margin-bottom: 30px;
    }
}

@media (max-width: 574px) {
    .footer-col {
        width: 100%;
    }
}

.footer-col .img{
    width: 150px;
    margin-left: -15px;
}





  </style>
</head>

<body>
<footer class="footer"> 
 <div class="footer_container"> 
  <div class="rowfooter"> 
   <div class="footer-col"> 
   <img src="<?= ROOT ?>/assets/images/Logo.png" class="logo">
 
   <!-- <img class="img" src="<?//php// echo URLROOT; ?>/img/signup/ecotrade.png" >  -->
    <h3>PUNCHI THEATRE</h3> 
   </div> 
   <div class="footer-col"> 
    <h4>PUNCHI THEATRE</h4> 
    <ul> 
     <li><a href="#">About us</a></li> 
     <li><a href="#">Our services</a></li> 
     <li><a href="#">Privacy Policy</a></li> 
     <li><a href="#">Green Mission </a></li> 
    </ul> 
   </div> 
   <div class="footer-col"> 
    <h4>Get Help</h4> 
    <ul> 
     <li><a href="#">FAQ</a></li> 
     <li><a href="#">Recycling </a></li> 
    </ul> 
   </div> 
   <div class="footer-col"> 
   <a href="<?=ROOT?>/cancel_ticket"><h4>CANCEL YOUR TICKETS</h4></a>
    <ul> 
     <li><a href="#"></a></li> 
    </ul> 
   </div> 
  </div> 
 </div> 
</footer> 
 
</body> 
</html>