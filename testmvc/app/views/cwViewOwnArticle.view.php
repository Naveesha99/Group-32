<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/cwViewOwnArticle.css">
    <title>Article Details</title>
</head>
<?php require_once 'cwNaviBar.php' ?>

<body>


    <div class="container">
        <h1 id="articleName" span>MANAME</h1>
        <div class="image">
            <img id="articleImage" src="<?=ROOT?>/assets/images/kuweni.jpeg" alt="Article Image">
        </div>

        <div class="paragraph" id="articleContent">
            <p id="category" span>Category: Technology</p>
            <p id="articleText">A drama by the celebrated dramatist, Prof Ediriweera Sarachchandra, that utilises the traditions of nadagama (a type of rural folk theatre in Sri Lanka).
                Maname is a combination of theatrical craft, poetic sophistication and drama in which the elements in the folk theatre tradition have been adapted to modern stage.
                Maname features popular artistes like Sanath Wimalasiri, Namal Weerabahu, Janaka Munasinghe, Rajitha Hewathanthrige,
                Kasun Jayakody, Tharanga Kumari, Lakshani Amarathunga, Ganga Paranavithana, Hiran Nisha de Costa, Chaminda Mirihagalla and Upamali Ranathunga.</p>
        </div>

        <div class="button-group">
            <a href="content_writer_addArticle.html">
                <button type="button" onclick="edit()" style="background-color: #00FF1A;">Edit</button>
            </a>


            <button type="button" onclick="" style="background-color: #FF0000;">Delete</button>


        </div>
    </div>

</body>

</html>