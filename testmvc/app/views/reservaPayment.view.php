<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= ROOT ?>/assets/css/reservaPaymentNew.css" rel="stylesheet">
    <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
    <!-- <script ype="text/javascript" src="<?= ROOT ?>/assets/js/payhere.js"></script> -->
    <!-- <script src="/js/ReservaHall1.js"></script> -->
    <!-- <link rel="stylesheet" href="<?= ROOT ?>/assets/css/cl.css"> -->
    <!-- <script src="<?= ROOT ?>/assets/js/reservaReqModal.js" defer></script> -->

    <title>Admin Panel</title>

    <style>
        .tile {
            position: relative;
        }
    </style>

</head>
<!-- <?php //require_once 'reservaNavBar.php' ?> -->
<?php if (isset($_SESSION['USER'])) {
        require_once 'reservaNavBarAfter.php';
    } else {
        require_once 'reservaNavBar.php';
    } ?>

<body>
  <div class="container">
    <div class="model">
      <div class="room">
        <div class="text-cover">
          <h1>Request Id : </h1>
          <h1 class="id"> <?php echo $data['detailsofReq']['id']; ?></h1>
          <h1 class="Hallid"> <?php echo $data['detailsofReq']['hall']; ?></h1>
          <p class="price">Rs.<?php echo $detailsofhall[0]->amountOneHour;?> / One Hour  </p>
          <hr>
            <p class="hall">Entire Hall for <span class="hcount"><?php echo $data['detailsofReq']['hcount']; ?></span> guest</p>
            <p> <?php echo $data['detailsofReq']['date']; ?> 
            </p>
            <p>From <?php echo $data['detailsofReq']['startTime']; ?> To <?php echo $data['detailsofReq']['endTime']; ?></p>
          </div>
        </div>

      <div class="payment">
        <div class="receipt-box">
          <h3>Reciept Summary</h3>
          <table class="table">
            <tr>
              <td class="detail1">
              <?php echo $detailsofhall[0]->amountOneHour;?> * <?php echo $data['detailsofReq']['hours']; ?>
              </td>
            </tr>
        
            <tfoot>
              <tr>
                <td>Sum</td>
                <td class="sum"> Rs.
                <?php echo $data['detailsofReq']['amount']; ?>
                  <!-- $180 -->
                </td>
              </tr>
            </tfoot>
          </table>
        </div>
        <div class="payment-info">
          <h3>Pesonal Info</h3>
            <form>
              <label>Name</label>
              <input type="text" name="firstname" value=" ">
              <label>Mobile Number</label>
              <input type="text" name="lastname" value=" ">
              <br><br>
              <?php $data1['id']= $data['detailsofReq']['id']; ?>
              <input class="btn" onclick="pay2(<?php echo $data1['id']; ?>)" value="Book Securly">
            </form>
        </div>
      </div>
    </div>
  </div>














  <body>
  <section class="booking-container">
    <header class="booking-title">Complete Your Booking</header>
    <section class="booking-details">
      <div class="hall-details">
        <!-- <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/625cea8462c5892500036276520148e15ec393fd0b520fbdb94938f4027b7a6a?apiKey=dea1212f91cd47c4a8da71d9bc446936&" alt="Community Hall" class="hall-image" /> -->
        <div class="hall-info">
          <div class="hall-name"><?php echo $data['detailsofReq']['hall']; ?></div>
          <p class="price">Rs.<?php echo $detailsofhall[0]->amountOneHour;?> / One Hour  </p>

          <div>Request ID: <?php echo $data['detailsofReq']['id']; ?> </div>
          <div>Address: 1 Hacker Way, Menlo Park, CA 94025</div>
        </div>
      </div>
      <div class="booking-price"> <?php echo $data['detailsofReq']['amount']; ?> </div>
    </section>
    <section class="session-details">
      <div>Date: <?php echo $data['detailsofReq']['date']; ?>  </div>
      <div>Time: <?php echo $data['detailsofReq']['startTime']; ?> <?php echo $data['detailsofReq']['endTime']; ?> </div>
      <div>Duration:<?php echo $data['detailsofReq']['hours']; ?></div>
      <div>Hall ID:<?php echo $data['detailsofReq']['hall']; ?> </div>
    </section>
    <section class="guests-details">
      <div>Guests: <?php echo $data['detailsofReq']['hcount']; ?></div>
      <div>Standings: Yes</div>
      <div>Sounds: Yes</div>
    </section>
    <section class="promo-code-section">
      <div>Add a promo code</div>
      <!-- <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/2907024eb1cf3988fc9da497ef2666e39917755e18de83929e9d978b69a8ba41?apiKey=dea1212f91cd47c4a8da71d9bc446936&" alt="" class="promo-icon" /> -->
    </section>

    <section>
        <div class ="dea">
            <div class="subtotal-label">Subtotal</div>
            <div class="subtotal-amount"><?php echo $data['detailsofReq']['amount']; ?></div>
        </div>
        <div class ="deb">
            <div class="promo-label">Promo Code</div>
            <div class="promo-amount">-</div>
        </div>
      <div class= "dec">
            <div class="total-label">Total</div>
            <div class="total-amount"><?php echo $data['detailsofReq']['amount']; ?></div>
      </div>
    </section>
    <div class="payment-button">Proceed to Payment</div>
  </section>

<body>










</body> 







<!-- 



<body>
  <section class="booking-container">
    <header class="booking-title">Complete Your Booking</header>
    <section class="booking-details">
      <div class="hall-details">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/625cea8462c5892500036276520148e15ec393fd0b520fbdb94938f4027b7a6a?apiKey=dea1212f91cd47c4a8da71d9bc446936&" alt="Community Hall" class="hall-image" />
        <div class="hall-info">
          <div class="hall-name">Community Hall</div>
          <div>Request ID: 1</div>
          {% comment %} <div>Details: Community Center</div> {% endcomment %}
          <div>Address: 1 Hacker Way, Menlo Park, CA 94025</div>
        </div>
      </div>
      <div class="booking-price">$1500</div>
    </section>
    <section class="session-details">
      <div>Date: October 31, 2023</div>
      <div>Time: 11:00 AM - 2:00 PM</div>
      <div>Duration: 3 hours</div>
      <div>Hall ID: H 123</div>
    </section>
    <section class="guests-details">
      <div>Guests: 100</div>
      <div>Setup: Yes</div>
      <div>Clean up: Yes</div>
    </section>
    <section class="promo-code-section">
      <div>Add a promo code</div>
      <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/2907024eb1cf3988fc9da497ef2666e39917755e18de83929e9d978b69a8ba41?apiKey=dea1212f91cd47c4a8da71d9bc446936&" alt="" class="promo-icon" />
    </section>

    <section>
        <div class ="dea">
            <div class="subtotal-label">Subtotal</div>
            <div class="subtotal-amount">$1500</div>
        </div>
        <div class ="deb">
            <div class="promo-label">Promo Code</div>
            <div class="promo-amount">- $150</div>
        </div>
      <div class= "dec">
            <div class="total-label">Total</div>
            <div class="total-amount">$1350</div>
      </div>
    </section>
    <div class="payment-button">Proceed to Payment</div>
  </section>

<body> -->












<?//php echo $data[]; ?>

<script>
  // const detailsofhall = <?//php echo json_encode($detailsofhall);?>;
  const detailsofReq = <?php echo json_encode($detailsofReq);?>;
  console.log("detailsofhall");
  // console.log(detailsofhall);
  console.log("detailsofReq");
  console.log(detailsofReq);
  // document.querySelector('.price').innerText = detailsofhall[0].amountOneHour;
  document.querySelector('.hcount').innerText = detailsofReq.hcount;

var model = document.querySelector(".model");

function fadeIn () {
  console.log('fadein')
  model.className += " fadeIn";
}

// __________________PAYMENTGETWAY____________________________
function pay2(id)
{
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = ()=>{
      if(xhttp.readyState == 4 && xhttp.status == 200)
      {
          alert(xhttp.responseText);
          var obj = JSON.parse(xhttp.responseText);
          // Payment completed. It can be a successful failure.
          payhere.onCompleted = function onCompleted(orderId) 
          {
            console.log("Payment completed. OrderID:" + orderId);
         // Note: validate the payment and show success or failure page to the customer
          };

            // Payment window closed
            payhere.onDismissed = function onDismissed() 
            {
                // Note: Prompt user to pay again or show an error page
                console.log("Payment dismissed");
            };

            // Error occurred
            payhere.onError = function onError(error) 
            {
                // Note: show an error page
                console.log("Error:"  + error);
            };

            // Put the payment variables here
  var payment = {
      "sandbox": true,
      "merchant_id": "1225768",    // Replace your Merchant ID
      "return_url": "http://localhost/Group-32/testmvc/public/ReservaPayment",     // Important
      "cancel_url": "http://localhost/Group-32/testmvc/public/ReservaPayment",     // Important
      "notify_url": "http://sample.com/notify",
      "order_id": obj["order_id"],
      "items": obj["item"],
      "amount": obj["amount"],
      "currency": obj["currency"],
      "hash": obj["hash"], // *Replace with generated hash retrieved from backend
      "first_name": obj["name"],
      "last_name": obj["last_name"],
      "email": obj["email"],
      "phone": obj["phone"],
      "address": "No.1, Galle Road",
      "city": "Colombo",
      "country": "Sri Lanka",
      "delivery_address": "No. 46, Galle road, Kalutara South",
      "delivery_city": "Kalutara",
      "delivery_country": "Sri Lanka",
      "custom_1": "",
      "custom_2": ""
  };

       payhere.startPayment(payment);
      }
  };
  xhttp.open("GET","pay3?id=" + id,true);
  xhttp.send();
}
// _________________________________________________________________


</script>




</html>


































