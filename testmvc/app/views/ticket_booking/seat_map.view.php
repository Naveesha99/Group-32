<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theatre Reservation Form</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ticket_booking/seat_map.css">
    
</head>

<body>
<div class="movie-container">
    <div class="container">

        <label for="movie">Ticket Price:</label>
        <select id="movie" name="movie">
            <option value="250">Rs. 250</option>
            <option value="200">Rs. 200</option>
            <option value="150">Rs. 150</option>
            <option value="100">Rs. 100</option>
        </select>

        
        <ul class="showcase">
            <li>
                <div class="seat"></div>
                <small>N/A</small>
            </li>
            <li>
                <div class="seat selected"></div>
                <small>Selected</small>
            </li>
            <li>
                <div class="seat occupied"></div>
                <small>Occupied</small>
            </li>    
        </ul>
    
    
      <div class="screen"></div>
      
      <div class="row">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
      </div>
        <div class="row">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
        </div>
        <div class="row">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
        </div>
        <div class="row">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
        </div>
        <div class="row">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
        </div>
        <div class="row">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
        </div>
    </div>
    <div class="container">  
      <p class="text">
        You have selected <span id="count">0</span><br> seats for the total price of Rs. <span id="total">0</span>
      </p>

      <div class="buttons">
        <button class="submit">BACK</button>
        <button class="submit">SUBMIT</button>
      </div>
    </div>
</div>

  <script src="<?=ROOT?>/assets/js/ticket_booking/seat_map.js"></script>
</body>
</html>