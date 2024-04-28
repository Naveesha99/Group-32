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
            <a class="<?= $page == "cwDashboard" ? 'active' : ''; ?>" href="<?= ROOT ?>/cwDashboard"> <i class="fa-solid fa-house"></i> <span>Dashboard</span></a>
            <a class="<?= $page == "cwAddArticle" ? 'active' : ''; ?>" href="<?= ROOT ?>/cwAddArticle"> <i class="fa-solid fa-newspaper"></i><span> New Article</span></a>
            <a class="<?= $page == "cwDramaPortal" ? 'active' : ''; ?>" href="<?= ROOT ?>/cwDramaPortal"> <i class="fa-regular fa-newspaper"></i> <span>All Articles</span></a>
            <a class="<?= $page == "cwDraft" ? 'active' : ''; ?>" href="<?= ROOT ?>/cwDraft"> <i class="fa-regular fa-hard-drive"></i> <span>Drafts</span></a>
            <!-- <a href="<?= ROOT ?>/cwProfile"> <i class="fa-solid fa-user"></i> <span>Profile</span></a> -->

        </div>

    </div>

    <!-- <div class="data"></div> -->

</body>

</html>