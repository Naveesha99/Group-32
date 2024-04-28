<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view Pending articles</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/viewPendingarticles.css">
</head>
<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body>
    <div class="container">
        <div class="content">
            <div class="wrapper">
                <?php if ($data !== null) :
                    // show($data)
                ?>
                    <img src="<?= ROOT ?>/assets/images/drama_portal/<?= $data['article'][0]->image ?>" alt="" class="card-img">
                    <div class="card">
                        <div class="text-box">
                            <h2><?= $data['article'][0]->article_name ?></h2>
                            <p>Category : <?= $data['article'][0]->category ?></p>
                            <p>Author : <?= $data['article'][0]->cwName ?></p>
                            <p><?= $data['article'][0]->article_content ?></p><br><br>
                            <div class="button_group">
                                <div class="button-group">
                                    <form method="POST">
                                        <input type="hidden" name="accept_request" value="<?= $data['article'][0]->id ?>">
                                        <button type="submit" name="Accept" class="btn-accept">Accept</button>
                                    </form>
                                    <form method="POST">
                                        <input type="hidden" name="reject_request" value="<?= $data['article'][0]->id ?>">
                                        <button type="submit" name="Reject" class="btn-reject">Reject</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php else : ?>
                    <p>Article not found!</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>