<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Portal Article Submission </title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/content_writer_addArticle.css">
</head>
<?php require_once 'nav.php'?> 

<body>
    
    <div class ="container">
    
        <h1>Add New Article</h1>
        <form method="POST" id="articleForm" class="addArticle">


            <label for="article_name">Article Name:</label>
            <input type="text" id="article_name" name="article_name" required>
               

            <label for="category">Category:</label><br>
            <select id="category" name="category">
            <option value="DramaHistory">Drama History</option>
            <option value="StoryLine">Story Line</option>
            <option value="Directors">Directors</option>
            <option value="Actors">Actors</option>
            <option value="Upcoming">Upcoming</option>
            <option value="DramaMusic">Drama Music</option>
            </select><br><br>
        

            <label for="article_content">Article Content:</label>
            <textarea name="article_content" id="article_content" cols="30" rows="10" required></textarea>

            <label for="image">Image:</label><br>
            <input type="file" id="image" name="image" accept="image/*">

            <div class="button-group">
                <button type= "button" onclick="saveDraft()">Save as Draft</button>
                <button type="submit" onclick="submitForm()">SUBMIT</button>

            </div>

            
                
        </form>
    </div>


 <!-- <script src="addArticle.js"></script>   -->
</body>
</html>