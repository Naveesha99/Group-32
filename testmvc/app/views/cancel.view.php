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
    <!-- <?php show($data); ?> -->

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
                    
    
        <button class="payment-button" id="cancelbtn" name="cancelbtn" type="submit">Confirm Cancellation</button>
    </form>
    </div>
  </section>
</div>
</div>




<?php
if(isset($data['refund']))
{
?>
  <div id="popup-message" class="popup-message">
      <div class="popup-message-content">
          <span id="popup-message-text">Your ticket cancellation is successful. You have received a refund of <span class="subtext">Rs.<?= $data['refund']; ?></span>. To get it, visit 'PUNCHI THEATER' <span class="subtext">with the email you just received</span>. If you do not receive an email within 15 minutes, call us.</span>
          <br><br><button id="popup-message-okay"><a href="<?= ROOT ?>/home">Close</a></button>
      </div>
  </div>
<?php
}
?>

    <?php require_once 't_reservaFooter1.php' ?>
</body>
</html>



<!-- _____________________check the checkbox and after that enable submit button___________________ -->
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
</script>


