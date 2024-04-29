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
            <div class="c1">

            <div class="movie-list-wrapper1" style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('<?= ROOT ?>/assets/images/home/p-1.jpg'); background-size: auto; background-position: 40% 50%;">
                <h1 class="movie-list-title1">NOW SHOWING</h1>

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

                <?php for ($i = 1; $i <= 7; $i++) { ?>
                    <div class="dateshowing" id="date<?= $i ?>" style="<?= $i == 1 ? '' : 'display: none;' ?>">
                        <h3><?= ${'nextDate'.$i} ?></h3>
                        <?php
                        if(isset($data2) && is_array($data2))
                        {
                            foreach ($data2 as $ondate) 
                            {
                                if ($ondate->date == ${'nextDate'.$i}) {
                                    $time_from_db = $ondate->time;
                                    $time_formatted = date("h:i A", strtotime($time_from_db));
                                    ?>
                                    <p><?= $ondate->title ?> - <?= $time_formatted ?></p>
                            <?php }
                            } 
                        }
                        ?>
                    </div>
                <?php } ?>
            </div>

                <div class="featured-content" style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('<?= ROOT ?>/assets/images/home/p-2.jpg');">
                    <p class="featured-desc"></p>
                    
                    <!--SEARCH BAR_-->
                    <div class="search">
                            <input type="text" name="" id="find" placeholder="" onkeyup="search()" style="width: 100%;">
                            <i class="fa-solid fa-magnifying-glass" style="  font-size: 30px; margin-right: 10px; margin-top:3px;"></i>
                    </div>
                    <!-- _______________________________________________ -->
                </div>
            </div>
            <div class="movie-list-container">

                





<script>
    function showNextDate(currentDate) {
        var nextDate = currentDate + 1;
        if (nextDate > 7) nextDate = 1; // Reset to first date if exceeds 7
        document.getElementById('date' + currentDate).style.display = 'none';
        document.getElementById('date' + nextDate).style.display = 'block';
        setTimeout(function() {
            showNextDate(nextDate);
        }, 5000); // Change to 5000ms (5 seconds)
    }

    // Start the process with the first date
    showNextDate(1);
</script>

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
                                <form action="select_drama" class="form1" method="POST">
                                    <div class="movie-list-item">
                                    <button type="submit" class="touch_card"><img class="movie-list-item-img" src="<?= ROOT ?>/assets/images/drama_img/<?= $x->image ?>" alt=''></button>

                    <?php
                                    $dates = []; // Initialize arrays to store dates and times
                                    $times = [];

                                    if(isset($data2) && is_array($data2))
                                    {    
                                    foreach($data2 as $n)
                                    {   
                                        if($n->drama_id == $x->id)
                                        {
                                            if($n->date >= $today)
                                            {

                                                $time_from_db = $n->time;
                                                $time_formatted = date("h:i A", strtotime($time_from_db));
                                                
                                                $dates[]=$n->date;
                                                $times[]=$time_formatted;    
                                            }   

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
                                        <!-- <button type="submit" class="movie-list-item-button">BOOK</button><br> -->

                            <?php } ?>
                                        
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