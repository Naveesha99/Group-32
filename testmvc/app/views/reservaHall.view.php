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


<!-- <?//php show($data); ?> -->


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
  
   -->
</section>
<!-- 
<div class="item">
  <div class="column img-wrapper">
    <picture>
      <img src="<?= ROOT ?>/assets/images/Hall3Photo1.jpg"  class="img-responsive lazy mobile-optimized" alt="" title="">

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
</div> -->






<?php 
$counter = 0; // Initialize a counter variable

foreach ($data['halls'] as $hall): 
      $class = ($counter % 2 == 0) ? 'item' : 'item-type2'; 
      ?>
    <!-- <div class="item"> -->
    <div class="<?= $class ?>">

        <div class="column img-wrapper">
            <picture>
                <img src="<?= ROOT ?>/assets/images/Upload/halls/<?= $hall->image ?>" class="img-responsive lazy mobile-optimized" alt="<?= $hall->hallno ?>" title="<?= $hall->hallno ?>">
            </picture>
        </div>
        <div class="column content-wrapper">
            <div class="title"><?= $hall->hallno ?></div>
            <div class="sub-title"> Head Count : <?= $hall->headCount ?></div>

            <div class="desc"><?= $hall->content ?></div>
            <div class="btn-wrapper"> 
                <button class="viewandbook" onclick="redirectToReservaHallview('<?= $hall->hallno ?>');"> VIEW MORE</button>
                <button class="viewandbook" onclick="redirectToReservaHall1('<?= $hall->hallno ?>');">BOOK NOW</button>
                <a href="" class="link"></a>
            </div>
        </div>
    </div>
<?php 
// Increment the counter
$counter++;
endforeach; ?>



<section class="services">
  <div class="abc">
    <h1 class="heading-title"> Find the Best Meeting Room </h1>
    <span class="features">Enjoy these complimentary meeting facilities when you book any one of our function rooms. </span>
  </div>
  <div class="box-container">

    <!-- <div class="box">
      <img src="<?= ROOT ?>/assets/images/air.png" alt="">
      <h3>Air Conditioning</h3>
    </div>

    <div class="box">
      <img src="<?= ROOT ?>/assets/images/wifi.png" alt="">
      <h3>WiFi</h3>
    </div> -->

    <?php foreach ($facilities as $facility) : ?>
    <div class="box">
        <img src="<?= ROOT ?>/assets/images/Upload/facilities/<?= $facility->icon ?>" alt="<?= $facility->name ?>">
        <h3><?= $facility->name ?></h3>
    </div>
<?php endforeach; ?>


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
    event.preventDefault();

    window.location.href = `reservaHallview?hallno=${hallNumber}&loggedin=true`;

  }
</script>

</html>