<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Portal Article Submission </title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/cwAddArticle.css">
</head>

<?php require_once 'cwNaviBar.php' ?>

<body>
    <div class="container">


        <form method="post" id="articleForm" class="addArticle">
            <h1>Add New Article</h1>

            <label for="article_name">Article Name :</label>
            <input type="text" name="article_name" id="article_name" required>

            <label for="category">Category:</label><br>
            <input type="text" name="category" id="category" list="category" autofocus required>
            <datalist id="category">
                <option value="Comedy"></option>
                <option value="Farce"></option>
                <option value="Tragedy"></option>
                <option value="Melodrama"></option>
                <option value="Opera"></option>
                <option value="Musical"></option>
                <option value="Tragi-Comedy"></option>
            </datalist>

            <label for="article_content">Article Content:</label>
            
            <textarea name="article_content" id="article_content" cols="30" rows="10" required></textarea>
            

            <label for="image">Image:</label><br>
            <input type="file" id="image" name="image" accept="image/*">

            <div class="button-group">
                <button type="button" onclick="saveDraft()">Save as Draft</button>
                <button type="submit" onclick="submitForm()">SUBMIT</button>

            </div>


        </form>


    </div>

</body>

</html>