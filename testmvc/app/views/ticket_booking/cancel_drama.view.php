
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Drama cancellation</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ticket_booking/cancel_drama.css">

</head>

<body>
<?php 
  require_once 't_reservaNavBar.php';
?>

<div class="container">
          <div class="container1">
              
                    <div class="header">Terms and Conditions for Drama Canceling</div>

                    <div class="input-control">
                      <label for="myCheckbox"><p>There is no need to any transaction with the user only when canceling a drama  <span class="subtext">after seven days from today.</span></p></label>
                    </div>

                    <div class="input-control">
                      <label for="myCheckbox"><p>If the drama is canceled before 7 days including today, the user will <span class="subtext">have to pay the full amount</span> paid for the tickets again.</p></label><br>
                    </div>

          <div class="forms">
            <!-- _____(1)_____ -->
              <form id="paymentForm" method="post" >

                <?php if(isset($data['not_drama'])) 
                        { ?> 
                        <div class="errors"><?= $data['not_drama']?></div> 
                        <?php } ?>
                        <!-- idInput -->
                        <input type="hidden" name="id" id="idInput" placeholder="ID" readonly><br>

                    <label for="drama"><b>Selected Drama ID</b></label><br>
                        <input type="text" name="drama_id" id="dramaIdInput" placeholder="Drama ID" readonly><br>
                        <?php if(isset($data['not_id'])) 
                        { ?> 
                        <div class="errors"><?= $data['not_id']?></div> 
                        <?php } ?>
<br>
                        <label for="drama"><b>Selected Drama </b></label><br>
                        <input type="text" name="drama_name" id="titleInput" placeholder="Drama Name" readonly><br>
                       
<br>
                        <label for="drama"><b>Selected Drama Date</b></label><br>
                        <input type="text" name="drama_date" id="dateInput" placeholder="Date" readonly><br>
                        <?php if(isset($data['not_date'])) 
                        { ?> 
                        <div class="errors"><?= $data['not_date']?></div> 
                        <?php } ?>
<br>
                        <label for="drama"><b>Selected Drama Time</b></label><br>
                        <input type="text" name="drama_time" id="timeInput" placeholder="Time" readonly><br>
                        <?php if(isset($data['not_time'])) 
                        { ?> 
                        <div class="errors"><?= $data['not_time']?></div> 
                        <?php } ?>

<br>
                        <label for="drama"><b>Reason for Cancel</b></label><br>
                        <textarea rows="5" id="reason" name="reason"></textarea>
                        <?php if(isset($data['not_reason'])) 
                        { ?> 
                        <div class="errors"><?= $data['not_reason']?></div> 
                        <?php } ?>

                        <div>
                            <button class="registerbtn" id="registerbtnid" type="submit">SUBMIT</button>
                        </div>  
              </form>

              
              <!-- ____(2)___ -->
          <form id="form2" method="post">
              <div class="sec_show">
          <?php if(isset($data['booked_count']))
                {
                  if($data['booked_count']==0) 
                  {?>
                    <div class="message">
                      <p>No booking details for this drama in the given time and date.</p>
                      <p>Are you sure disable this drama time?</p>
                      <p>Drama ID : <?= $data['drama_id'] ?></p>
                      <p>Drama Name : <?= $data['drama_name'] ?></p>
                      <p>Drama Date : <?= $data['drama_date'] ?></p>
                      <p>Drama Time : <?= $data['drama_time'] ?></p>  
                    </div>

                    <input type="hidden" name="nb_id"  value="<?= $data['id'] ?>">
                    <input type="hidden" name="nb_drama_id"  value="<?= $data['drama_id'] ?>">
                    <input type="hidden" name="nb_drama_name"  value="<?= $data['drama_name'] ?>">
                    <input type="hidden" name="nb_drama_date"  value="<?= $data['drama_date'] ?>">
                    <input type="hidden" name="nb_drama_time"  value="<?= $data['drama_time'] ?>">
            <?php }  
                  else
                  {
                    ?>
                    <div class="message">
                      <p>There are <?= $data['booked_count']?> bookings for this drama</p>
                      <p>Are you sure Disable this drama time?</p>
                      <p>Drama ID : <?= $data['drama_id'] ?></p>
                      <p>Drama Name : <?= $data['drama_name'] ?></p>
                      <p>Drama Date : <?= $data['drama_date'] ?></p>
                      <p>Drama Time : <?= $data['drama_time'] ?></p>  
                    </div>

                    <input type="hidden" name="b_id"  value="<?= $data['id'] ?>">
                    <input type="hidden" name="b_drama_id"  value="<?= $data['drama_id'] ?>">
                    <input type="hidden" name="b_drama_name"  value="<?= $data['drama_name'] ?>">
                    <input type="hidden" name="b_drama_date"  value="<?= $data['drama_date'] ?>">
                    <input type="hidden" name="b_drama_time"  value="<?= $data['drama_time'] ?>">
                <?php
                  }  ?>
                        <div>
                            <button class="registerbtn" id="registerbtnid" type="submit">SUBMIT</button>
                        </div>
          <?php }
                if(isset($data['next_week']))
                { ?>
                    <div class="message">
                      <p>This drama date is not in this week. SO, you can DELETE this time and NO NEED TO REFUND.</p>
                      <p>Are you sure DELETE this time?</p>
                      <p>Drama ID : <?= $data['drama_id'] ?></p>
                      <p>Drama Name : <?= $data['drama_name'] ?></p>
                      <p>Drama Date : <?= $data['drama_date'] ?></p>
                      <p>Drama Time : <?= $data['drama_time'] ?></p>
                    </div>

                    <input type="hidden" name="free_id"  value="<?= $data['id'] ?>">
                    <input type="hidden" name="free_drama_id"  value="<?= $data['drama_id'] ?>">
                    <input type="hidden" name="free_drama_name"  value="<?= $data['drama_name'] ?>">
                    <input type="hidden" name="free_drama_date"  value="<?= $data['drama_date'] ?>">
                    <input type="hidden" name="free_drama_time"  value="<?= $data['drama_time'] ?>">

                    <div>
                        <button class="registerbtn" id="registerbtnid" type="submit">SUBMIT</button>
                    </div>
       <?php    }
             ?>

              </div>
          </form>
              </div>
          </div>



          <div class="container2" id="container2">
                              <h2>Drama cancellation</h2>

                              <?php 
                                if(!empty($data['details_array']));
                                {?>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Drama ID</th>
                                                <th>Drama</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($data['details_array'] as $drama): ?>
                                                <tr class="row_clickable">
                                                    <td class="id"><?php echo $drama->id; ?></td>
                                                    <td class="drama_id"><?php echo $drama->drama_id; ?></td>
                                                    <td class="title"><?php echo $drama->title; ?></td>
                                                    <td class="date"><?php echo $drama->date; ?></td>
                                                    <td class="time"><?php echo $drama->time; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>   
                            <?php }
                              ?>
            
                     
              
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
                    </div>
      </div>
      <?php require_once 't_reservaFooter1.php' ?>

</body>

<script>
    // Get all rows with class "row-clickable"
    var rows = document.querySelectorAll('.row_clickable');

    // Add click event listener to each row
      rows.forEach(function(row) {
        row.addEventListener('click', function() 
        {
            // Get the data from the clicked row
            var id = this.querySelector('.id').textContent;
            var dramaId = this.querySelector('.drama_id').textContent;
            var title = this.querySelector('.title').textContent;
            var date = this.querySelector('.date').textContent;
            var time = this.querySelector('.time').textContent;


            // Populate the input fields with the data
            document.getElementById('idInput').value = id;
            document.getElementById('dramaIdInput').value = dramaId;
            document.getElementById('titleInput').value = title;
            document.getElementById('dateInput').value = date;
            document.getElementById('timeInput').value = time;


            // Clear any previous errors
            document.getElementById('idError').innerHTML = '';
            document.getElementById('dramaIdError').innerHTML = '';
            document.getElementById('titleError').innerHTML = '';
            document.getElementById('dateError').innerHTML = '';
            document.getElementById('timeError').innerHTML = '';
        });
    });
</script>
</html>
