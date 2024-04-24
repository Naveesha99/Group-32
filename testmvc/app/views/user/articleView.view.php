<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/articleView.css">
    <title>view artile</title>
</head>
<?php include 'navBar.php' ?>

<body>
    <div class="wrapper">
        <img src="<?= ROOT ?>/assets/images/drama_portal/<?= $data['article'][0]->image ?>" alt="" srcset="">
        <div class="text-box">
            <h2><?= $data['article'][0]->article_name ?></h2>
            <p>Category : <?= $data['article'][0]->category ?></p>
            <p><?= $data['article'][0]->article_content ?></p><br><br>
            <p>Author : <?= $data['article'][0]->cwName ?></p>

        </div>
    </div>


</body>

</html>