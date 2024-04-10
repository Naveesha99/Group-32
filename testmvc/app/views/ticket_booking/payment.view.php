
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
      <input type="text" placeholder="Enter Name" name="username" id="name"><br>

      <label for="email"><b>Email</b></label><br>
      <input type="email" placeholder="Enter working Email" name="email" id="email"><br>


      <label for="mobile"><b>Phone No</b></label><br>
      <input type="number" placeholder="Enter Phone Number" name="phone" id="mobile"><br>


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
      ?>                  
            <input type="hidden" name="table" value="<?=$data['release'][0]?>">
            <input type="hidden" name="price" value="<?=$data['release'][1]?>">
      <?php

            $data['id'] = $data['release'][2]->id;
            $data['table'] = $data['release'][0];
            // show($data['id']);
            // show($data['table']);

            // show($data['table']);
      ?>
              
        <button class="registerbtn1" onclick="enablePaymentButton()">CONFIRM YOUR DETAILS</button>
            <br><br><br>
            <button id="paymentButton" class="registerbtn" onclick="pay2(<?php echo $data['id']; ?> ,'<?php echo $data['table']; ?>')" disabled>Go to Payment</button>
    </div>
  </div>
</form>



          
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
</script>

<script>
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
                window.location = '<?=ROOT?>/select_drama';
            } 
            else 
            {
                console.log('Unexpected response from the server');
            }
        });
    }, 300000);
</script>



 <!-- (2)__________________________Do not refresh payment page.(Send form data for update username, email, phone) __________  -->
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