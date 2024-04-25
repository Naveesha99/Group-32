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
        <div class="overlay" id="overlay"></div>


        <form method="post" id="articleForm" class="addArticle" autocomplete="off" enctype="multipart/form-data">
            <h1>Add New Article</h1>

            <label for="article_name">Article Name :</label>
            <input type="text" name="article_name" id="article_name" required>
            <?php if (!empty($errors['article_name'])) : ?>
                <span style="color: red; font-weight: bold; margin-bottom: 5px;">
                    <?= show($errors['article_name']) ?>
                </span>
            <?php endif; ?>

            <label for="category">Category : </label><br>
            <select name="category" id="category">
                <option value="Comedy">Comedy</option>
                <option value="Farce">Farce</option>
                <option value="Tragedy">Tragedy</option>
                <option value="Opera">Opera</option>
                <option value="Melodrama">Melodrama</option>
                <option value="Tragi-Comdedy">Trag-Comedy</option>

            </select>
            <?php if (!empty($errors['category'])) : ?>
                <span style="color: red; font-weight: bold; margin-bottom: 5px;">
                    <?= show($errors['category']) ?>
                </span>
            <?php endif; ?>


            <button type="button" id="addNewButton" onclick="addNewCategory()">Add New</button>

            <label for="article_content">Article Content:</label>

            <textarea name="article_content" id="article_content" cols="30" rows="10" required></textarea>
            <?php if (!empty($errors['article_content'])) : ?>
                <span style="color: red; font-weight: bold; margin-bottom: 5px;">
                    <?= show($errors['article_content']) ?>
                </span>
            <?php endif; ?>


            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png" required>
            <?php if (!empty($errors['image'])) : ?>
                <span style="color: red; font-weight: bold; margin-bottom: 5px;">
                    <?= show($errors['image']) ?>
                </span>
            <?php endif; ?>

            <div class="button-group">
                <button type="submit" name="save_draft">Save as Draft</button>
                <button type="submit" id="submitBtn" name="submit_article">SUBMIT</button>


            </div>


        </form>

        <div class="wrpper">
            <!-- <button type="submit" class="btn" onclick="openPopup()">Submit</button> -->
            <div class="popup" id="popup">
                <img src="<?= ROOT ?>/assets/images/tick.jpeg" alt="" srcset="">
                <h2>Thank You!</h2>
                <p>Your article has been successfully added!!</p>
                <button type="button " onclick="closePopup()">OK</button>
            </div>
        </div>

    </div>
    <script>
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

    <!-- <script>
        let popup = document.getElementById('popup');
        let overlay = document.getElementById('overlay');

        function openPopup() {
            //  popup.classList.add("open-popup");
            popup.style.display = "block";
            overlay.style.display = "block";
        }

        function closePopup() {
            popup.style.display = "none";
            overlay.style.display = "none";
            // popup.classList.remove("open-popup");
            document.getElementById('articleForm').submit();
            window.location.href = "<?= ROOT ?>/cwArticleReview";
        }

        // Add event listener to the submit button
        document.getElementById('submitBtn').addEventListener('click', function(event) {
            // Prevent the default form submission behavior
            event.preventDefault();
            // Open the popup
            openPopup();
        });
    </script> -->


</body>

</html>