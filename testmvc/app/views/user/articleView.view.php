<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/articleView.css">
    <script src="https://kit.fontawesome.com/8bff7d7f97.js" crossorigin="anonymous"></script>
    <title>view artile</title>
</head>
<?php include 'navBar.php' ?>

<body>
    <div class="wrapper">
        <img src="<?= ROOT ?>/assets/images/drama_portal/<?= $data['article'][0]->image ?>" alt="" srcset="">
        <div class="text-box">
            <h2><?= $data['article'][0]->article_name ?></h2>
            <p>Category : <?= $data['article'][0]->category ?></p>
            <p><?= $data['article'][0]->article_content ?></p><br><br>
            <p>Author : <?= $data['article'][0]->cwName ?></p>
            <p>Published Date : <?= $data['article'][0]->Created_at ?></p>

            <div class="like-icon">
                <i id="iconheart<?= $data['article'][0]->id ?>" onclick="post_like(<?= $data['article'][0]->id ?>)" class="iconheart<?= $data['article'][0]->id ?> fa-regular fa-heart"></i>
                <span id="like_count<?= $data['article'][0]->id ?>"><?= $data['article'][0]->likes ?></span> <!-- Removed extra single quote -->

            </div>
        </div>
    </div>

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
                //console.log(icon_id);
                var select_icon = document.querySelector(`.iconheart${icon_id}`);
                select_icon.classList.add('selected');
            });

        }

        function post_like(id) {
            console.log("Like button clicked for ID:", id);
            const index = selectedIcons.indexOf(id);
            var data = {};

            if (index === -1) {

                // Icon not in array, add it
                selectedIcons.push(id);
                var select_icon = document.querySelector(`.iconheart${id}`);
                select_icon.classList.add('selected');

                console.log("add after selected likes id list :", selectedIcons);

                data = {
                    id: id,
                    likes: true,

                };

            } else {

                // Icon already in array, remove it
                selectedIcons.splice(index, 1);
                var select_icon = document.querySelector(`.iconheart<?= $data['article'][0]->id ?>`);
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


</body>

</html>