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
        <?php if ($data !== null) : ?>
            <div class="card">
                <img src="' . ROOT . '/assets/images/drama_portal/<?= $row->image ?>" alt="" class="card-img">
                <div class="card-body">
                    <h1 class="card-title"><?= $row->article_name ?></h1>
                    <p class="card-sub-title">Category : <?= $row->category ?></p>
                    <p class="card-info"><?= $row->article_content ?></p>

                    <div class="button_group">
                        <button class="card-btn" onclick="edit()" style="background-color: #00FF1A;">Edit</button>
                        <button class="card-btn" onclick="" style="background-color: #FF0000;">Delete</button>

                    </div>
                </div>
            </div>
        <?php else : ?>
            <p>Article not found!</p>
        <?php endif; ?>



        <!-- <div class="card">
            <img src="<?= ROOT ?>/assets/images/drama_portal/i3.jpg" alt="" class="card-img">
            <div class="card-body">
                <h1 class="card-title">EDIPAS RAJA</h1>
                <p class="card-sub-title">Category : Tragedy</p>
                <p class="card-info">Oedipus Rex by Sophocles is a Greek tragedy about a man who unknowingly fulfills a prophecy by killing his father and marrying his mother. It explores themes of fate, free will, and the consequences of unchecked pride.
                The story of Oedipus is the subject of Sophocles' tragedy Oedipus Rex, which is followed in the narrative sequence by Oedipus at Colonus and then Antigone. Together, these plays make up Sophocles' three Theban plays.
                 Oedipus represents two enduring themes of Greek myth and drama: the flawed nature of humanity and an individual's role in the course of destiny in a harsh universe.
                </p>

                <div class="button_group">
                    <button class="card-btn" onclick="edit()" style="background-color: #00FF1A;">Edit</button>
                    <button class="card-btn" onclick="" style="background-color: #FF0000;">Delete</button>

                </div>
            </div>
        </div> -->
    </div>



</body>

</html>