<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= ROOT ?>/assets/css/reservaHall.css" rel="stylesheet">

    <title>Admin Panel</title>

</head>

<?php require_once 'reservaNavBar.php' ?>




<section class="container">
    <div class="content__container">
        <h1>
            Reserve Your Hall<br />
            <span class="heading__1">Now !</span><br />
            <span class="heading__2">MASTERFUL EVENTS STARTS HERE.</span>
        </h1>
        <p>
            Elevate our events in our top noth conference halls or stage drama theatres.Unleash your unforgettable experiences - reserve your space!
        </p>
        <!-- <form>
          <input type="text" placeholder="What do you want to learn" />
          <button type="submit">Search Course</button>
        </form> -->
    </div>
    <div class="image__container">
        <img src="<?= ROOT ?>/assets/images/hallBookingimg1.png" alt="header" />
        <img src="<?= ROOT ?>/assets/images/hallBookingimg2.png" alt="header" />
        <!-- <div class="image__content">
          <ul>
            <li>Get 30% off on every 1st month</li>
            <li>Expert teachers</li>
          </ul>
        </div> -->
    </div>
</section>
<div class="bottom">

    <div class="container-bottom">

        <div class="product-details">

            <h1>HALL 1</h1>


            <p class="information">" Let's spread the joy , here is Christmas , the most awaited day of the year.Christmas Tree is what one need the most. Here is the correct tree which will enhance your Christmas.</p>



            <div class="control">

                <button class="btn" onclick="redirectToReservaHall1('HALL01');">
                    <!-- <span class="price">$250</span> -->
                    <!-- <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span> -->
                    <span class="buy">Book now</span>
                </button>

            </div>

        </div>

        <div class="product-image">

            <img src="<?= ROOT ?>/assets/images/Hall1Photo1.jpg" alt="">


            <div class="info">
                <h2> Description</h2>
                <ul>
                    <li><strong>Head Count : </strong>5 Ft </li>
                    <li><strong>Price(1hr) : </strong>Olive green</li>
                    <!-- <li><strong>Decoration: </strong>balls and bells</li>
                    <li><strong>Material: </strong>Eco-Friendly</li> -->

                </ul>
            </div>
        </div>

    </div>




    <div class="container-bottom">

        <div class="product-details">

            <h1>HALL 2</h1>


            <p class="information">" Let's spread the joy , here is Christmas , the most awaited day of the year.Christmas Tree is what one need the most. Here is the correct tree which will enhance your Christmas.</p>



            <div class="control">

                <button class="btn" onclick="redirectToReservaHall1('HALL02');">
                    <!-- <span class="price">$250</span>
                    <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span> -->
                    <span class="buy">Get now</span>
                </button>

            </div>

        </div>

        <div class="product-image">

            <img src="<?= ROOT ?>/assets/images/Hall2Photo1.jpg" alt="">


            <div class="info">
                <h2> Description</h2>
                <ul>
                    <li><strong>Height : </strong>5 Ft </li>
                    <li><strong>Shade : </strong>Olive green</li>
                    <!-- <li><strong>Decoration: </strong>balls and bells</li>
                    <li><strong>Material: </strong>Eco-Friendly</li> -->

                </ul>
            </div>
        </div>

    </div>



    <div class="container-bottom">

        <div class="product-details">

            <h1>THEATRE</h1>


            <p class="information">" Let's spread the joy , here is Christmas , the most awaited day of the year.Christmas Tree is what one need the most. Here is the correct tree which will enhance your Christmas.</p>



            <div class="control">

                <button class="btn" onclick="redirectToReservaHall1('HALL03');">
                    <!-- <span class="price">$250</span>
            <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span> -->
                    <span class="buy">Get now</span>
                </button>

            </div>

        </div>

        <div class="product-image">

            <img src="<?= ROOT ?>/assets/images/Hall3Photo1.jpg" alt="">


            <div class="info">
                <h2> Description</h2>
                <ul>
                    <li><strong>Height : </strong>5 Ft </li>
                    <li><strong>Shade : </strong>Olive green</li>
                    <li><strong>Decoration: </strong>balls and bells</li>
                    <li><strong>Material: </strong>Eco-Friendly</li>

                </ul>
            </div>
        </div>
    </div>
</div>


<script>
    window.onload = function() {
        const urlSearchParams = new URLSearchParams(window.location.search);
        var session = urlSearchParams.get('loggedin');
        document.getElementById('img-profile').style.display = 'none';
        if (session == 'false') {
            document.getElementById('img-profile').style.display = 'none';
            // document.getElementById('login-btn').style.display='none';
        }
        if (session == 'true') {
            // document.getElementById('img-profile').style.display = 'none';
            document.getElementById('img-profile').style.display = 'block';
            document.getElementById('login-btn').style.display = 'none';
        }

    }


    function redirectToReservaHall1(hallNumber) {
        event.preventDefault();


        //   window.location.href = 'reservaSentReq?loggedin=true';

        window.location.href = `reservaHall1?hallno=${hallNumber}&loggedin=true`;
        // window.location.href = `reservaReq?time=${selectedTime}&date=${document.getElementById('selectedDate').innerHTML}`;

    }
</script>

</html>