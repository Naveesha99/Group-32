<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/cwViewOwnArticle.css">
    <title>Article Details</title>
</head>

<?php include 'navBar.php' ?>

<body>
    <div class="wrapper">



        <?php if ($data !== null) :
            // show($data)
        ?>
            <img src="<?= ROOT ?>/assets/images/drama_portal/<?= $data['article'][0]->image ?>" alt="" class="card-img">
            <div class="card">
                <div class="text-box">
                    <h2><?= $data['article'][0]->article_name ?></h2>
                    <p>Category : <?= $data['article'][0]->category ?></p>
                    <p><?= $data['article'][0]->article_content ?></p><br><br>
                    <div class="button_group">
                        <a href="<?= ROOT ?>/cwViewOwnArticle/editArticle?id=<?= $data['article'][0]->id ?>" class="card-btn">Edit</a>
                        <!-- <a href="<?= ROOT ?>/cwViewOwnArticle/deleteArticle?id=<?= $data['article'][0]->id ?>" class="card-btn" style="background-color: #FF0000;">Delete</a> -->
                    </div>

                </div>
            </div>
        <?php else : ?>
            <p>Article not found!</p>
        <?php endif; ?>
    </div>



</body>

</html>