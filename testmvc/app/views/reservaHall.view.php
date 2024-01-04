<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= ROOT ?>/assets/css/reservaHall.css" rel="stylesheet">

    <title>Admin Panel</title>

</head>

<?php require_once 'reservaSideBar.php' ?>


<body class="dashboard">
    <div class="container">
        <div class="header">


            <?php require_once 'navBar.php' ?>
        </div>


        <div class="content">

            <div class="tile">
                <h2>Hall 1</h2>
                <img src="<?= ROOT ?>/assets/images/Hall1Photo1.jpg" alt="Hall 1">
                <div class="description">
                    <p>Description for Hall 1 goes here...</p>
                    <!-- <button class="viewButton" onclick="location.href='ReservaHall1.html';">View More</button> -->
                    <button class="viewButton" onclick="location.href='reservaHall1';">View More</button>
                </div>
            </div>
            <div class="tile">
                <h2>Hall 2</h2>
                <img src="<?= ROOT ?>/assets/images/Hall2Photo1.jpg" alt="Hall 2">
                <div class="description">

                    <p>Description for Hall 2 goes here...</p>
                    <button class="viewButton" onclick="location.href='reservaHall1';">View More</button>
                </div>
            </div>
            <div class="tile">
                <h2>Theatre</h2>
                <img src="<?= ROOT ?>/assets/images/Hall3Photo1.jpg" alt="Theatre">
                <div class="description">

                    <p>Description for Theatre goes here...</p>
                    <button class="viewButton" onclick="location.href='reservaHall1';">View More</button>
                </div>
            </div>
        </div>
    </div>

</html>