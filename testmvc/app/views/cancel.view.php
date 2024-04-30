<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="<?= ROOT ?>/assets/css/reservaSettings.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="<?= ROOT ?>/assets/css/cwProfile.css"> -->
    <!-- <link rel="stylesheet" href="<?= ROOT ?>/assets/css/new.css"> -->
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/cancel_ticket.css">
    <link href="<?= ROOT ?>/assets/css/reservaPaymentNew.css" rel="stylesheet">



    <title>Admin Panel</title>



    <style>
.dashboard{
    height: 100vh;
}

        .container{
            display: flex;
        }


    .popup_input_otp {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        z-index: 9999;
        width: 500px;
        height: 200px;
    }

    </style>

</head>
<!-- <?//php require_once 'reservaNavBar.php' ?> -->
<?php if (isset($_SESSION['USER'])) {
    require_once 'reservaNavBarAfter.php';
} else {
    require_once 'reservaNavBar.php';
} ?>




<div class="allforms">
<div class="container1">

    <form id="paymentForm">
    <?php
    
if(isset($data['success']))
{
    show($data['success']);
} 
else{
    show('error');
} ?> 

          <h2>Cancellation Policy</h2>

          <div class="input-control">
            <label for="condition">1. ancellation Within 12 Hours of Acceptance:<br> <span class="subtext">Full refund of booking amount.</label><br>
          </div>

          <div class="input-control">
            <label for="condition">2. Cancellation Between 12-24 Hours of Acceptance: <br> <span class="subtext">50% refund of booking amount.</span></label><br>
          </div>

          <div class="input-control">
            <label for="condition">3. Cancellation After 24 Hours of Acceptance:<br><span class="subtext">Cancellation is not permitted, and no refund will be issued.
</span></label><br>
          </div>
                
          <div class="input-control">
            <label for="condition">4. To ensure the safety of your money, <span class="subtext">no online payments</span> will be made.</label><br>
          </div>

          <div class="input-control">
            <label for="condition">5. You have to visit Borella PUNCHI THEATRE to get refund.</label><br>
          </div>

          <div class="input-control">
            <span class="subtext">Note That:</span><p class="pgraph"><br>After booking the tickets, it is mandatory to fill the form on the right with the information in the message received in your email.</p><br><br>
          </div>

          <div class="tickMarks">
            <input type="checkbox" class="checkbox" id="myCheckbox" onchange="toggleSubmitButton()">
            <label for="myCheckbox">I agree with above terms and condition.</label>
          </div>  
    </form>
</div>



<div class="container2" id="container2">

<?php if(isset($data['success'])) :?>
        <div> <?= $data['success'];?></div>
    <?php else :?>
        <?php if(isset($data['error'])) :?>
            <div> <?= $data['error'];?></div>
    <?php endif; ?>
<?php endif ;?>

<section class="booking-container">
    <header class="booking-title">Complete Your Cancellation</header>
    <section class="booking-details">
      <div class="hall-details">
        <img loading="lazy" src="<?= ROOT ?>/assets/images/ImgHall.png" alt="Community Hall" class="hall-image" />
        <div class="hall-info">
            <div class="hall-name">
                <?php if(isset($data['detailsofReq'][0])) :?>
                    <div> <?= $data['detailsofReq'][0]->hallno ;?></div>
                <?php endif; ?>
            </div>

            <div>Request ID: 
            <?php if(isset($data['detailsofReq'][0])) :?>
                         <?= $data['detailsofReq'][0]->id ;?>
                    <?php endif; ?>
                </div> 
            <!-- <div class="hall-name">Hall Name
                    <?php if(isset($data['detailsofReq'][0])) :?>
                        <div> <?= $data['detailsofReq'][0]->hallno ;?></div>
                    <?php endif; ?>
                </div>  -->

            <div>Address: Punchi Theatre, Borella</div>
        </div>
      </div>
    </section> 
    <section class="session-details">
    <div class="a">Hall Name: 
        <div class="b">
            <div class="hall-name">
                <?php if(isset($data['detailsofReq'][0])) :?>
                    <div> <?= $data['detailsofReq'][0]->hallno ;?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="a">Date: 
        <div class="b">
            <?php if(isset($data['detailsofReq'][0])) :?>
                <div> <?= $data['detailsofReq'][0]->date ;?></div>
            <?php endif; ?>
        </div> 
    </div>
    <div class="a">Time: 
        <div class="b">
            <?php if(isset($data['detailsofReq'][0])) :?>
                 <?= $data['detailsofReq'][0]->startTime ;?>
            <?php endif; ?>
            - 
            <?php if(isset($data['detailsofReq'][0])) :?>
                 <?= $data['detailsofReq'][0]->endTime ;?>
            <?php endif; ?>
        </div>
    </div>
    <div class="a">Duration: 
        <div class="b">
        <?php if(isset($data['detailsofReq'][0])) :?>
                <div> <?= $data['detailsofReq'][0]->hours ;?></div>
            <?php endif; ?>
        </div>
    </div>
    <div class="a">Guests:  
        <div class="b">
            <?php if(isset($data['detailsofReq'][0])) :?>
                <div> <?= $data['detailsofReq'][0]->headCount ;?></div>
            <?php endif; ?>
        </div>
    </div>
    </section>

    <section class="guests-details">
        
      <div class="a">Standings:  
        <div class="b">
            <?php if(isset($data['detailsofReq'][0])) :?>
                <div> <?= $data['detailsofReq'][0]->standings ;?></div>
            <?php endif; ?>
      </div>
    </div>

    <div class="a">sounds:  
        <div class="b">
            <?php if(isset($data['detailsofReq'][0])) :?>
                <div> <?= $data['detailsofReq'][0]->sounds ;?></div>
            <?php endif; ?>
      </div>
    </div>

    </section>

    <section class="final">
        <div class ="dea">
            <div class="subtotal-label">Paid Amout</div>
            <div class="subtotal-amount">Rs. 
                <?php if(isset($data['detailsofReq'][0])) :?>
                     <?= $data['detailsofReq'][0]->amount ;?>
                <?php endif; ?>
            </div>
        </div>

        <div class ="deb">
            <div class="promo-label">Refund Percentage</div>
            <div class="promo-amount">
                <?php if(isset($data['refundPercentage'])) :?>
                    <?php if($data['refundPercentage']==1) :?>
                         100%
                    <?php elseif($data['refundPercentage']==0.5) :?>
                        50%
                    <?php endif;?>
                <?php endif; ?>
            </div>
        </div>
        <div class= "dec">
            <div class="total-label">Final Refund</div>
            <div class="total-amount">Rs. 
                <?php if(isset(($data['detailsofReq'][0]))&& $data['refundPercentage'] ):?>
                    <?= $data['detailsofReq'][0]->amount * $data['refundPercentage'];?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <form method="post" id="send_confirm_details" disabled>
        <input type="hidden" name="id" value="
        <?php if(isset($data['detailsofReq'][0])) :?>
                <?= $data['detailsofReq'][0]->id ;?>
            <?php endif; ?>
        ">

        <input type="hidden" name="refund" value="
        <?php if(isset($data['detailsofReq'][0])) :?>
                 <?= $data['detailsofReq'][0]->amount ;?>
            <?php endif; ?>
        ">
        <input type="hidden" name="hallno" value="
        <?php if(isset($data['detailsofReq'][0])) :?>
                 <?= $data['detailsofReq'][0]->hallno ;?>
            <?php endif; ?>
        ">
        <input type="hidden" name="date" value="
        <?php if(isset($data['detailsofReq'][0])) :?>
                <?= $data['detailsofReq'][0]->date ;?>
            <?php endif; ?>
        ">

        <?php 
        $otp = rand(100000, 999999);
        ?>

        <input type="text" name="otp" value="<?= $otp; ?>">
        <button class="payment-button" id="cancelbtn" name="cancelbtn" type="submit">Confirm Cancellation</button>
    </form>

    <div class="send_otp">


    </div>
    </div>
  </section>
</div>
</div>




<!-- __otp come___ -->
<?php 
if(isset($data['otp_again']))
{?>
    <div class="popup_input_otp" id="otpPopup">

<form method="post" action="reservaQRCancel">
        <p>Enter OTP</p>
        <input type="text" name="reqid" value="<?= $data['reqid']; ?>">
        <input type="text" name="refund" value="<?= $data['refund']; ?>">
        <input type="number" name="sys_otp" value="<?= $data['otp_again'] ?>">
        <input type="number" name="user_otp" id="otp" placeholder="Enter OTP">
        <button type="submit" name="otp_submit">Submit</button>
</form>
    </div>
<?php
}

?>

<?php 
if(isset($data['detailsofReq']))
{?>
<form method="post" action="reservaQRCancel">
    <div class="popup_input_otp">
        <p>Enter OTP</p>
        <input type="text" name="reqid" value="<?= $data['detailsofReq']; ?>">
        <!-- <input type="text" name="refund" value="<?= $data['refund']; ?>">
        <input type="number" name="sys_otp" value="<?= $data['otp_again'] ?>">
        <input type="number" name="user_otp" id="otp" placeholder="Enter OTP"> -->
        <button type="submit" name="otp_submit">Submit</button>
    </div>
</form>
<?php
}
?>



    <?php require_once 't_reservaFooter1.php' ?>
</body>
</html>



<!-- _______check the checkbox and after that enable submit button_____ -->
<script>
    // Run the toggleSubmitButton function when the page loads
    document.addEventListener("DOMContentLoaded", function() {
        toggleSubmitButton();
    });

    function toggleSubmitButton() {
        var checkbox = document.getElementById("myCheckbox");
        var cancelBtn = document.getElementById("cancelbtn");

        // If the checkbox is checked, enable the second form; otherwise, disable it
        if (checkbox.checked) {
            cancelBtn.removeAttribute("disabled");
        } else {
            cancelBtn.setAttribute("disabled", "disabled");
        }
    }




    // JavaScript to toggle the visibility of the popup
    document.addEventListener("DOMContentLoaded", function() {
        // Check if the popup div exists
        var popupDiv = document.getElementById("otpPopup");
        if (popupDiv) {
            // Display the popup if $data['otp_again'] is set
            popupDiv.style.display = "block";
        }
    });

</script>