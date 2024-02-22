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
<?php include 'navBar.php' ?>

<body>
    <div class="container">
        <!-- <?php show($data['article']); ?> -->
        <form method="post" id="articleForm" class="addArticle">
            <h1>Edit Article</h1>

            <label for="article_name">Article Name :</label>
            <input type="text" name="article_name" id="article_name" value="<?= $data['article'][0]->article_name ?>" required>

            <label for="category">Category:</label><br>
            <input type="text" name="category" id="category" list="category" autofocus required value="<?= $data['article'][0]->category ?>">
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

            <textarea name="article_content"  id="article_content" cols="30" rows="10" required>
                <?= htmlspecialchars($data['article'][0]->article_content) ?>
            </textarea>


            <label for="image">Image:</label><br>
            <input type="file" id="image" name="image" accept="image/*" value="<?= $data['article'][0]->image ?>">

            <div class="button-group">
                <button type="submit" name="save_draft">Save as Draft</button>
                <button type="submit" name="submit_article">SUBMIT</button>

            </div>


        </form>


    </div>

    <script>
        function submitForm() {
            console.log("submitForm function caled");
            windows.alert("Article added successfully!");
            return false;
            // document.getElementById("articleForm").submit();
        }
    </script>



</body>

</html>