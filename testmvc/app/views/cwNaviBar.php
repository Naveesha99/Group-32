<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/cwNavi.css">
    <script src="https://kit.fontawesome.com/8bff7d7f97.js" crossorigin="anonymous"></script>
    <title>Navigation Bar</title>
</head>
<body>

    <input type="checkbox" id="menu">
    <nav>
        <label>Logo</label>

        <ul>
            <li><a class="active" href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Drama Portal</a></li>
            <li><a href="#">Drama </a></li>
            <li><a href="#">Theatre</a></li>
        </ul>
        <label for="menu" class="menu-bar"> <i class=" fa fa-bars"></i></label>

    </nav>

    <div class="sidebar">
        
        <a href="#"> <i class="fa-solid fa-house"></i> <span>Dashboard</span></a>
        <a href="#"> <i class="fa-solid fa-newspaper"></i><span> New Article</span></a>
        <a href="#"> <i class="fa-regular fa-newspaper"></i> <span>All Articles</span></a>
        <a href="#"> <i class="fa-regular fa-hard-drive"></i> <span>Drafts</span></a>
        <a href="#"> <i class="fa-solid fa-gear"></i> <span>Settings</span></a>
    </div>

    <div class="data"></div>
    
</body>
</html>