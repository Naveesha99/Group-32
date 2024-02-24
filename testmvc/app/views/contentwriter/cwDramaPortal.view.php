<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/cwDramaPortal.css">
    <!-- <script src="https://kit.fontawesome.com/8bff7d7f97.js" crossorigin="anonymous"></script> -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

    <title>Drama Portal</title>
</head>

<script>
        var select = document.getElementById("select");
        var list = document.getElementById("list");
        var selectText = document.getElementById("selectText");
        var options = document.getElementsByClassName("options");


        select.addEventListener("click", function()
        {
            list.classList.toggle("open");
        });

        for(Option of options){
            Option.onclick = function(){
                selectText.innerHTML = this.innerHTML;
            }
        }

</script>
<?php require_once 'cwNaviBar.php' ?>
<?php include 'navBar.php' ?>

<body>

    <?php
    function limitWords($text, $limit)
    {
        $words = explode(" ", $text);
        $limitedWords = array_slice($words, 0, $limit);
        $result = implode(" ", $limitedWords);

        if (count($words) > $limit) {
            $result .= '...';
        }

        return $result;
    }
    ?>
    <div class="container">
        <!-- <div class="heading">
            <h1>DRAMA PORTAL</h1>
        </div> -->

        <div class="search-bar">
            <div id="select">
                <p id="selectText">All categories</p>
                <i class="fa-solid fa-caret-down"></i>
                <ul id="list">
                    <li class="options">All categories</li>
                    <li class="options">Comedy</li>
                    <li class="options">Tragedy</li>
                    <li class="options">Musical</li>
                    <li class="options">Melodrama</li>
                </ul>
            </div>
            <input type="text" placeholder="Search In All Categories">

        </div>
        <div class="addNew">
            <a href="<?= ROOT ?>/cwAddArticle">ADD NEW</a>
        </div>

        <?php
        if ($data && (is_array($data) || is_object($data))) {
            foreach ($data as $row) {
                echo  '<div class="card">
                        <div class="imgBX">
                            <img src="' . ROOT . '/assets/images/drama_portal/' . $row->image . '" alt="image" >
                        </div>
    
                        <div class="Content">
                            <h2>' . $row->article_name . '</h2>
                            <p>Category:' . $row->category . '</p>
                            <p>' . limitWords($row->article_content, 20) . '</p>
                            <a href="cwViewOwnArticle?id=' . $row->id . '">READ MORE</a>
    
                        </div>
                        </div>';
            }
        } else {
            echo '<p>No data available</p>';
        }
        ?>
    </div>

    

</body>

</html>