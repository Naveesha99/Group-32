<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/home.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Punchi theatre</title>
</head>

<body>
    <script src="scripts1.js"></script>

    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "1003601506490347");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <!-- <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v12.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script> -->


    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <img class="logo" src="<?= ROOT ?>/assets/images/home/Logo.png" alt="PUNCHI THEATRE">
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <li class="menu-list-item active">Home</li>
                    <li class="menu-list-item"><a href="#">Dramas</a></li>
                    <li class="menu-list-item"><a href="#">Popular</a></li>
                </ul>
            </div>

            <div class="menu-container">
                <ul class="menu-listSL">
                    <li class="menu-list-item"><a href="<?= ROOT ?>/login">Login</a></li>
                    <li class="menu-list-item"><a href="<?= ROOT ?>/signup">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="sidebar">
        <a href="#"><i class="left-menu-icon fas fa-search"></a></i>
    </div>

    <div class="container">
        <div class="content-container">
            <div class="featured-content" style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('<?= ROOT ?>/assets/images/home/p-2.jpg');">
                <!-- <img class="featured-title" src="img/#" alt=""> -->
                <p class="featured-desc"></p>
                <!-- <button class="featured-button">WATCH</button> -->
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">NEW RELEASES</h1>

                <div class="movie-list-wrapper">
                    <?php
                    if (isset($data) && is_array($data)) 
                    {
                        $itemCount = count($data);
                        $itemsPerRow = 4;

                        // Loop through the data and group items by 7
                        for ($i = 0; $i < $itemCount; $i += $itemsPerRow) 
                        {
                            echo '<div class="movie-list-row">';
                            
                            // Display up to 7 items in the current row
                            for ($j = 0; $j < $itemsPerRow && ($i + $j) < $itemCount; $j++) 
                            {
                                $x = $data[$i + $j];
                    ?>
                                <form action="select_drama" method="POST">
                                    <div class="movie-list-item">
                                        <img class="movie-list-item-img" src="<?= ROOT ?>/assets/images/drama_img/<?= $x->image ?>">
                                        <span class="movie-list-item-title"><?= $x->title ?></span>
                                        <input type="hidden" name="id" value="<?= $x->id ?>">
                                        <button type="submit" class="movie-list-item-button">BOOK</button>
                                    </div>
                                </form>
                    <?php
                            }

                            echo '</div>';
                        }
                    } 
                    else 
                    {
                    ?>
                        <h1>Next release coming soon</h1>
                    <?php
                    }
                    ?>
                    <!-- <i class="fas fa-chevron-right arrow"></i> -->
                </div>
            </div>

       
        </div>
    </div>
        
        <script src="<?= ROOT ?>/assets/js/home.js"></script>
</body>

</html>