
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theatre Reservation Form</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ticket_booking/re_seat_map.css">
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
<form method="POST" id="form2">

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
            if(isset($data['success']))
            {?>
                    <div class="err"><?=$data['success']?></div>
           <?php }
            ?>
             <?php 
            if(isset($data['err']))
            {?>
                    <div class="err"><?=$data['success']?></div>
           <?php }
            ?>
            <h4>User Contact Details</h4>
            <div class="container3">  
                    <input type="text" name="name" placeholder="Viewer name"><br>
                    <input type="number" name="phone" placeholder="Viwer contact number"><br>
            </div>
          
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
            <label for="myCheckbox">I confirm that the due amount was taken from the viewer.</label>
          </div>

          <div class="buttons">
          <!-- send total payment -->
          <input type="hidden" id="totalPriceInput" name="totalPrice" value="">

            <button class="submit" name="btnSubmit" id="submitBtn" value="Submit" disabled>CONFIRM PHYSICAL BOOKING</button>
          </div>

</form>
        </div>
    </div>

    <?php require_once 't_reservaFooter1.php' ?>
</body>
</html>

<script>
    const container = document.querySelector('.container');
const count = document.getElementById('count');
const total = document.getElementById('total');
const payable = document.querySelector('.payable'); // Add this line to select the payable div
const movieSelect = document.getElementById('movie');
const selectedSeatsInput = document.getElementById('selectedSeats');

let ticketPrice = +movieSelect.value;
let selectedSeatIds = [];

// Update total and count
function updateSelectedCount() {
  const selectedSeats = document.querySelectorAll('.row .seat.selected');
  selectedSeatIds = Array.from(selectedSeats).map(seat => seat.getAttribute('id'));

  const selectedSeatsCount = selectedSeatIds.length;

  count.innerText = selectedSeatsCount;
  total.innerText = selectedSeatsCount * ticketPrice;

  // Update the value of the hidden input field with selected seat IDs
  selectedSeatsInput.value = JSON.stringify(selectedSeatIds);

  // Update the payable div with the total price
  const longSpace = '\xa0\xa0\xa0\xa0\xa0\xa0';
  payable.innerText = "Amount Payable: \xa0\xa0\xa0\xa0 LKR" + longSpace + (selectedSeatsCount * ticketPrice);

  // Update the value of the hidden input field with the total price
  document.getElementById('totalPriceInput').value = selectedSeatsCount * ticketPrice;

  toggleSubmitButton();
}

// Movie Select Event
movieSelect.addEventListener('change', (e) => {
  ticketPrice = +e.target.value;
  updateSelectedCount();
});


// ______________________________________________________________________
// Seat click event
container.addEventListener('click', (e) => {
  const seat = e.target;

  if (e.target.classList.contains('seat') && !e.target.classList.contains('occupied')) {
    const role = e.target.getAttribute('role');

    if (role === 'free') 
    {
      e.target.classList.toggle('selected');
      updateSelectedCount();
    } 
    else if (role === 'booked') 
    {
      alert('This seat is already booked and you cannot be selected.');
      // You can customize this alert or add a UI indication for a booked seat
    } 
    else 
    {
      alert('This seat is selected by another user just now. But not approved. So please wait and try again.');
      // Handle other roles if needed
    }
  }
});

// _____________________________________________________________

// color booked seats red
const bookedSeats = document.querySelectorAll('.seat[role="booked"]');
bookedSeats.forEach(seat => {
  seat.classList.add('booked');
});

// Color pending seats yellow
const pendingSeats = document.querySelectorAll('.seat[role="pending"]');
pendingSeats.forEach(seat => {
  seat.classList.add('pending');
});


// _________________enable button after tick mark________________
function toggleSubmitButton() {
  var checkbox = document.getElementById("myCheckbox");
  var submitButton = document.getElementById("submitBtn");

  // Enable or disable the submit button based on checkbox state and selected seats count
  submitButton.disabled = !checkbox.checked || count.innerText === '0';
}



</script>