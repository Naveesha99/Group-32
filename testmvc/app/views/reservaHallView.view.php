<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= ROOT ?>/assets/css/reservaHallView.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Admin Panel</title>

</head>

<!-- <?php //require_once 'reservaNavBar.php' 
        ?>  -->
<?php if (isset($_SESSION['USER'])) {
    require_once 'reservaNavBarAfter.php';
} else {
    require_once 'reservaNavBar.php';
} ?>




<section class="container">

    <section id="main" class="main">

        <ul class="breadcrumb">
            <li>
                <a href="#">Halls</a>
            </li>
            >
            <!-- <i class='bx bx-chevron-right'></i> -->
            <li>
                <a href="#" class="active">Hall01</a>
            </li>

        </ul>

        <div class="container2">
            <div class="container3">
                <div class="imgBx">
                    <!-- <img src="https://github.com/anuzbvbmaniac/Responsive-Product-Card---CSS-ONLY/blob/master/assets/img/jordan_proto.png?raw=true" alt="Nike Jordan Proto-Lyte Image"> -->
                    <img src="<?= ROOT ?>/assets/images/Hall3Photo1.jpg" data-src="https://www.anscom.lk/wp-content/uploads/2023/02/For-the-Workplace-of-the-Future-1360x900-1.webp" class="img-responsive lazy mobile-optimized" alt="" title="">

                </div>
                <div class="details">


                    <div class="content">
                        <div class="starts">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <h2>HALL 01<br>
                            <span>Hall id: 1</span>
                        </h2>
                        <p>


                            Elevate your events at Conference Hall 1.
                            With cutting-edge facilities and a capacity of up to 20, we ensure seamless meetings and conferences.
                            Clear sound, comfortable seating, and high-speed Wi-Fi guarantee a productive experience.
                            Welcome to the epitome of functionality and comfort.
                        </p>

                        <div class="description">
                            <h1>BENEFITS</h1>
                            <ul>
                                <li>Charging points</li>
                                <li>Free wifi</li>
                                <li>Multimedia Projectors</li>
                                <li>Air Condition</li>
                                <li>Whiteboards</li>
                            </ul>
                        </div>

                        <h3>Rs. 1,000</h3>

                        <!-- <button>Book Now</button> -->
                        <!-- <button class="viewandbook" onclick="redirectToReservaHall1('HALL01');">BOOK NOW</button> -->

                    </div>
                </div>
            </div>
        </div>
            <?php
                // show([$data]->['hallno']);
                // if (isset($data['hallno']) && $data['hallno'] != 'hall01') {
                //     show($data);
                // }
            ?>


        <!-- <div class="cont1_2">
            <h3 class="mb-3">Reviews And Ratings</h5>
                <div>
                    <div class="d-flex align-items-center mb-2">
                        <img src="" alt="image" width="30px">
                        <h5 class="m=0 ms-2">Random User1</h6>
                    </div>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit facere saepe sunt tempora optio culpa, possimus minus beatae aperiam voluptates! Esse tenetur illum alias iusto optio, ipsam enim nemo nesciunt?
                    </p>
                    <div class="starts">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>
                <div>
                    <div class="d-flex align-items-center mb-2">
                        <img src="" alt="image" width="30px">
                        <h5 class="m=0 ms-2">Random User1</h6>
                    </div>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit facere saepe sunt tempora optio culpa, possimus minus beatae aperiam voluptates! Esse tenetur illum alias iusto optio, ipsam enim nemo nesciunt?
                    </p>
                    <div class="starts">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>
        </div> -->
 <div class="cont1_2">
    <h3 class="mb-3">Reviews And Ratings</h3>


<?php
// Sort the $data array based on the review_date in descending order
usort($data, function($a, $b) {
    return strtotime($b->review_date) - strtotime($a->review_date);
});
?>



    <?php foreach ($data as $object) : ?>
        <?php if (($object->hallno === 'HALL01')&&($object->review != NULL)) : ?>
            <div class="rev">
                <div class="rev-i">
                    <!-- <div class="d-flex align-items-center mb-2"> -->
                        <!-- <img src="" alt="image" width="30px"> -->
                        <img src="<?= ROOT ?>/assets/images/profilePic.png">

                        <div class="rev1">
                            <h5 class="m=0 ms-2"><?= $object->name ?></h5>
                            <p class="revDate">On: <?= $object->review_date ?></p> <!-- Add this line to display review date -->
                        </div>
                    <!-- </div> -->
                </div>
                <div class="starts">
                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                        <?php if ($i <= $object->rating) : ?>
                            <span class="fa fa-star checked"></span>
                        <?php else : ?>
                            <!-- <span class="fa fa-star"></span> -->
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
                <p class="revContent"><?= $object->review ?></p>

            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>









        <!-- </div> -->

    </section>
    <div class="bottom">

    </div>


</section>





<!-- <?php //require_once 'reservaFooter1.php' 
        ?> -->


<script>
    window.onload = function() {
        const urlSearchParams = new URLSearchParams(window.location.search);
    }

    function redirectToReservaHall1(hallNumber) {
        event.preventDefault();
        window.location.href = `reservaHall1?hallno=${hallNumber}&loggedin=true`;
    }
</script>

</html>