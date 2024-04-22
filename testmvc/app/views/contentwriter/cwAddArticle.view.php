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