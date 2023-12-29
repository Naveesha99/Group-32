<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Portal Article Submission </title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/content_writer_addArticle.css">
</head>

 <!-- <div class="side-menu">
    <div class="brand-name">
        <h1>Brand</h1>
    </div>
    <ul>
        <a href="admin_dashboard.html"><li><img src="" alt="">&nbsp; <span>Profile</span> </li></a>
        <a href="content_writer_addArticle.html"><li><img src="" alt="">&nbsp; <span> New Article</span> </li></a>
        <a href="CWAllArticle.html"><li><img src="" alt="">&nbsp; <span>All Articles</span> </li></a>
        <a href="admin_theater.html"><li><img src="" alt="">&nbsp; <span>Draft</span> </li></a>
         <a href="admin_requests.html"><li><img src="" alt="">&nbsp; <span>Requests</span> </li></a>
        <a href="admin_reports.html"><li><img src="" alt="">&nbsp; <span>Reports</span> </li></a>
        <a href="admin_settings.html"><li><img src="" alt="">&nbsp; <span>Settings</span> </li></a>
    </ul>
</div> -->

<body>
    <div class ="container">
        <h1>Add New Article</h1>
        <form method="POST" id="articleForm">


            <label for="articleName">Article Name:</label>
            <input type="text" id="articleName" name="articleName" required>
               

            <label for="category">Category:</label><br>
            <select id="category" name="category">
            <option value="DramaHistory">Drama History</option>
            <option value="StoryLine">Story Line</option>
            <option value="Directors">Directors</option>
            <option value="Actors">Actors</option>
            <option value="Upcoming">Upcoming</option>
            <option value="DramaMusic">Drama Music</option>
            </select><br><br>
        

            <label for="articleContent">Article Content:</label>
            <textarea name="articleContent" id="articleContent" cols="30" rows="10" required></textarea>

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