<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/empNotifications.css">
    <title>Notifications</title>
</head>

<?php require_once 'employeeSideBar.php' ?>
<?php include 'navBar.php' ?>

<body>
    <div class="container">


        <div class="back">

        </div>
        <h2>Notifications</h2>
        <?php
        if ($data['notifications'] && (is_array($data['notifications']) || is_object($data['notifications']))) {
            foreach ($data['notifications'] as $notification) :
        ?>
                <?php if ($notification->isRead == 0) : ?>
                    <form method="POST">
                        <input type="hidden" name="id" value="<?= $notification->id ?>">
                        <button class="card1" id="notification_<?= $notification->id ?>" value="<?= $notification->id ?>">
                            <div class="card1-title"><?= $notification->message ?></div>
                        </button>
                    </form>
                <?php else : ?>
                    <div class="card2">
                        <div class="card2-title"><?= $notification->message ?></div>
                    </div>
                <?php endif; ?>
        <?php endforeach;
        } else {
            echo '<tr><td colspan="9">No new notifications</td></tr>';
        }
        ?>
</body>
<script>
    // let card1 = document.getElementById('card1');
    // card1.addEventListener('click', function() {
    //     card1.style.display = 'none';
    //     // Send POST request with value $notification->id
    //     fetch('your-api-endpoint', {
    //         method: 'POST',
    //         body: JSON.stringify({ id: <?= $notification->id ?> }),
    //         headers: {
    //         'Content-Type': 'application/json'
    //         }
    //     })
    //     .then(response => response.json())
    //     .then(data => {
    //         // Handle response data
    //     })
    //     .catch(error => {
    //         // Handle error
    //     });
    // });
</script>

</html>