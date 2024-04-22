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

    <div class="container">
        <div class="card">
            <div class="card-header">
                <img src="<?= ROOT ?>/assets/images/drama_portal/<?= $data['article'][0]->image ?>" class="card-img">

            </div>



            <div class="card-body">
                <h2 class="card-title"><?= $data['article'][0]->article_name ?></h2>
                <h3 class="card-local">Category : <?= $data['article'][0]->category ?></h3>

                <p class="card-texto"><?= $data['article'][0]->article_content ?></p>
                <div class="card-footer">
                <p class="author">Author : <?= $data['article'][0]->cwName ?></p>
            </div>
            </div>

            
        </div>

    </div>


</body>

</html>