<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= ROOT ?>/assets/css/reservaNotifications.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/notificatioPanel.css">


    <title>Admin Panel</title>

</head>

<?php if (isset($_SESSION['USER'])) {
    require_once 'reservaNavBarAfter.php';
} else {
    require_once 'reservaNavBar.php';
} ?>


<body>
    <div class="back">

    </div>
    <h2>Notifications</h2>
    <?php foreach ($data['notifications'] as $notification) : ?>
        <?php if ($notification->isRead == 0) : ?>
            <form method="POST">
            <input type="hidden" name="id" value="<?=$notification->id?>">
                <button class="card1" id="card1" value="<?= $notification->id?>">
                    <div class="card1-title"><?= $notification->message ?></div>
                    <p><?= $notification->time ?></p>

                </button>
            </form>
        <?php else : ?>
            <div class="card2">
            <?php show($data); ?>

                <div class="card2-title"><?= $notification->message ?></div>
                <p><?= $notification->time ?></p>

            </div>
            
        <?php endif; ?>
    <?php endforeach; ?>
</body>


<!-- <body class="dashboard">
    <div class="container"> -->
        <!-- <div class="header">


            <//?php require_once 'navBar.php' ?>
        </div> -->

<!-- 
        <div class="content">
            <h1>NOTIFICATIONS</h1>
            <div class="cards">
                <div class="card">
                    <div class="boxAcc">
                        <p class="p1">Accepted</p>
                        <p class="p2">Req id RE123456789 is accepted</p3>
                        <button type="button">VIEW REQUEST</button>
                        <p class="p3"> 2023.02.23</p>
                    </div>
                </div>
                <div class="card">
                    <div class="boxRej">
                        <p class="p1">Rejected</p>
                        <p class="p2">Req id RE123456789 is rejected</p3>
                        <button type="button">VIEW REQUEST</button>
                        <p class="p3"> 2023.02.23</p>
                    </div>
                </div>
                <div class="card">
                    <div class="boxIn24">
                        <p class="p1">Payment Reminder </p>
                        <p class="p2">Req id RE123456789 complete initial payment within 24hrs</p3>
                        <button type="button">VIEW REQUEST</button>
                        <p class="p3"> 2023.02.23</p>
                    </div>
                </div>
                <div class="card">
                    <div class="boxIn12">
                        <p class="p1">Payment Reminder </p>
                        <p class="p2">Req id RE123456789 complete initial payment within 12hrs</p3>
                        <button type="button">VIEW REQUEST</button>
                        <p class="p3"> 2023.02.23</p>
                    </div>
                </div> 
                <div class="card">
                    <div class="boxIn1">
                        <p class="p1">Payment Reminder </p>
                        <p class="p2">Req id RE123456789 complete initial payment within 1hr</p3>
                        <button type="button">VIEW REQUEST</button>
                        <p class="p3"> 2023.02.23</p>
                    </div>
                </div> 
                <div class="card">
                    <div class="boxF7d">
                        <p class="p1">Payment Reminder </p>
                        <p class="p2">Req id RE123456789 complete full payment within 7days</p3>
                        <button type="button">VIEW REQUEST</button>
                        <p class="p3"> 2023.02.23</p>
                    </div>
                </div>
                <div class="card">
                    <div class="boxF24">
                        <p class="p1">Payment Reminder </p>
                        <p class="p2">Req id RE123456789 complete full payment within 24hrs</p3>
                        <button type="button">VIEW REQUEST</button>
                        <p class="p3"> 2023.02.23</p>
                    </div>
                </div>
                <div class="card">
                    <div class="boxF12">
                        <p class="p1">Payment Reminder </p>
                        <p class="p2">Req id RE123456789 complete initial payment within 12hrs</p3>
                        <button type="button">VIEW REQUEST</button>
                        <p class="p3"> 2023.02.23</p>
                    </div>
                </div>
                <div class="card">
                    <div class="boxF1">
                        <p class="p1">Payment Reminder </p>
                        <p class="p2">Req id RE123456789 complete initial payment within 1hr</p3>
                        <button type="button">VIEW REQUEST</button>
                        <p class="p3"> 2023.02.23</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body> -->

<script>
    window.onload = function () {
        const urlSearchParams = new URLSearchParams(window.location.search);
        var session=urlSearchParams.get('loggedin');
        document.getElementById('img-profile').style.display = 'none';
        if(session == 'false'){
            document.getElementById('img-profile').style.display = 'none';
            // document.getElementById('login-btn').style.display='none';
        }
        if(session == 'true'){
            // document.getElementById('img-profile').style.display = 'none';
            document.getElementById('img-profile').style.display = 'block';
            document.getElementById('login-btn').style.display='none';
        }
        
        }
</script>

</html>