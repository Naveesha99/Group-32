
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theatre Reservation Form</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ticket_booking/seat_map.css">
    <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->

</head>

<body>

<?php 
  require_once 't_reservaNavBar.php';
?>

<div class="movie-container">
    <div class="container">
      <div class="pricedetails">
        <label for="movie">Ticket Price</label>

        <select id="movie" name="movie">
          <?php
            if(isset($data['get_price']))
            {
              // show($data['get_price']);

              foreach($data['get_price'] as $x)
              {
                ?>
                  <option value="<?=$x->t_price?>">Rs.<?=$x->t_price?></option>
                <?php
              }
            }
          ?>      
        </select>
      </div>
        
        <ul class="showcase">
            <li>
                <div class="seatavailable"></div>
                <small>AVAILABLE</small>
            </li>
            <li>
                <div class="seatselected"></div>
                <small>YOU SELECTED</small>
            </li>
            <li>
                <div class="seat occupied"></div>
                <small>OCCUPIED</small>
            </li>    
        </ul>
    
    <div class="container2">
      <div class="screen">
        <h4>STAGE</h4>
      </div>
      
      <!-- ////////////////////////////////////////////////////////////////////////////////// -->

            <?php
              if (isset($data['get_seat']['data']))
              {
                // show($data['get_seat']);
                  $count = 0; // Counter to keep track of items
                  ?>

              <?php
                  foreach ($data['get_seat']['data'] as $x) 
                  {
                      if ($count % 10 == 0) 
                      {
                          if ($count > 0) 
                          {
                              echo '</div>'; // Close the previous row, except for the first one
                          }
                          echo '<div class="row">'; // Start a new row after every 10 items
                      }
              ?>
                      <option value="<?= $x->id ?>" class="seat" id="<?= $x->seat_id ?>" name="set" role="<?= $x->status ?>"><?= $x->seat_id ?></option>

              <?php    
                      $count++;
                  }
                  echo '</div>'; // Close the last row
                }
              ?>

    </div>
      <!-- ////////////////////////////////////////////////////////////////////////////////// -->
<form action="<?=ROOT?>/payment" method="POST">

        <!-- send seat selected details for payment controller -->
                <input type="hidden" id="selectedSeats" name="selectedSeats" value="">
                <!-- <input type="hidden" id="seat_id" name="seat_id" value="<?=$x->seat_id?>"> -->
                <input type="hidden" id="drama_id" name="drama_id" value="<?= $x->drama_id?>">
                <input type="hidden" id="time" name="time" value="<?= $x->time ?>">
                <input type="hidden" id="date" name="date" value="<?= $x->date ?>">
                <input type="hidden" id="status" name="status" value="free">
                

                <!-- get table name -->
                <?php
                if (isset($data['get_seat']['table']))
                {                
                ?>
                <input type="hidden" id="table" name="table" value="<?= $data['get_seat']['table']?>">
                <?php
                }
                ?>

      <!-- ////////////////////////////////////////////////////////////////////////////////// -->

        </div>

        <div class="cont">
          
        <?php
        if(isset($data['get_seat']['data']))
        {
          $time_from_db =$data['get_seat']['data'][0]->time;
          $time_formatted = date("h:i A", strtotime($time_from_db));
        ?>
          <div class="details"><p class="text">DRAMA : &nbsp;&nbsp;<?= $data['row']->title ?><br>DATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<?= $data['get_seat']['data'][0]->date ?><br>TIME &nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;<?= $time_formatted ?></p></div>
        <?php
        }
        ?>
          <div class="container1">  
            <h3>BOOKING SUMMARY</h3>
            <p class="text">
              You selected Tickets: <span id="count">0</span><br><br> Seats for the total price: <span id="total">0</span>
            </p>
            <div class="payable">Amount Payable:</div>
          </div>

          <div class="tickMarks">
            <input type="checkbox" class="checkbox" id="myCheckbox" onchange="toggleSubmitButton()">
            <label for="myCheckbox">I have verified the drama name, show date, and time before proceeding to payment.</label>
          </div>

          <div class="buttons">
          <!-- send total payment -->
          <input type="hidden" id="totalPriceInput" name="totalPrice" value="">

            <button class="submit" name="btnSubmit" id="submitBtn" value="Submit" disabled>PROCEED</button>
          </div>

</form>
        </div>
    <script src="<?=ROOT?>/assets/js/ticket_booking/seat_map.js"></script>
    </div>

    <?php require_once 't_reservaFooter1.php' ?>
</body>
</html>