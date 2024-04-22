<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.css" integrity="sha512-U9Y1sGB3sLIpZm3ePcrKbXVhXlnQNcuwGQJ2WjPjnp6XHqVTdgIlbaDzJXJIAuCTp3y22t+nhI4B88F/5ldjFA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:400,700">

    <title>Punchi theatre</title>
</head>

<body>


<?php 
  require_once 't_reservaNavBar.php';
 ?>

    <!-- <div class="sidebar">
        <a href="#"><i class="left-menu-icon fas fa-search"></a></i>
    </div> -->

    <div class="container">
        <div class="content-container">
            <div class="featured-content" style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('<?= ROOT ?>/assets/images/home/p-2.jpg');">
                <p class="featured-desc"></p>
                
                <!--___________________SEARCH BAR____________________-->
                <div class="search">
                        <input type="text" name="" id="find" placeholder="" onkeyup="search()">
                        <i class="fa-solid fa-magnifying-glass" style="  font-size: 30px; margin-right: 10px; margin-top:3px;"></i>
                </div>

            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title1">SHOWING</h1>

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
        <?php require_once 't_reservaFooter1.php' ?>
</body>

</html>