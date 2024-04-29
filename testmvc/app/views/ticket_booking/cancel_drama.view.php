
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drama cancellation</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ticket_booking/cancel_drama.css">

</head>

<body>
<?php 
  require_once 't_reservaNavBar.php';
?>

<div class="container">
          <div class="container1">
              <div class="condition">
                    <div class="header">Terms and Conditions for Drama Canceling</div>
                      <label>Not Need to any transaction with the user only when canceling a drama  after seven days from today.</label><br>
                      <label>If the drama is canceled before 7 days including today, the user will have to pay the full amount paid for the tickets again.</label>
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

                        <label for="drama">Selected Drama ID</label><br>
                        <input type="text" name="drama_id" id="dramaIdInput" placeholder="Drama ID" readonly><br>
                        <?php if(isset($data['not_id']))
                        { ?> 
                        <div class="errors"><?= $data['not_id']?></div> 
                        <?php } ?>
<br>
                        <label for="drama">Selected Drama </label><br>
                        <input type="text" name="drama_name" id="titleInput" placeholder="Drama Name" readonly><br>
                       
<br>
                        <label for="drama">Selected Drama Date</label><br>
                        <input type="text" name="drama_date" id="dateInput" placeholder="Date" readonly><br>
                        <?php if(isset($data['not_date'])) 
                        { ?> 
                        <div class="errors"><?= $data['not_date']?></div> 
                        <?php } ?>
<br>
                        <label for="drama">Selected Drama Time</label><br>
                        <input type="text" name="drama_time" id="timeInput" placeholder="Time" readonly><br>
                        <?php if(isset($data['not_time'])) 
                        { ?> 
                        <div class="errors"><?= $data['not_time']?></div> 
                        <?php } ?>

<br>
                        <label for="drama">Reason for Cancel</label><br>
                        <textarea rows="3" id="reason" name="reason"></textarea>
                        <?php if(isset($data['not_reason'])) 
                        { ?> 
                        <div class="errors"><?= $data['not_reason']?></div> 
                        <?php } ?>

                        <div>
                            <button class="registerbtn" id="openPopupBtn" type="submit">Proceed</button>
                        </div>  
              </form>

              
              <!-- ____(2)___ -->
      <div id="popupForm" class="popup" style="display: none;">
        <form id="form2" method="post">
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
                        <!-- <div class="buttons"> -->
                            <button class="registerbtn" id="yesBtn" type="submit">YES</button>
                            <button class="registerbtn" id="noBtn" type="submit">NO</button>
                        <!-- </div> -->
          <?php }
                if(isset($data['next_week']))
                { 
                  
                  ?>
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

                    <!-- <div class="buttons"> -->
                        <button class="registerbtn" id="yesBtn" type="submit">YES</button>
                        <button class="registerbtn" id="noBtn" type="submit">NO</button>
                    </div>
       <?php    }
             ?>

          </form>
<!-- Show success message -->
          <?php
          if(isset($data['updated_rows']))
          {?>
            <div><?= $data['updated_rows'];?></div>
     <?php }
          if(isset($data['deleted_rows']))
          {?>
             <div><?= $data['deleted_rows'];?></div>
    <?php }
          ?>
      </div>
      </div>
  </div>



          <div class="container2" id="container2">
                  <h3>slect the required drama cancel</h3>

                  <?php 
                    if(!empty($data['details_array']));
                    {?>
                        <table class="table1">
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
                                <?php if(isset($data['details_array']))
                                {

                                foreach($data['details_array'] as $drama): ?>
                                    <tr class="row_clickable">
                                        <td class="id"><?php echo $drama->id; ?></td>
                                        <td class="drama_id"><?php echo $drama->drama_id; ?></td>
                                        <td class="title"><?php echo $drama->title; ?></td>
                                        <td class="date"><?php echo $drama->date; ?></td>
                                        <td class="time"><?php echo $drama->time; ?></td>
                                    </tr>
                                <?php endforeach; }?>
                            </tbody>
                        </table>   
                <?php }
                  ?>  
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


<script>
    // Function to open the popup form
    function openPopup() {
        document.getElementById("popupForm").style.display = "block";
    }

    // Function to close the popup form
    function closePopup() {
        document.getElementById("popupForm").style.display = "none";
    }

    // Check if data is received, then show popup after 1 second
    setTimeout(function() {
        <?php if(isset($data)): ?>
            openPopup();
        <?php endif; ?>
    }, 1000);

    // Function to submit the form when clicking the YES button
    document.getElementById("yesBtn").addEventListener("click", function() {
        document.getElementById("form2").submit();
    });

    // Function to close the popup form when clicking the NO button
    document.getElementById("noBtn").addEventListener("click", function() {
        closePopup();
    });
</script>

