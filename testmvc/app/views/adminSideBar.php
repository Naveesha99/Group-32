<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/adminSideBar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Document</title>
</head>


<div class="side-menu">
    <div class="brand-name">
        <img src="<?= ROOT ?>/assets/images/Logo.png" id="logo">

    </div>
    <ul>
        <a href="<?=ROOT?>/admindashboard">
            <li> <i class="fa-solid fa-gauge"></i>  &nbsp; <span>Dashboard</span> </li>
        </a>
        <a href="<?=ROOT?>/admindrama">
            <li><i class="fa-solid fa-masks-theater"></i>&nbsp; <span>Drama</span> </li>
        </a>
        <a href="<?=ROOT?>/adminemployee">
            <li><i class="fa-solid fa-user"></i> &nbsp; <span>Employee</span> </li>
        </a>
        <a href="<?=ROOT?>/admindrama">
            <li><i class="fa-solid fa-panorama"></i>&nbsp; <span>Theater</span> </li>
        </a>
        <a href="<?=ROOT?>/adminrequests">
            <li><i class="fa-solid fa-hand"></i>&nbsp; <span>Request</span> </li>
        </a>
        <a href="<?=ROOT?>/adminreports">
            <li><i class="fa-solid fa-flag"></i>&nbsp; <span>Reports</span> </li>
        </a>
    </ul>
</div>

</html>