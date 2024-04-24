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
                <!-- _______________________________________________ -->
            </div>

            <div class="movie-list-container">
                <h1 class="movie-list-title1">SHOWING</h1>

                <?php
                        // check date is in this week or not
                        $today = date('Y-m-d');

                        $nextDate1 = date('Y-m-d', strtotime("+0 day", strtotime($today)));
                        $nextDate2 = date('Y-m-d', strtotime("+1 day", strtotime($today)));
                        $nextDate3 = date('Y-m-d', strtotime("+2 day", strtotime($today)));
                        $nextDate4 = date('Y-m-d', strtotime("+3 day", strtotime($today)));
                        $nextDate5 = date('Y-m-d', strtotime("+4 day", strtotime($today)));
                        $nextDate6 = date('Y-m-d', strtotime("+5 day", strtotime($today)));
                        $nextDate7 = date('Y-m-d', strtotime("+6 day", strtotime($today)));
?>


                    <div class="movie-list-wrapper">
                                <div class="dateshowing">
                                    <h3><?= $nextDate1 ?></h3>
                                    <?php
                                        foreach($data2 as $ondate)
                                        {
                                            if($ondate->date == $nextDate1)
                                            {
                                                $time_from_db = $ondate->time;
                                                $time_formatted = date("h:i A", strtotime($time_from_db));
                                                ?>
                                                <!-- <p><?= $ondate->title ?><?= $time_formatted ?></p> -->
                                       <?php }
                                        }
                                    ?>
                                </div><br><br>

                                <div class="dateshowing">
                                    <h3><?= $nextDate2 ?></h3>
                                    <?php
                                        foreach($data2 as $ondate)
                                        {
                                                $time_from_db = $ondate->time;
                                                $time_formatted = date("h:i A", strtotime($time_from_db));
                                            if($ondate->date == $nextDate2)
                                        {
                                                ?>
                                                <p><?= $ondate->title ?> - <?= $time_formatted ?></p>
                                       <?php }
                                        }
                                    ?>
                                </div><br><br>

                                <div class="dateshowing">
                                    <h3><?= $nextDate3 ?></h3>
                                    <?php
                                        foreach($data2 as $ondate)
                                        {
                                            if($ondate->date == $nextDate3)
                                            {
                                                $time_from_db = $ondate->time;
                                                $time_formatted = date("h:i A", strtotime($time_from_db));
                                                ?>
                                                <p><?= $ondate->title ?> - <?= $time_formatted ?></p>
                                       <?php }
                                        }
                                    ?>
                                </div><br><br>

                                <div class="dateshowing">
                                    <h3><?= $nextDate4 ?></h3>
                                    <?php
                                        foreach($data2 as $ondate)
                                        {
                                            if($ondate->date == $nextDate4)
                                            {
                                                $time_from_db = $ondate->time;
                                                $time_formatted = date("h:i A", strtotime($time_from_db));
                                                ?>
                                                <p><?= $ondate->title ?> - <?= $time_formatted ?></p>
                                       <?php }
                                        }
                                    ?>
                                </div><br><br>

                                <div class="dateshowing">
                                    <h3><?= $nextDate5 ?></h3>
                                    <?php
                                        foreach($data2 as $ondate)
                                        {
                                            if($ondate->date == $nextDate5)
                                            {
                                                $time_from_db = $ondate->time;
                                                $time_formatted = date("h:i A", strtotime($time_from_db));
                                                ?>
                                                <p><?= $ondate->title ?> - <?= $time_formatted ?></p>
                                       <?php }
                                        }
                                    ?>
                                </div><br><br>

                                <div class="dateshowing">
                                    <h3><?= $nextDate6 ?></h3>
                                    <?php
                                        foreach($data2 as $ondate)
                                        {
                                            if($ondate->date == $nextDate6)
                                            {
                                                $time_from_db = $ondate->time;
                                                $time_formatted = date("h:i A", strtotime($time_from_db));
                                                ?>
                                                <p><?= $ondate->title ?> - <?= $time_formatted ?></p>
                                       <?php }
                                        }
                                    ?>
                                </div><br><br>

                                <div class="dateshowing">
                                    <h3><?= $nextDate7 ?></h3>
                                    <?php
                                        foreach($data2 as $ondate)
                                        {
                                            if($ondate->date == $nextDate7)
                                            {
                                                $time_from_db = $ondate->time;
                                                $time_formatted = date("h:i A", strtotime($time_from_db));
                                                ?>
                                                <p><?= $ondate->title ?> - <?= $time_formatted ?></p>
                                       <?php }
                                        }
                                    ?>
                                </div><br><br>
                    </div>


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
                                if($i-1-$j>=0)
                                {
                                
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