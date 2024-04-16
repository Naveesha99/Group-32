<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?= ROOT ?>/assets/css/reservaHall.css" rel="stylesheet">

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
    <!-- <img src="<?= ROOT ?>/assets/images/hallBookingimg1.png" alt="header" /> -->
    <!-- <img src="<?= ROOT ?>/assets/images/hallBookingimg2.png" alt="header" /> -->
    <img src="<?= ROOT ?>/assets/images/book-anywhere.png" alt="header" />

    <!-- <div class="image__content">
          <ul>
            <li>Get 30% off on every 1st month</li>
            <li>Expert teachers</li>
          </ul>
        </div> -->
  </div>
</section>
<div class="bottom">
  <!-- <div class="container-bottom">
    <div class="product-image">
      <img src="<?= ROOT ?>/assets/images/Hall1Photo1.jpg" alt="">
      <div class="info">
        <h2> Description</h2>
        <ul>
          <li><strong>Head Count : </strong>5 Ft </li>
          <li><strong>Price(1hr) : </strong>Olive green</li>
        </ul>
      </div>
    </div>

    <div class="product-details">
      <h1>HALL 1</h1>
      <p class="information">" Let's spread the joy , here is Christmas , the most awaited day of the year.Christmas Tree is what one need the most. Here is the correct tree which will enhance your Christmas.</p>
      <div class="control">
        <button class="btn" onclick="redirectToReservaHall1('HALL01');">
        <span class="buy">Book now</span>
        </button>
      </div>
    </div>
  </div> -->

  <!-- <div class="container-bottom">
    <div class="product-details">
      <h1>HALL 2</h1>
      <p class="information">" Let's spread the joy , here is Christmas , the most awaited day of the year.Christmas Tree is what one need the most. Here is the correct tree which will enhance your Christmas.</p>
      <div class="control">
        <button class="btn" onclick="redirectToReservaHall1('HALL02');">
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
        </ul>
      </div>
    </div>
  </div> -->

<!-- 

  <div class="container-bottom">
    <div class="product-details">
      <h1>THEATRE</h1>
      <p class="information">" Let's spread the joy , here is Christmas , the most awaited day of the year.Christmas Tree is what one need the most. Here is the correct tree which will enhance your Christmas.</p>
      <div class="control">
        <button class="btn" onclick="redirectToReservaHall1('HALL03');">
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
  </div> -->
</div>

<!-- <section class="articles">
  <article>
    <div class="article-wrapper">
      <figure>
        <img src="https://picsum.photos/id/1011/800/450" alt="" />
      </figure>
      <div class="article-body">
        <h2>This is some title</h2>
        <p>
          Curabitur convallis ac quam vitae laoreet. Nulla mauris ante, euismod sed lacus sit amet, congue bibendum eros. Etiam mattis lobortis porta. Vestibulum ultrices iaculis enim imperdiet egestas.
        </p>
        <a href="#" class="read-more">
          Read more <span class="sr-only">about this is some title</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </article>
  <article>

    <div class="article-wrapper">
      <figure>
        <img src="https://picsum.photos/id/1005/800/450" alt="" />
      </figure>
      <div class="article-body">
        <h2>This is some title</h2>
        <p>
          Curabitur convallis ac quam vitae laoreet. Nulla mauris ante, euismod sed lacus sit amet, congue bibendum eros. Etiam mattis lobortis porta. Vestibulum ultrices iaculis enim imperdiet egestas.
        </p>
        <a href="#" class="read-more">
          Read more <span class="sr-only">about this is some title</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </article>
  <article>

    <div class="article-wrapper">
      <figure>
        <img src="https://picsum.photos/id/103/800/450" alt="" />
      </figure>
      <div class="article-body">
        <h2>This is some title</h2>
        <p>
          Curabitur convallis ac quam vitae laoreet. Nulla mauris ante, euismod sed lacus sit amet, congue bibendum eros. Etiam mattis lobortis porta. Vestibulum ultrices iaculis enim imperdiet egestas.
        </p>
        <a href="#" class="read-more">
          Read more <span class="sr-only">about this is some title</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </article> -->
</section>

<div class="item">
  <div class="column img-wrapper">
    <picture>
      <!-- <source media="(max-width: 767px)" srcset="https://www.anscom.lk/wp-content/uploads/2023/02/For-the-Workplace-of-the-Future-800x400-1.webp">   -->
      <img src="<?= ROOT ?>/assets/images/Hall3Photo1.jpg" data-src="https://www.anscom.lk/wp-content/uploads/2023/02/For-the-Workplace-of-the-Future-1360x900-1.webp" class="img-responsive lazy mobile-optimized" alt="" title="">

    </picture>
  </div>
  <div class="column content-wrapper">
    <div class="sub-title">For the Workplace of the Future </div>
    <div class="title">Effortless software integration and device compatibility </div>
    <div class="desc">Fitted with all features that a corporate would need, from customizable display themes for Apple, Android and Amazon Fire to plugin integrations for Google Chrome and Outlook. Our systems also include software integration of Google Workplace, Microsoft Exchange and Microsoft Office 365. </div>
    <div class="btn-wrapper"> 
      <button class="viewandbook"> VIEW MORE</button>
      <button class="viewandbook" onclick="redirectToReservaHall1('HALL01');">BOOK NOW</button>
      <a href="" class="link"></a>
    </div>
  </div>
</div>

<div class="item-type2">
  <div class="column img-wrapper">
    <picture>
      <!-- <source media="(max-width: 767px)" srcset="https://www.anscom.lk/wp-content/uploads/2023/02/For-the-Workplace-of-the-Future-800x400-1.webp">   -->
      <img src="<?= ROOT ?>/assets/images/Hall2Photo1.jpg" data-src="https://www.anscom.lk/wp-content/uploads/2023/02/For-the-Workplace-of-the-Future-1360x900-1.webp" class="img-responsive lazy mobile-optimized" alt="" title="">

    </picture>
  </div>
  <div class="column content-wrapper-wrap-mid">
    <div class="sub-title">For the Workplace of the Future </div>
    <div class="title">Effortless software integration and device compatibility </div>
    <div class="desc">Fitted with all features that a corporate would need, from customizable display themes for Apple, Android and Amazon Fire to plugin integrations for Google Chrome and Outlook. Our systems also include software integration of Google Workplace, Microsoft Exchange and Microsoft Office 365. </div>
    <div class="btn-wrapper"> 
      <button class="viewandbook" onclick="redirectToReservaHallview('HALL02');"> VIEW MORE</button>
      <button class="viewandbook" onclick="redirectToReservaHall1('HALL02');">BOOK NOW</button>
      <a href="" class="link"></a>
    </div>
  </div>
</div>


<div class="item">
  <div class="column img-wrapper">
    <picture>
      <!-- <source media="(max-width: 767px)" srcset="https://www.anscom.lk/wp-content/uploads/2023/02/For-the-Workplace-of-the-Future-800x400-1.webp">   -->
      <img src="<?= ROOT ?>/assets/images/Hall1Photo1.jpg" 
      class="img-responsive lazy mobile-optimized" 
      alt="" title="">
      <!-- data-src="https://www.anscom.lk/wp-content/uploads/2023/02/For-the-Workplace-of-the-Future-1360x900-1.webp"  -->


    </picture>
  </div>
  <div class="column content-wrapper">
    <div class="sub-title">For the Workplace of the Future </div>
    <div class="title">Effortless software integration and device compatibility </div>
    <div class="desc">Fitted with all features that a corporate would need, from customizable display themes for Apple, Android and Amazon Fire to plugin integrations for Google Chrome and Outlook. Our systems also include software integration of Google Workplace, Microsoft Exchange and Microsoft Office 365. </div>
    
    <div class="btn-wrapper"> 
      <button class="viewandbook" > VIEW MORE</button>
      <button class="viewandbook" onclick="redirectToReservaHall1('HALL03');">BOOK NOW</button>
      <a href="" class="link"></a>
    </div>
  </div>
</div>

<section class="services">
  <div class="abc">
    <h1 class="heading-title"> Find the Best Meeting Room </h1>
    <span class="features">Enjoy these complimentary meeting facilities when you book any one of our function rooms. </span>
  </div>
  <div class="box-container">

    <div class="box">
      <img src="<?= ROOT ?>/assets/images/air.png" alt="">
      <h3>Air Conditioning</h3>
    </div>

    <div class="box">
      <img src="<?= ROOT ?>/assets/images/projector.png" alt="">
      <h3>Projectors</h3>
    </div>

    <div class="box">
      <img src="<?= ROOT ?>/assets/images/charging.png" alt="">
      <h3>Charging Points</h3>
    </div>

    <div class="box">
      <img src="<?= ROOT ?>/assets/images/parking.png" alt="">
      <h3>Parking</h3>
    </div>

    

  </div>

</section>
<?php require_once 'reservaFooter1.php' ?>


<script>
  window.onload = function() {
    const urlSearchParams = new URLSearchParams(window.location.search);
    // var session = urlSearchParams.get('loggedin');
    // document.getElementById('img-profile').style.display = 'none';
    // if (session == 'false') {
    // document.getElementById('img-profile').style.display = 'none';
    // document.getElementById('login-btn').style.display='none';
  }
  // if (session == 'true') {
  // document.getElementById('img-profile').style.display = 'none';
  // document.getElementById('img-profile').style.display = 'block';
  // document.getElementById('login-btn').style.display = 'none';
  // }

  // }


  function redirectToReservaHall1(hallNumber) {
    event.preventDefault();


    //   window.location.href = 'reservaSentReq?loggedin=true';

    window.location.href = `reservaHall1?hallno=${hallNumber}&loggedin=true`;
    // window.location.href = `reservaReq?time=${selectedTime}&date=${document.getElementById('selectedDate').innerHTML}`;

  }

  function redirectToReservaHallview(hallNumber){
    window.location.href = `reservaHallview?hallno=${hallNumber}&loggedin=true`;

  }
</script>

</html>