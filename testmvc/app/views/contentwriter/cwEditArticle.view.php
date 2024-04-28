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
        <form method="post" id="articleForm" class="addArticle" autocomplete="off" enctype="multipart/form-data">
            <h1>Edit Article</h1>

            <label for="article_name">Article Name :</label>
            <input type="text" name="article_name" id="article_name" value="<?= $data['article'][0]->article_name ?>" required>

            <label for="category">Category:</label><br>
            <select name="category" id="category" required>
                <option value="Comedy" <?= ($data['article'][0]->category === 'Comedy') ? 'selected' : '' ?>>Comedy</option>
                <option value="Farce" <?= ($data['article'][0]->category === 'Farce') ? 'selected' : '' ?>>Farce</option>
                <option value="Tragedy" <?= ($data['article'][0]->category === 'Tragedy') ? 'selected' : '' ?>>Tragedy</option>
                <option value="Opera" <?= ($data['article'][0]->category === 'Opera') ? 'selected' : '' ?>>Opera</option>
                <option value="Melodrama" <?= ($data['article'][0]->category === 'Melodrama') ? 'selected' : '' ?>>Melodrama</option>
                <option value="Tragi-Comdedy" <?= ($data['article'][0]->category === 'Tragi-Comdedy') ? 'selected' : '' ?>>Tragi-Comdedy</option>
            </select>



            <button type="button" id="addNewButton" onclick="addNewCategory()">Add New</button>

            <label for="article_content">Article Content:</label>

            <textarea name="article_content" id="article_content" cols="30" rows="10" required><?=htmlspecialchars($data['article'][0]->article_content) ?>
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


        function addNewCategory() {
            var newCategory = prompt("Enter the new category:");
            if (newCategory) {
                var select = document.getElementById("category");
                if (!select) {
                    select = document.createElement("select");
                    select.name = "category";
                    select.id = "category";
                    var form = document.getElementById("articleForm");
                    form.insertBefore(select, form.children[3]);
                }
                var option = document.createElement("option");
                option.text = newCategory;
                option.value = newCategory;
                select.add(option);
                // Set the newly added category as selected
                select.value = newCategory;
            }
        }
    </script>



</body>

</html>