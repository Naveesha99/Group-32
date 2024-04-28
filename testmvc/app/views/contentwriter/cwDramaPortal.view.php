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
        


        <!-- <form method="POST">
            <div class="search-bar">
                <div class="dropdown">
                    <div id="drop-text" class="dropdown-text" onclick="handleCategorySelection('All categories')">
                        <span id="span"><?= (!empty($data['select_categoery'])) ?  $data['select_categoery'] : "All categories" ?></span>
                        <i id="icon" class="fa-solid fa-chevron-down"></i>
                    </div>

                    <ul id="list" class="dropdown-list">
                        <li class="dropdown-list-item" onclick="handleCategorySelection('All categories')">All categories</li>
                        <li class="dropdown-list-item" onclick="handleCategorySelection('Comedy')">Comedy</a></li>
                        <li class="dropdown-list-item" onclick="handleCategorySelection('Trajedy')">Tragedy</li>
                        <li class="dropdown-list-item" onclick="handleCategorySelection('Musical')">Musical</li>
                        <li class="dropdown-list-item" onclick="handleCategorySelection('Melodrama')">Melodrama</li>
                    </ul>
                </div>



                <div class="search-box">
                    <input type="text" id="search-input" placeholder="search <?= (!empty($data['select_categoery'])) ?  $data['select_categoery'] : "All categories" ?>..">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>

        </form> -->


        <div class="addNew">
            <a href="<?= ROOT ?>/cwAddArticle">ADD NEW</a>
        </div>

        <!-- <div class="searchBar">
            <form>
                <div class="form">
                    <form>
                        <div class="form-input">
                            <input type="search" placeholder="Search...">
                            <button type="submit" class="search-btn">
                                <i class='bx bx-search'></i>
                            </button>
                        </div>
                    </form>
                </div>

            </form>

        </div> -->


        <div class="cards-container">
            <?php
            if ($data['articles'] && (is_array($data['articles']) || is_object($data['articles']))) {
                foreach ($data['articles'] as $row) {
                    echo  '<div class="card" id="card">
                            <div class="imgBX">
                                <img src="' . ROOT . '/assets/images/drama_portal/' . $row->image . '" alt="image" >
                            </div>
    
                            <div class="Content" id="content">
                                
                                

                                <h2>' . $row->article_name . '</h2>
                                <i id="iconHeart"' . $row->id . '  onclick="post_like(' . $row->id . ')" class="icon' . $row->id . ' fa-regular fa-heart"></i>
                                <span id="likeCount' . $row->id . '" class="like-count">' . $row->likes . '</span>
                                <p id="category">Category:' . $row->category . '</p>
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
    </div>

    <script>
        // let searchTimer;
        // let dropdownBtn = document.getElementById("drop-text");
        // let list = document.getElementById("list");
        // let icon = document.getElementById("icon");
        // let span = document.getElementById("span");
        // let input = document.getElementById("search-input");
        // let listItems = document.querySelectorAll(".dropdown-list-item");
        // let selectedCategory = "All categories";

        // // Function to handle search based on category
        // function handleSearch() {
        //     // Clear previous search timer
        //     clearTimeout(searchTimer);

        //     // Set a new timer to delay the search by 500 milliseconds
        //     searchTimer = setTimeout(() => {
        //         // Get the search query directly from the input field
        //         let searchQuery = input.value.trim().toLowerCase();

        //         // Get the selected category
        //         let selectedCategory = span.innerText.trim();

        //         // Redirect to the same page with selected category and search query as URL parameters
        //         window.location.href = window.location.pathname + '?category=' + encodeURIComponent(selectedCategory) + '&search=' + encodeURIComponent(searchQuery);
        //     }, 1000);
        // }

        // Show dropdown list on click on dropdown btn
        // dropdownBtn.onclick = function() {
        //     list.classList.toggle('show');

        //     // Rotate arrow icon
        //     if (list.classList.contains('show')) {
        //         icon.style.rotate = "0deg";
        //     } else {
        //         icon.style.rotate = "-180deg";
        //     }
        // };

        // // Hide dropdown list when clicked outside dropdown btn
        // window.onclick = function(e) {
        //     if (e.target.id !== "drop-text" &&
        //         e.target.id !== "span" &&
        //         e.target.id !== "icon") {
        //         list.classList.remove('show')
        //         icon.style.rotate = "0deg";
        //     }
        // };

        // // Handle click on list items
        // for (item of listItems) {
        //     item.onclick = handleItemClick;
        // }

        // // Handle click on list items
        // function handleItemClick(e) {
        //     // Change dropdown btn text on click on selected list item
        //     span.innerHTML = e.target.innerText;

        //     // Change input placeholder text on selected list item
        //     if (e.target.innerText == "All categories") {
        //         input.placeholder = "Search in all categories...";
        //         handleSearch();
        //     } else {
        //         input.placeholder = "Search in " + span.innerHTML + "...";
        //         handleSearch();
        //     }

        //     // Handle search when category is selected
        //     // handleSearch();
        // }

        // // Handle search when user presses Enter key in the search input field
        // input.addEventListener("keyup", function(event) {
        //     if (event.keyCode === 13) {
        //         event.preventDefault();
        //         handleSearch();
        //     }
        // });

        // // Handle search when user types in the search input field
        // input.addEventListener("input", function() {
        //     // Change dropdown btn text to the default "All categories" when typing in the search bar
        //     span.innerHTML = "All categories";

        //     // Change input placeholder text when typing in the search bar
        //     input.placeholder = "Search in all categories...";

        //     // handleSearch();
        // });

        // // Function to handle category selection
        // function handleCategorySelection(category) {
        //     // Set the selected category text
        //     document.getElementById('span').innerText = category;
        //     // Trigger search based on the selected category
        //     handleSearch();
        // }

        // // Function to handle search
        // function handleSearch() {
        //     // Get the selected category
        //     let selectedCategory = document.getElementById('span').innerText.trim();

        //     // Get the search query from the input field
        //     let searchQuery = document.getElementById('search-input').value.trim().toLowerCase();

        //     // Redirect to the same page with selected category and search query as URL parameters
        //     window.location.href = window.location.pathname + '?category=' + encodeURIComponent(selectedCategory) + '&search=' + encodeURIComponent(searchQuery);
        // }


        // const search = document.getElementById('search-input');
        // const card = document.querySelectorAll('.card');

        // search.addEventListener('input', function() {

        //     card.forEach((item, index) => {

        //         let search_data = search.value.toLowerCase();
        //         // each card included text data
        //         let card_data = item.textContent.toLowerCase();
        //         // search bar typed text

        //         console.log(card_data);

        //         // Check if the row contains the search value
        //         if (card_data.includes(search_data)) {
        //             item.classList.remove("hide");

        //         } else {
        //             item.classList.add("hide");
        //         }
        //     });
        // });


        const search = document.querySelector(".form input"),
            table_rows = document.querySelectorAll(".card .Content");

        search.addEventListener('input', performSearch);

        function performSearch() {
            table_rows.forEach((row, i) => {
                let search_data = search.value.toLowerCase(),
                    row_text = '';

                for (let j = 0; j < row.children.length - 1; j++) {
                    row_text += row.children[j].textContent.toLowerCase();


                }
                // console.log(row_text);

                content.parentNode.classList.toggle('hide', content_text.indexOf(search_data) < 0);
            });
        }
    </script>

    <style>
        .card.hide {
            display: none;
        }
    </style>


    <script>
        var is_liked = false;
        var current_id = 0;
        var likedArticles = {};

        // Retrieve the value from localStorage
        let selectedIcons = JSON.parse(localStorage.getItem('selectedIcons')) || [];

        console.log("currently localStorage stored likes id list :", selectedIcons);

        // currently available likes display
        if (selectedIcons.length != 0) {

            selectedIcons.forEach(icon_id => {
                // console.log(icon_id);
                console.log(select_icon);

                var select_icon = document.querySelector(`.icon${icon_id}`);


                select_icon.classList.add('selected');
            });

        }

        function post_like(id) {

            const index = selectedIcons.indexOf(id);
            var data = {};

            if (index === -1) {

                // Icon not in array, add it
                selectedIcons.push(id);
                var select_icon = document.querySelector(`.icon${id}`);
                select_icon.classList.add('selected');

                console.log("add after selected likes id list :", selectedIcons);

                data = {
                    id: id,
                    likes: true,

                };

            } else {

                // Icon already in array, remove it
                selectedIcons.splice(index, 1);
                var select_icon = document.querySelector(`.icon${id}`);
                select_icon.classList.remove('selected');

                data = {

                    id: id,
                    likes: false,
                };

                console.log("remove after selected likes id list :", selectedIcons);

            }

            localStorage.setItem('selectedIcons', JSON.stringify(selectedIcons));

            $.ajax({
                type: "POST",
                url: '<?= ROOT ?>/CWDramaLike',
                data: data,
                cache: false,
                success: function(res) {
                    try {

                        //console.log(res);

                        // convet to the json type
                        Jsondata = JSON.parse(res);
                        // console.log(Jsondata);

                    } catch (error) {}
                },
                error: function(xhr, status, error) {
                    // return xhr;
                },
            });


        }
    </Script>


    <!-- <script src="search_category.js"></script> -->

    <!-- Import JQuary Library script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</body>

</html>