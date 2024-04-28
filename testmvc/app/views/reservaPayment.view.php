<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= ROOT ?>/assets/css/reservaPaymentNew.css" rel="stylesheet">
    <link href="<?= ROOT ?>/assets/css/reservaPaymentForm.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- <link href="<?= ROOT ?>/assets/css/reservaPayment.css" rel="stylesheet"> -->

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
  

<ul class="breadcrumb">
            <li>
                <a href="<?= ROOT ?>/reservasentreq">Sent Requests</a>
            <li>
            <i class='bx bx-chevron-right'> > </i>

            <li>
            <a href="#" class="active">Payment</a>
                
            </li>

        </ul> 

 <!-- <div class="container"> -->
    <!-- <div class="model">
      <div class="room">
        <div class="text-cover">
          <h1>Request Id : </h1>
          <h1 class="id"> <?//php echo $data['detailsofReq']['id']; ?></h1>
          <h1 class="Hallid"> <?//php echo $data['detailsofReq']['hall']; ?></h1>
          <p class="price">Rs.<?//php echo $detailsofhall[0]->amountOneHour;?> / One Hour  </p>
          <hr>
            <p class="hall">Entire Hall for <span class="hcount"><?//php echo $data['detailsofReq']['hcount']; ?></span> guest</p>
            <p> <?//php echo $data['detailsofReq']['date']; ?> 
            </p>
            <p>From <?//php echo $data['detailsofReq']['startTime']; ?> To <?//php echo $data['detailsofReq']['endTime']; ?></p>
          </div>
        </div> -->
      <!-- <div class="payment"> -->
        <!-- <div class="receipt-box">
          <h3>Reciept Summary</h3>
          <table class="table">
            <tr>
              <td class="detail1">
              <?//php echo $detailsofhall[0]->amountOneHour;?> * <?//php echo $data['detailsofReq']['hours']; ?>
              </td>
            </tr>
            <tfoot>
              <tr>
                <td>Sum</td>
                <td class="sum"> Rs.
                <?//php echo $data['detailsofReq']['amount']; ?>
                </td>
              </tr>
            </tfoot>
          </table>
        </div> -->
        <!-- <div class="payment-info">
          <h3>Pesonal Info</h3>
            <form>
              <label>Name</label>
              <input type="text" name="firstname" value=" ">
              <label>Mobile Number</label>
              <input type="text" name="lastname" value=" ">
              <br><br>
              <?//php $data1['id']= $data['detailsofReq']['id']; ?>
              <input class="btn" onclick="pay2(<?//php echo $data1['id']; ?>)" value="Book Securly">
            </form>
        </div> -->
      <!-- </div> -->
    <!-- </div> -->
  <!-- </div>  -->














  <div class="body1">
  <section class="booking-container">
    <header class="booking-title">Complete Your Booking</header>
    <section class="booking-details">
      <div class="hall-details">
        <img loading="lazy" src="<?= ROOT ?>/assets/images/ImgHall.png" alt="Community Hall" class="hall-image" />
        <div class="hall-info">
          <div class="hall-name"><?php echo $data['detailsofReq']['hall']; ?></div>
          <p class="price">Rs.<?php echo $detailsofhall[0]->amountOneHour;?> / One Hour  </p>

          <div>Request ID: <?php echo $data['detailsofReq']['id']; ?> </div>
          <div>Address: Punchi Theatre, Borella</div>
        </div>
      </div>
      <!-- <div class="booking-price"> <?//php echo $data['detailsofReq']['amount']; ?> </div> -->
    </section> 
    <section class="session-details">
    <div class="a">Hall Name: <div class="b"><?php echo $data['detailsofReq']['hall']; ?> </div></div>
      <div class="a">Date: <div class="b"><?php echo $data['detailsofReq']['date']; ?> </div> </div>
      <div class="a">Time: <div class="b"><?php echo $data['detailsofReq']['startTime']; ?> - <?php echo $data['detailsofReq']['endTime']; ?> </div></div>
      <div class="a">Duration: <div class="b"><?php echo $data['detailsofReq']['hours']; ?> hrs</div></div>
      <div class="a">Guests:  <div class="b"><?php echo $data['detailsofReq']['hcount']; ?></div></div>
    </section>

    <section class="guests-details">

    <div class="a">Hall:  
        <div class="b">
        <?php echo $data['detailsofReq']['hours'] * $data['detailsofhall'][0]->amountOneHour; ?>
      </div>
    </div>
      <!-- <div class="a">Standings:  <div class="b"><?php echo $data['detailsofReq']['standings']; ?></div></div> -->
      <div class="a">Standings:  
        <div class="b">
        <?php if($data['detailsofReq']['standings'] == "YES")
              echo $data['detailsofhall'][0]->amountStandings;
              else
              echo "NO"?>
      </div>
    </div>


      <!-- <div class="a">Sounds:  <div class="b"><?php echo $data['detailsofReq']['sounds']; ?></div></div> -->
      <div class="a">Sounds:  
        <div class="b">
        <?php if($data['detailsofReq']['sounds'] == "YES")
              echo $data['detailsofhall'][0]->amountSounds;
              else
              echo "NO"?>
      </div>
    </div>
    </section>

    <!-- <section class="guests-details">
      <div>Guests: <?//php echo $data['detailsofReq']['hcount']; ?></div>
      <div>Standings: Yes</div>
      <div>Sounds: Yes</div>
    </section> -->
    <!-- <section class="promo-code-section">
      <div>Add a promo code</div>
      <img loading="lazy" src="<?= ROOT ?>/assets/images/searchIcon.png" alt="" class="promo-icon" />
    </section> -->

    <section class="final">
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
    <!-- <div class="payment-button">Proceed to Payment</div> -->
  </section>

        <!-- <div class="details"> -->
          <div class="modal">

          <!-- <div class="payment-info"> -->

            <!-- <h3>Pesonal Info</h3> -->
            <div class="separator">
              <hr class="line">
              <p>Enter Your Details</p>
              <hr class="line">
            </div>
            <div class="credit-card-info--form">

            <!-- <form> -->

            <form  method="POST"  class="form-checkout" id="Form" >
            <!-- 
              <input type="number" name="reqid" value="<?php echo $data['detailsofReq']['id']; ?>">
              <input type="number" name="ispaid" value="0"> -->
              <input type="hidden" name="reqid" value="<?php echo $data['detailsofReq']['id']; ?>">
              <input type="hidden" name="ispaid" value="0">


              <!-- <label>Full Name</label> -->
              <!-- <input type="text" name="fullname" value=" "> -->
              <div class="input_container">
                <label for="Full Name" class="input_label">Full name</label>
                <input type="text" id="fullname" class="input_field" name="fullname" title="Inpit title" placeholder="Enter your full name">
              </div>

              <!-- <label>Mobile Number</label>
              <input type="text" name="mobile" value=" "> -->
              <div class="input_container">
                <label for="mobile" class="input_label">Mobile Number</label>
                <input id="mobile" class="input_field" type="text" name="mobile" title="Inpit title" placeholder="Enter your mobile number">
              </div>

              <!-- <label>Email</label>
              <input type="text" name="email" value=" "> -->
              <div class="input_container">
                <label for="email" class="input_label">Email</label>
                <input id="email" class="input_field" type="text" name="email" title="Expiry Date" placeholder="Enter your email">
              </div>
              <br><br>
              <?php $data1['id']= $data['detailsofReq']['id']; ?>
              <!-- <input class="btn" onclick="pay2(<?php echo $data1['id']; ?>)" value="Book Securly"> -->
              <button type="submit" class="purchase--btn">Book Securly</button>

            </form>
            </div>
          </div>
        </div>

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



<script>
  
  // const detailsofhall = <?//php echo json_encode($detailsofhall);?>;
  const detailsofReq = <?php echo json_encode($detailsofReq);?>;
  console.log("detailsofhall");
  // console.log(detailsofhall);
  console.log("detailsofReq");
  console.log(detailsofReq);
  console.log(detailsofReq['id']);

  // document.querySelector('.price').innerText = detailsofhall[0].amountOneHour;
  // document.querySelector('.hcount').innerText = detailsofReq.hcount;

var model = document.querySelector(".model");

function fadeIn () {
  console.log('fadein')
  model.className += " fadeIn";
}

// __________________PAYMENTGETWAY____________________________
function pay2(id)
{
  // console.log("pay2");
  // console.log(id);
  let id1=id;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = ()=>{
      if(xhttp.readyState == 4 && xhttp.status == 200)
      {
          // alert(xhttp.responseText);
          var obj = JSON.parse(xhttp.responseText);
          // Payment completed. It can be a successful failure.
          payhere.onCompleted = function onCompleted(orderId) 
          {
            // console.log("Payment completed. OrderID:" + obj["order_id"] +""+ orderId);
            paymentSuccess(orderId);
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
  //END paymentgatway
}
// _________________________________________________________________


function paymentSuccess(orderId){

  console.log("Payment completed. OrderID:" + orderId);

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = ()=>{
      if(xhttp.readyState == 4 && xhttp.status == 200)
      {
          alert(xhttp.responseText);
          var obj = JSON.parse(xhttp.responseText);
          console.log("sdfsdfsdf"+obj);

          sessionStorage.setItem('order_id', orderId);
          // window.location.href = "<?php echo ROOT ?>/reservaQR?pay_id=" + orderId;
          window.location.href = "<?php echo ROOT ?>/reservaQR1";
      }
  };
  xhttp.open("GET","pay3?pay_id=" + orderId,true);
  xhttp.send();
}
</script>








<script>

//ajax for updating order
let updateOrderForm = document.querySelector(".form-checkout");
        updateOrderForm.addEventListener('submit', function(event){
            event.preventDefault();
            var x=validate();
            console.log("XXXXXXXXXXXXX");
          console.log(x);
            if(!x){
                return;
                console.log("Form not submitted");
            }
            else{
            console.log("Form submitted");
            let formData = new FormData(updateOrderForm);
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "<?php echo ROOT ?>/reservaPayment", true);
            xhr.onload = function() {
                if(this.status == 200) {
                        console.log("Order updated successfully");
                        console.log(detailsofReq['id']);
                        var id=detailsofReq['id'];
                        // $data['detailsofReq']['id'];
                        // pay2(<?//php echo $data['detailsofReq']['id']; ?>);
                        
                        pay2(id);
                }
            }

            xhr.send(formData);
          }
        });



        function validate(){
            let fullname = document.querySelector('input[name="fullname"]').value;
            let mobile = document.querySelector('input[name="mobile"]').value;
            let email = document.querySelector('input[name="email"]').value;

            if(fullname == ""){
                alert("Full name is required");
                return false;
            }

            if(mobile == ""){
                alert("Mobile is required");
                return false;
            } else if(!mobile.match(/^[0-9]{10}$/)){
                alert("Mobile is not valid");
                return false;
            }

            if(email == ""){
                alert("Email is required");
                return false;
            } else if(!email.match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/)){
                alert("Email is not valid");
                return false;
            }

            return true;
        }


</script>




</html>