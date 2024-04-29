<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/cwNavi.css">
    <script src="https://kit.fontawesome.com/8bff7d7f97.js" crossorigin="anonymous"></script>
    <title>Navigation Bar</title>
</head>

<body>
    <?php
    $page = substr($_SERVER['REQUEST_URI'], strrpos($_SERVER['REQUEST_URI'], "/") + 1);
    ?>
    <div class="sidebar">
        <div class="logo">
            <img src="<?= ROOT ?>/assets/images/Logo.png" alt="">
        </div>

        <div class="pages">
            <a class="<?=$page=="employeeDashboard" ? 'active' : '';?>"  href="<?= ROOT ?>/employeeDashboard"> <i class="fa-solid fa-house"></i> <span>Dashboard</span></a>
            <a class="<?=$page=="empTask" ? 'active' : '';?>" href="<?= ROOT ?>/empTask"> <i class="fa-solid fa-list-check"></i><span> Tasks</span></a>
            <a class="<?=$page=="employeeReq" ? 'active' : '';?>"  href="<?= ROOT ?>/employeeReq"> <i class="fa-solid fa-hand"></i> <span>Request</span></a>
            <a class="<?=$page=="empNotification" ? 'active' : '';?>" href="<?= ROOT ?>/empNotification"> <i class="fa-solid fa-bell"></i> <span>Notification</span></a>
            <!-- <a href="<?= ROOT ?>/employeeSetting"> <i class="fa-solid fa-user"></i> <span>Profile</span></a> -->

        </div>


    </div>
</body>