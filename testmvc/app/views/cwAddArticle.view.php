<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Portal Article Submission </title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/cwAddArticle.css">
</head>

<?php require_once 'cwNaviBar.php' ?>

<body>
    <div class="container">

        <h1>Add New Article</h1>
        <form method="post" id="articleForm" class="addArticle">

            <label for="article_name">Article Name :</label>
            <input type="text" name="article_name" id="article_name" required>

        </form>


    </div>

</body>
</html>