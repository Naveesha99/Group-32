
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Ticket cancellation</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ticket_booking/cancel_ticket.css">

</head>

<body>



<?php 
  require_once 't_reservaNavBar.php';
?>

<div class="allforms">
<div class="container1">
    <form id="paymentForm">
          <h2>Terms and Conditions</h2>

          <div class="input-control">
            <label for="condition"><b>1. You can only cancel tickets at least <span class="subtext">24 hours (minimum one day)</span> before the show.</b></label><br>
          </div>

          <div class="input-control">
            <label for="condition"><b>2. You can only cancel a maximum of <span class="subtext">3 or less tickets booked</span> .</b></label><br>
          </div>

          <div class="input-control">
            <label for="condition"><b>3. By canceling the tickets you can get only <span class="subtext">fifty percent (50%) of the amount</span> paid.  You will not be <span class="space">refunded</span> the full payment.</b></label><br>
          </div>
                
          <div class="input-control">
            <label for="condition"><b>4. To ensure the safety of your money, <span class="subtext">no online payments</span> will be made.</b></label><br>
          </div>

          <div class="input-control">
            <label for="condition"><b>5. You have to visit Borella PUNCHI THEATRE to get refund.</b></label><br>
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
      <form id="paymentForm2" method="post" disabled>
                    <h2>Ticket cancellation</h2>

   
              <?php if(!empty($errors['expire_date'])):?>
              <div class="input-control1">
                <div class="error"><?= $errors['expire_date']?></div>
              </div>
              <?php endif;?>
    
              <div class="input-control">
                <label for="bookingid"><b>Booking ID</b></label><br>
                <input type="text" placeholder="Booking ID" name="bookingid" id="bookingid"><br>
                <?php if(!empty($errors['order_id'])):?>
                <div class="error"><?= $errors['order_id']?></div>
                <?php endif;?>
              </div>

              <div class="input-control">
                <label for="email"><b>Email</b></label><br>
                <input type="text" placeholder="Email" name="email" id="email"><br>
                <?php if(!empty($errors['email'])):?>
                <div class="error"><?= $errors['email']?></div>
                <?php endif;?>
              </div>

              <div class="input-control">
                <label for="phone"><b>Phone Number</b></label><br>
                <input type="text" placeholder="Phone Number" name="phone" id="phone"><br>
                <?php if(!empty($errors['phone'])):?>
                <div class="error"><?= $errors['phone']?></div>
                <?php endif;?>
              </div>
                    
              <div>
                  <button class="registerbtn" id="registerbtnid" type="submit">SUBMIT</button>
              </div>
              
      </form>
</div>
</div>
    <form method="post" id="send_confirm_details">
            <!-- _________________POPUP for more than 3 seats________________ -->
            <?php 
              if(isset($data['more_seats']))
              {
                $seatArray = explode(',',$data['more_seats']);
                $seat_count = count($seatArray);
                $total_price = $data['total_price'];
                $refund = (1.5)*($total_price/$seat_count);
              
                $cancel_seats_array = array_slice($seatArray, 0, 3);
                $remain_seats_array = array_slice($seatArray, 3);
                
                $cancel_seats_serialized = json_encode($cancel_seats_array);
                $remain_seats_serialized = json_encode($remain_seats_array);
                // show($data['order_id']);
                
            ?>

                <input type="hidden" name="drama_id" value="<?=$data['drama_id'];?>"> 
                <input type="hidden" name="drama_time" value="<?=$data['drama_time'];?>">
                <input type="hidden" name="drama_date" value="<?=$data['drama_date'];?>">
                <input type="hidden" name="order_id" value="<?=$data['order_id'];?>">
                <input type="hidden" name="email" value="<?=$data['email'];?>">
                <input type="hidden" name="username" value="<?=$data['username'];?>">
                <input type="hidden" name="refund" value="<?=$refund?>">
                <input type="hidden" name="cancel_seats_array" value="<?= htmlspecialchars($cancel_seats_serialized) ?>">
                <input type="hidden" name="remain_seats_array" value="<?= htmlspecialchars($remain_seats_serialized) ?>">

                <div id="custom-alert" class="custom-alert">
                  <div class="custom-alert-content">
                    <span id="custom-alert-message"><p>You have booked <?= $seat_count; ?> seats. But only 3 seats will be refunded.<br><br>You have paid: <?= $total_price ?><br>Your refund: Rs.<?= $refund; ?></p></span>
                    <button id="custom-alert-okay">CONFIRM</button>
                  </div>
                </div>

            <?php
              }
            ?>



            <!-- _________________POPUP for less than 3 or 3 seats________________ -->
            <?php 
              if(isset($data['min_seats']))
              {
                $seatArray = explode(',',$data['min_seats']);
                $seat_count = count($seatArray);
                $total_price = $data['total_price'];
                $refund = $total_price/2;

                $cancel_seats_array = array_slice($seatArray, 0, 3);
                // $remain_seats_array = array_slice($seatArray, 3);
                
                $cancel_seats_serialized = json_encode($cancel_seats_array);
                // $remain_seats_serialized = json_encode($remain_seats_array);
            ?>


                <input type="hidden" name="drama_id" value="<?=$data['drama_id'];?>"> 
                <input type="hidden" name="drama_time" value="<?=$data['drama_time'];?>">
                <input type="hidden" name="drama_date" value="<?=$data['drama_date'];?>">
                <input type="hidden" name="order_id" value="<?=$data['order_id'];?>">
                <input type="hidden" name="email" value="<?=$data['email'];?>">
                <input type="hidden" name="username" value="<?=$data['username'];?>">
                <input type="hidden" name="refund" value="<?=$refund?>">
                <input type="hidden" name="cancel_seats_array" value="<?= htmlspecialchars($cancel_seats_serialized) ?>">
                <input type="hidden" name="remain_seats_array" value=0>

                <div id="custom-alert" class="custom-alert">
                  <div class="custom-alert-content">
                    <span id="custom-alert-message"><p>You have booked <?= $seat_count; ?> seats.<br>You have paid: <?= $total_price ?><br>Your refund: Rs.<?= $refund; ?></p></span>
                    <button id="custom-alert-okay">CONFIRM</button>
                  </div>
                </div>

            <?php
              }
            ?>

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
    </form>

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
        var form2 = document.getElementById("registerbtnid");

        // If the checkbox is checked, enable the second form; otherwise, disable it
        if (checkbox.checked) {
            form2.removeAttribute("disabled");
        } else {
            form2.setAttribute("disabled", "disabled");
        }
    }
</script>


<!-- _________________________________Popup messages__________________________________ -->
<!-- <script>
    document.getElementById("custom-alert-okay").addEventListener("click", function() {
        // document.getElementById("popup-message").classList.add("show");
    });

    document.getElementById("popup-message-okay").addEventListener("click", function() {
      window.location.replace("http://localhost/testmvc1/public/select_drama");
        });
</script> -->
