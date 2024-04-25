
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form validation</title>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
  <script src="<?=ROOT?>/assets/js/ticket_booking/payment.js"></script>
  <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
  <link rel="stylesheet" href="<?=ROOT?>/assets/css/ticket_booking/payment.css">
</head>


<body>
 
<?php 
  require_once 't_reservaNavBar.php';
?>

<div class="container">

<?php
    if(isset($data3))
    {
?>
        <!-- <div id="order_id"><?= $data3['order_id'] ?></div>
        <div id="email"><?= $data3['email'] ?></div>
        <div id="drama_id"><?= $data3['drama_id'] ?></div>
        <div id="drama_date"><?= $data3['drama_date'] ?></div>
        <div id="drama_time"><?= $data3['drama_time'] ?></div>
        <div id="seat_id"><?= $data3['seat_id'] ?></div> -->
<?php
    }
?>

            <div id="custom-alert" class="custom-alert">
                <div class="custom-alert-content">
                    <span id="custom-alert-message"></span>
                    <!-- Add an input tag to display the orderId -->
                    

                                            <br><br>
        <div id="container">
            <div id="heading">Your QR Code</div>
            <div id="qr-code">
                <div id="fake-qr"></div>
            </div>
            <!-- <input type="hidden" id="text-input" placeholder="enter data" value="<?= $order_id ?>" oninput="handleInput()"> -->
            <input type="hidden" id="text-input" placeholder="enter data" oninput="handleInput()">
            <div id="loading-text"></div>
            <button id="generate-btn" onclick="generateQRCode()">Generate My QR</button>
            <button id="download-btn" onclick="downloadQRCode()" disabled>Download QR Code</button>
        </div>

        <a href="<?= ROOT ?>/home"><button id="custom-alert-okay" class="qr-generator">Okay</button></a>
                </div>
            </div>


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

    <form id="paymentForm">
        
    </form>
</div>
<?php require_once 't_reservaFooter1.php' ?>
</body>


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
          
<!-- __________________________timer on the page____________________ -->
</script>
          

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
     
        if(response.data3)
        {
          $('#order_id').text(response.data3.order_id);
          $('#email').text(response.data3.email);
          $('#drama_id').text(response.data3.payment);
          $('#drama_time').text(response.data3.refund);
          $('#drama_date').text(response.data3.refund);
          $('#seat_id').text(response.data3.seat_id);
        }
      },
      error: function(xhr, status, error) {
        // Handle error
        console.error(error);
      }
    });
  })});
</script>


<!--_______________________Create custom popup message_______________________ -->
<script>
function showCustomAlert(message, orderId) 
{
    var customAlert = document.getElementById("custom-alert");
    var customAlertMessage = document.getElementById("custom-alert-message");
    var customAlertOkay = document.getElementById("custom-alert-okay");
    var orderIdInput = document.getElementById("text-input");

    customAlertMessage.innerHTML = message;
    customAlert.style.display = "block";

    // Set the value of the orderId input
    orderIdInput.value = orderId;

    customAlertOkay.onclick = function() {
        customAlert.style.display = "none";
    };
}
function redirectToAnotherPage() {
  // Redirect to another page
  window.location.href = 'http://localhost/Group-32/testmvc/public/';
}




// _______________________________________QR GENERATOR_________________________________________ 

        var qrcode;
        var timeout;

        window.onload = function () {
            generateRandomQRCode();
            document.getElementById('text-input').addEventListener('input', function () {
                clearTimeout(timeout);
                generateQRCode(); // Wait 500 milliseconds after user stops typing
            });
        };

        function generateQRCode() {
            var textInput = document.getElementById('text-input').value.trim();
            var qrContainer = document.getElementById('qr-code');
            var downloadBtn = document.getElementById('download-btn');
            var loadingText = document.getElementById('loading-text');

            loadingText.innerHTML = 'Generating QR Code...';
            qrContainer.innerHTML = '';

            if (textInput !== '') {
                qrcode = new QRCode(qrContainer, {
                    text: textInput,
                    width: Math.min(200, window.innerWidth - 20),
                    height: Math.min(200, window.innerWidth - 20),
                    colorDark: '#000',
                    colorLight: '#fff',
                });

                qrContainer.style.display = 'flex';
                downloadBtn.disabled = false;

                setTimeout(function () {
                    loadingText.innerText = '';
                }, 500);
            } else {
                qrContainer.style.display = 'none';
                generateRandomQRCode();
                downloadBtn.disabled = true;
                loadingText.innerText = '';
            }
        }

        function downloadQRCode() {
            if (qrcode) {
                var canvas = qrcode._el.querySelector('canvas');
                var dataURL = canvas.toDataURL('image/png');
                var link = document.createElement('a');
                link.href = dataURL;
                link.download = 'qrcode.png';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            }
        }

        function generateRandomQRCode() {
            var fakeQR = document.getElementById('fake-qr');
            fakeQR.style.backgroundImage = "url('placeholder-qr.png')";
        }        
    </script>
</html>