
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form validation</title>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
  <script src="<?=ROOT?>/assets/js/ticket_booking/payment.js"></script>
  <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
  <link rel="stylesheet" href="<?=ROOT?>/assets/css/ticket_booking/payment.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>


<body>
 
<div class="container">



    <form id="paymentForm">
      
          <h1>Contact Details</h1>

          You selected
          <?php
                if(isset($data['release']))
                {
                  // show($data['release'][2]);
                  for($i=2; $i<count($data['release']); $i++)
                  { 
         
                    echo $data['release'][$i]->seat_id.' ' ;
          
                  }
                }   
          ?> 
          seats are ready to payment.


          <!-- <div id="countdownTimer"></div>
          <div id="timer" class="timer"></div> -->
          <div id="timer">Timer: 6:50</div>


          <div class="input-control">
            <label for="username"><b>Name</b></label><br>
            <input type="text" placeholder="Enter Name" name="username" id="username"><br>
            <div class="error"></div>
          </div>

          <div class="input-control">
            <label for="email"><b>Email</b></label><br>
            <input type="text" placeholder="Enter working Email" name="email" id="email"><br>
            <div class="error"></div>
          </div>

          <div class="input-control">
            <label for="phone"><b>Phone No</b></label><br>
            <input type="text" placeholder="Enter Phone Number" name="phone" id="phone"><br>
            <div class="error"></div>
          </div>
                
          <div>

          <?php
                if(isset($data['release']))
                {

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
            
          ?>
          <!-- onclick="enablePaymentButton()" -->
                  
            <button class="registerbtn1" type="submit" >CONFIRM YOUR DETAILS</button>
                <br><br><br>
            <button id="paymentButton" class="registerbtn2" onclick="pay2(<?php echo $data['id']; ?> ,'<?php echo $data['table']; ?>')" disabled>Go to Payment</button>
        </div>
    
    </form>

</div>

<!--________________________ username , email , phone VALIDATION_________________________ -->
<script>
const form = document.getElementById('paymentForm');
const username = document.getElementById('username');
const email = document.getElementById('email');
const phone = document.getElementById('phone');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')

    // Disable the payment button if there are validation errors
    paymentButton.disabled = true;
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');

    // Enable the payment button if all inputs are valid
    if (username.parentElement.classList.contains('success') &&
        email.parentElement.classList.contains('success') &&
        phone.parentElement.classList.contains('success')) {
        paymentButton.disabled = false;
    }
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const phoneValue = phone.value.trim();
    

    if(usernameValue === '') {
        setError(username, 'Your name is required');
    } else {
        setSuccess(username);
    }


    if(emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } 
    else {
        setSuccess(email);
    }


    if(phoneValue === '') {
        setError(phone, 'Mobile number is required');
    } else if (phoneValue.length != 10 ) {
        setError(phone, 'Enter valid phone number')
    } else {
        setSuccess(phone);
    }

};
</script>
          


<!-- ____________________________ Function to start the timer____________________________ -->
 <!-- <script>
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
        $('#countdownTimer').text('You have Time remaining: ' + timeString + 'to payment');
    }

    // Call startTimer function with desired duration (in seconds)
    startTimer(300); // 5 minutes (300 seconds)
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
</script> -->
<script>
        // Function to start the timer
        function startTimer(duration, display) {
            var timer = duration, minutes, seconds;
            setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = "You have remaining time to pay: " + minutes + ":" + seconds;

                if (--timer < 0) 
                {
                    timer = 0;
                    display.textContent = "Your time is over";
                    setTimeout(() => {
                        // Navigate back to the previous page
                        history.back();
                    }, 2000); // Adjust the delay as needed
                }
            }, 1000);
        }

        // Execute the timer when the page loads
        window.onload = function () {
            var fiveMinutes = 410, // 6 minutes and 50 seconds(60*5+40)
                display = document.querySelector('#timer');
            startTimer(fiveMinutes, display);
        };
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
      url: '<?= ROOT ?>/payment', // Update with server endpoint
      data: formData,
      success: function(response) {
        // Handle successful response here
        console.log(response);
     
      },
      error: function(xhr, status, error) {
        // Handle error
        console.error(error);
      }
    });
  })});
</script>


</body>
</html>