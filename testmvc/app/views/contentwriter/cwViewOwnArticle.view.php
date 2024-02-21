<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/cwViewOwnArticle.css">
    <title>Article Details</title>
</head>
<?php require_once 'cwNaviBar.php' ?>
<?php include 'navBar.php' ?>

<body>
    <div class="container">

        <?php if ($data !== null) :
            //show($data)
        ?>
            <div class="card">
                <img src="<?= ROOT ?>/assets/images/drama_portal/<?= $data['article'][0]->image ?>" alt="" class="card-img">

                <div class="card-body">
                    <h1 class="card-title"><?= $data['article'][0]->article_name ?></h1>
                    <p class="card-sub-title">Category : <?= $data['article'][0]->category ?></p>
                    <p class="card-info"><?= $data['article'][0]->article_content ?></p>

                    <div class="button_group">
                        <button class="card-btn" onclick="edit()" style="background-color: #00FF1A;">Edit</button>
                        <button class="card-btn" onclick="" style="background-color: #FF0000;">Delete</button>

                    </div>
                </div>
            </div>
        <?php else : ?>
            <p>Article not found!</p>
        <?php endif; ?>
    </div>



</body>

</html>