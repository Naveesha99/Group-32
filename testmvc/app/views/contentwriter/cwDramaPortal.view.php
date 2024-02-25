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
    <!-- <?php include 'adminSidebar.php' ?> -->

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
                <input type="text" id="search-input" placeholder="search category.." oninput="handleSearch()">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
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

    <script>
        let searchTimer;
        let dropdownBtn = document.getElementById("drop-text");
        let list = document.getElementById("list");
        let icon = document.getElementById("icon");
        let span = document.getElementById("span");
        let input = document.getElementById("search-input");
        let listItems = document.querySelectorAll(".dropdown-list-item");
        let selectedCategory = "All categories";

        // Function to handle search based on category
        function handleSearch() {
            // Clear previous search timer
            clearTimeout(searchTimer);

            // Set a new timer to delay the search by 500 milliseconds
            searchTimer = setTimeout(() => {
                // Get the search query directly from the input field
                let searchQuery = input.value.trim().toLowerCase();

                // Get the selected category
                let selectedCategory = span.innerText.trim();

                // Redirect to the same page with selected category and search query as URL parameters
                window.location.href = window.location.pathname + '?category=' + encodeURIComponent(selectedCategory) + '&search=' + encodeURIComponent(searchQuery);
            }, 500);
        }



        // Show dropdown list on click on dropdown btn
        dropdownBtn.onclick = function() {
            list.classList.toggle('show');

            // Rotate arrow icon
            if (list.classList.contains('show')) {
                icon.style.rotate = "0deg";
            } else {
                icon.style.rotate = "-180deg";
            }
        };

        // Hide dropdown list when clicked outside dropdown btn
        window.onclick = function(e) {
            if (e.target.id !== "drop-text" &&
                e.target.id !== "span" &&
                e.target.id !== "icon") {
                list.classList.remove('show')
                icon.style.rotate = "0deg";
            }
        };

        for (item of listItems) {
            item.onclick = handleItemClick;
        }

        // Handle click on list items
        function handleItemClick(e) {
            item.onclick = function(e) {
                // Change dropdown btn text on click on selected list item
                span.innerHTML = e.target.innerText;

                // Change input placeholder text on selected list item
                if (e.target.innerText == "All categories") {
                    input.placeholder = "Search in all categories...";
                } else {
                    input.placeholder = "Search in " + e.target.innerText + "...";
                }

                // Handle search when category is selected
                handleSearch();
            };
        }

        // Handle search when user presses Enter key in the search input field
        input.addEventListener("keyup", function(event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                handleSearch();
            }
        });

        // Add an event listener to the search input field
        input.addEventListener("input", function() {
            // Change dropdown btn text to the default "All categories" when typing in the search bar
            span.innerHTML = "All categories";

            // Change input placeholder text when typing in the search bar
            input.placeholder = "Search in all categories...";

            handleSearch();
        });

        // Handle search when user clicks on the search icon
        // document.querySelector(".fa-magnifying-glass").addEventListener("click", function() {
        //     handleSearch();
        // });
    </script>


    <!-- <script src="search_category.js"></script> -->

</body>

</html>