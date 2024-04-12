<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/home.css">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet"> -->
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



    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <img class="logo" src="<?= ROOT ?>/assets/images/home/Logo.png" alt="PUNCHI THEATRE">
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <li class="menu-list-item active">Home</li>
                    <li class="menu-list-item"><a href="<?= ROOT ?>/addseats">Dramas</a></li>
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
                <h1 class="movie-list-title">SHOWING</h1>

                <div class="movie-list-wrapper">
                    <?php
                    if (isset($data1) && is_array($data1)) 
                    {
                        $t = 0;
                        $itemCount = count($data1);
                        $itemsPerRow = 4;

                        // Loop through the data1 and group items by 4
                        for ($i = $itemCount; $i > 0; $i -= $itemsPerRow) 
                        {
                            echo '<div class="movie-list-row">';
                            
                            // Display up to 4 items in the current row
                            for ($j=0; $j<$itemsPerRow; $j++) 
                            {
                                if($i-1-$j>=0){

                                
                                $x = $data1[$i-1-$j];
                    ?>
                                <form action="select_drama" method="POST">
                                    <div class="movie-list-item">
                                        <img class="movie-list-item-img" src="<?= ROOT ?>/assets/images/drama_img/<?= $x->image ?>" alt=''>

                    <?php
                                    $dates = []; // Initialize arrays to store dates and times
                                    $times = [];
                                    foreach($data2 as $n)
                                    {
                                        if($n->drama_id == $x->id)
                                        {
                                            $time_from_db = $n->time;
                                            $time_formatted = date("h:i A", strtotime($time_from_db));
                                            
                                            $dates[]=$n->date;
                                            $times[]=$time_formatted;                                              
                                        }
                                        $t++;    
                                    }
                                    // show($dates);
                                    for($r=0; $r <count($dates); $r++)
                                    {
                    ?>
                                        <span class="movie-list-item-title"><?=  $dates[$r].'  -  '.$times[$r]?></span><br>
                                        <!-- <span class="datesTimes"><?=  $dates[$r].'  -  '.$times[$r]?></span><br> -->

                    <?php
                                    }
                    ?>
                                        <span class="movie-list-title"><?= $x->title ?></span>
                                        <input type="hidden" name="id" value="<?= $x->id ?>">
                                        <button type="submit" class="movie-list-item-button">BOOK</button><br>

                                        
                                        
                                    </div>
                                </form>
                    <?php
                                }
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
        <script>
            
        </script>
</body>

</html>