<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/cwDramaPortal.css">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/breacrumb.css">
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

        <div class="addNew">
            <a href="<?= ROOT ?>/cwAddArticle">ADD NEW</a>
        </div>
        <div class="cardBoxN">
            <div class=" cardN">
                <a href="<?= ROOT ?>/cwArticleReview">
                    <div>
                        <div class="numbers"> All Articles</div>
                        <!-- <div class="cardName">Total Published Articles</div> -->
                    </div>
                </a>
            </div>
        </div>
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