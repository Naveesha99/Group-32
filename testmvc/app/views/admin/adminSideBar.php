<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/adminSideBar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Document</title>
</head>
<body>
<?php
$page = substr($_SERVER['REQUEST_URI'], strrpos($_SERVER['REQUEST_URI'], "/") + 1);
?>    

<div class="sidebar">

    <a class="<?= $page == "adminDashboard"?'active':''; ?>" href="<?= ROOT ?>/adminDashboard" > <i class="fa-solid fa-house"></i> <span>Dashboard</span></a>
    <a class="<?= $page == "adminDrama"?'active':''; ?>" href="<?= ROOT ?>/adminDrama"> <i class="fa-solid fa-masks-theater"></i><span> Drama</span></a>
    <a class="<?= $page == "adminEmployee"?'active':''; ?>" href="<?= ROOT ?>/adminEmployee"> <i class="fa-solid fa-user"></i> <span>Employee</span></a>
    <a class="<?= $page == "adminJobTask"?'active':''; ?>" href="<?= ROOT ?>/adminTask"> <i class="fa solid fa-tasks"></i> <span>Task</span></a>
    <!-- <a href="<?= ROOT ?>/adminTheater"> <i class="fa-solid fa-panorama"></i> <span>Theater</span></a> -->
    <a class="<?= $page == "adminFacilities"?'active':''; ?>" href="<?= ROOT ?>/adminFacilities"> <i class="fa-solid fa-flag"></i> <span>Facilities</span></a>
    <a class="<?= $page == "adminRequest"?'active':''; ?>" href="<?= ROOT ?>/adminRequest"> <i class="fa-solid fa-hand"></i> <span>Request</span></a>
    <a class="<?= $page == "adminReport"?'active':''; ?>" href="<?= ROOT ?>/adminReport"> <i class="fa-solid fa-flag"></i> <span>Report</span></a>
</div>
</body>
</html>