<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/adminSidebar.css">
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
            <a class="<?= $page == "adminDashboard" ? 'active' : ''; ?>" href="<?= ROOT ?>/adminDashboard"> <i class="fa-solid fa-house"></i> <span>Dashboard</span></a>
            <a class="<?= $page == "adminDrama" ? 'active' : ''; ?>" href="<?= ROOT ?>/adminDrama"> <i class="fa-solid fa-masks-theater"></i><span> Drama</span></a>
            <a class="<?= $page == "adminEmployee" ? 'active' : ''; ?>" href="<?= ROOT ?>/adminEmployee"> <i class="fa-solid fa-user"></i> <span>Employee</span></a>
            <a class="<?= $page == "adminTask" ? 'active' : ''; ?>" href="<?= ROOT ?>/adminTask"> <i class="fa solid fa-tasks"></i> <span>Task</span></a>
            <!-- <a href="<?= ROOT ?>/adminTheater"> <i class="fa-solid fa-panorama"></i> <span>Theater</span></a> -->
            <!-- <a class="<?= $page == "adminFacilities" ? 'active' : ''; ?>" href="<?= ROOT ?>/adminFacilities"> <i class="fa-solid fa-check"></i> <span>Facilities</span></a> -->
            <a class="<?= $page == "adminUserQueries" ? 'active' : ''; ?>" href="<?= ROOT ?>/adminUserQueries"> <i class="fa-solid fa-flag"></i> <span>User Queries</span></a>
            <a class="<?= $page == "Halls" ? 'active' : ''; ?>" href="<?= ROOT ?>/Halls"> <i class="fa-solid fa-panorama"></i> <span>Halls</span></a>
            <a class="<?= $page == "adminArticle" ? 'active' : ''; ?>" href="<?= ROOT ?>/adminArticles"> <i class="fa-solid fa-newspaper"></i> <span>Articles</span></a>
            <!-- <a class="<?= $page == "adminRequest" ? 'active' : ''; ?>" href="<?= ROOT ?>/adminRequest"> <i class="fa-solid fa-hand"></i> <span>Request</span></a> -->
            <a class="<?= $page == "adminReport" ? 'active' : ''; ?>" href="<?= ROOT ?>/adminReport"> <i class="fa-solid fa-flag"></i> <span>Report</span></a>

        </div>

    </div>

    <!-- <div class="data"></div> -->

</body>

</html>