<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/cwDramaPortal.css">
    <script src="https://kit.fontawesome.com/8bff7d7f97.js" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script> -->
    <title>Drama Portal</title>

</head>

<body>
    <?php require_once 'cwNaviBar.php' ?>
    <?php include 'navBar.php' ?>

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
        <div class="search-bar">
            <div class="dropdown">
                <div id="drop-text" class="dropdown-text">
                    <span id="span">All categories</span>
                    <i id="icon" class="fa-solid fa-chevron-down"></i>
                </div>

                <ul id="list" class="dropdown-list">
                    <li class="dropdown-list-item">All categories</li>
                    <li class="dropdown-list-item">Comedy</li>
                    <li class="dropdown-list-item">Tragedy</li>
                    <li class="dropdown-list-item">Musical</li>
                    <li class="dropdown-list-item">Melodrama</li>
                </ul>
            </div>



            <div class="search-box">
                <input type="text" id="search-input" placeholder="search category..">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
        <!-- <div class="search-bar">
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
        </div> -->

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

    <script>
        let dropdownBtn = document.getElementById("drop-text");
        let list = document.getElementById("list");
        let icon = document.getElementById("icon");
        let span = document.getElementById("span");
        let input = document.getElementById("search-input");
        let listItems = document.querySelectorAll(".dropdown-list-item");

        //show dropdown list on click on dropdown btn
        dropdownBtn.onclick = function() {
            list.classList.toggle('show');

            // rotate arrow icon
            if (list.classList.contains('show')) {
                icon.style.rotate = "0deg";

            } else {
                icon.style.rotate = "-180deg";

            }

            // list.classList.toggle('show');

        };

        //hide dropdown list when clicked outside dropdown btn
        window.onclick = function(e) {
            if (e.target.id !== "drop-text" &&
                e.target.id !== "span" &&
                e.target.id !== "icon") {

                list.classList.remove('show');
                icon.style.rotate = "0deg";

            }

        };

        for (item of listItems) {
            item.onclick = function(e) {
                //change dropdown btn text on click on selected list item
                span.innerHTML = e.target.innerText;

                //change input placeholder text on selected list item
                if (e.target.innerText == "All categories") {
                    input.placeholder = "Search in all categories...";

                } else {
                    input.placeholder = "Search in " + e.target.innerText + "...";

                }


            };

        }
    </script>

    <!-- <script>
        console.log("Script is running");

        $(document).ready(function() {
            var select = $("#select");
            var list = $("#list");
            var selectText = $("#selectText");
            var options = $(".options");
            console.log("Select element:", select);
                console.log("List element:", list);
                console.log("SelectText element:", selectText);
                console.log("Options elements:", options);


            select.click(function() {
                list.toggleClass("open");
            });

            options.click(function() {
                selectText.html($(this).html());
            });
        });
    </script> -->

    <!-- <script src="search_category.js"></script> -->

</body>

</html>