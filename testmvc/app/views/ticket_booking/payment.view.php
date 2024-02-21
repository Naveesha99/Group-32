
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Multiple Selection with Select Tag</title>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
  <script src="<?=ROOT?>/assets/js/ticket_booking/payment.js"></script>
  <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
  <link rel="stylesheet" href="<?=ROOT?>/assets/css/ticket_booking/payment.css">
</head>


<body>
 

<div id="countdownTimer"></div>

<div id="timer" class="timer"></div>

<form id="paymentForm">
  <div class="container">
      <h3>Enter your correct details</h3>
                     
      <label for="name"><b>Name</b></label><br>
      <input type="text" placeholder="Enter Name" name="username" id="name">

      <label for="email"><b>Email</b></label><br>
      <input type="email" placeholder="Enter working Email" name="email" id="email">


      <label for="mobile"><b>Phone No</b></label><br>
      <input type="number" placeholder="Enter Phone Number" name="phone" id="mobile">


      <?php
                                        // if($data['errors'])
                                        // {
                                        //     for($x=0;$x<count($data['errors']);$x++)
                                        //     {
                                        //         echo '<h5 style="color: red; font-family: Arial; ">'.array_values($data['errors'])[$x].'</h5>';
                                        //     }
                                        // }
                                    ?>

      <div>

      <?php
            if(isset($data['release']))
            {
              // show($data['release']);
      ?>
            <input type="hidden" name="release[]" value="<?php echo htmlspecialchars(json_encode($data['release'])); ?>">
      <?php
            }   
            // show($data['release'][0]);
            // show($data['release'][1]);

  
      ?>                  
            <input type="hidden" name="table" value="<?=$data['release'][0]?>">
            <input type="hidden" name="price" value="<?=$data['release'][1]?>">
      <?php
            $mila = $data['release'][1];
            $data['id'] = $data['release'][2]->id;
      ?>
              
        <button class="registerbtn1" onclick="enablePaymentButton()">CONFIRM YOUR DETAILS</button>
            <br><br><br>
        <button id="paymentButton" class="registerbtn" onclick="pay2(<?php echo $data['id']; ?>);" disabled>Go to Payment</button>
        <!-- <button type="submit" class="registerbtn">Go to Payment</button> -->
    </div>
  </div>
</form>


  <!-- START GATEWAY -->
  <?php

  // show($data['release'][0]);
  // show($data['release'][1]);
     
      // $amount = $data['release'][1];
      // $amount = 5000;
      // $merchant_id = "1225768";
      // $order_id = uniqid();
      // $merchant_secret = "MTAxMDUzMDI0MzQzNjAyODIzNzM4OTkxMjU1MDIwNDM3MTg1MzA=";
      // $currency = "LKR";

      // $hash = strtoupper(
      //     md5(
      //         $merchant_id . 
      //         $order_id . 
      //         number_format($amount, 2, '.', '') . 
      //         $currency .  
      //         strtoupper(md5($merchant_secret)) 
      //     ) 
      // );

      // $array = [];
      // $array["item"]="ABCD";
      // $array["first_name"]="kasun";
      // $array["last_name"]="perera";
      // $array["email"]="kasun@gmail.com";
      // $array["phone"]="0777454545";
      // $array["address"]="120, colombo, sri lanka";
      // $array["city"]="colombo";

      // $array["amount"] = $amount;
      // $array["merchant_id"] = $merchant_id;
      // $array["order_id"] = $order_id;
      // $array["amount"] = $amount;
      // $array["currency"] = $currency;
      // $array["hash"] = $hash;

      // $jsonObj = json_encode($array);

      // echo $jsonObj;
  ?>
        <!-- END GATEWAY -->
          
<!-- ___________________________Enable second button after clicking first button_____________________- -->
<script>
function enablePaymentButton() 
{
    var paymentButton = document.getElementById("paymentButton");
    paymentButton.disabled = false;
}
</script>




<!-- ____________________________ Function to start the timer____________________________ -->

<script>
    function startTimer(duration) 
    {
        var startTime = localStorage.getItem('countdownStartTime');
        if (!startTime) {
            startTime = Date.now();
            localStorage.setItem('countdownStartTime', startTime);
        } else {
            startTime = parseInt(startTime, 10);
        }
        
        var timer = duration - Math.floor((Date.now() - startTime) / 1000);
        updateTimer(timer);
        
        var interval = setInterval(function() {
            timer = duration - Math.floor((Date.now() - startTime) / 1000);
            updateTimer(timer);
            
            if (timer <= 0) {
                clearInterval(interval);
                // Handle timeout here
                console.log('Timeout');
                localStorage.removeItem('countdownStartTime');
            }
        }, 1000);
    }
    
    // Function to update the timer element
    function updateTimer(seconds) {
        var minutes = Math.floor(seconds / 60);
        var remainingSeconds = seconds % 60;
        var timeString = minutes.toString().padStart(2, '0') + ':' +
        remainingSeconds.toString().padStart(2, '0');
        $('#countdownTimer').text('Time remaining: ' + timeString);
    }

    // Call startTimer function with desired duration (in seconds)
    startTimer(60); // 5 minutes (300 seconds)

    // Your existing setTimeout code for AJAX request
    setTimeout(() => {
        var releaseData = <?php echo json_encode($data['release']); ?>;
        var formData = {
            release: JSON.stringify(releaseData)
        };

        $.post("Payment2", formData, function(response) {
            document.write(response);
            if (response === 'seats_released') 
            {
                document.write('Time out. Your selected seats are released');
                window.location = '<?=ROOT?>/seat_map';
            } 
            else 
            {
                console.log('Unexpected response from the server');
            }
        });
    }, 60000);
</script>



<!-- __________________________Do not refresh payment page.(Send form data for update username, email, phone) __________ -->
<script>
$(document).ready(function() 
{
  $('#paymentForm').submit(function(event) {
    // Prevent default form submission
    event.preventDefault();
    
    // Serialize form data
    var formData = $(this).serialize();
    console.log(formData);
    // Send form data asynchronously via AJAX
    $.ajax({
      type: 'POST',
      url: '<?= ROOT ?>/payment', // Update with your server endpoint
      data: formData,
      success: function(response) {
        // Handle successful response here
        console.log(response);
        // Optionally, update UI or display success message
      },
      error: function(xhr, status, error) {
        // Handle error
        console.error(error);
      }
    });
  })});
</script>

<script type="text/javascript">
  window.addEventListener('beforeunload',()=>{
    event.preventDefault();
    event.returnValue = "";
  })

</script>

</body>
</html>