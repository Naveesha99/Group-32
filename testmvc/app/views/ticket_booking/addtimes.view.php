<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?=ROOT?>/assets/css/ticket_booking/addtimes.css" rel="stylesheet">
	<title>ADD TIMES</title>
</head>
<body>
		<div class="signup_box">
			<div class="left">
				<div class="contact">
                             
					<form  method="POST" class="form1" id="myForm">
                        <h3 class="sign">ADD TIMES</h3>

                        <label for="drama"><b>Select Drama ID</b></label><br>
                        <input type="text" name="drama-id" id="dramaIdInput" placeholder="Drama ID" readonly>
                        <?php if(isset($data['not_drama'])) 
                        { ?> 
                        <div class="errors"><?= $data['not_drama']?></div> 
                        <?php } ?>

                        <label for="drama"><b>Select Drama Title</b></label><br>
                        <input type="text" name="title" id="titleInput" placeholder="Drama Title" readonly>
                        <?php if(isset($data['not_drama'])) 
                        { ?> 
                        <div class="errors"><?= $data['not_drama']?></div> 
                        <?php } ?>

                        <label for="drama"><b>Starting Date</b></label><br>
						<input type="date" name="start_date" placeholder="Starting Date">
                        <?php if(isset($data['old_date'])) 
                        { ?> 
                        <div class="errors"><?= $data['old_date']?></div> 
                        <?php } ?>

                        <label for="drama"><b>End Date</b></label><br>
						<input type="date" name="end_date" placeholder="End Date">
                        <?php if(isset($data['not_date'])) 
                        { ?> 
                        <div class="errors"><?= $data['not_date']?></div> 
                        <?php } ?>

                        <?php if(isset($data['invalid_range'])) 
                        { ?>
                        <div class="errors"><?= $data['invalid_range']?></div> 
                        <?php } ?>

                        <!-- <button id="submit_btn" type="button">Find Available Days For Drama</button> -->


                        <label for="facilities">Time Slots</label>
                        <div class="checkbox-group" id="days">   
                            <div class="check_box">
                                <label class="checkbox">
                                    <p>Timeslot 1: 3:30</p>
                                    <input type="checkbox" name="time1" value="3:30:00">
                                </label> 
                            </div> 

                            <div class="check_box">
                                <label class="checkbox">
                                    <p>Timeslot 2: 18:30</p>
                                    <input type="checkbox" name="time2" value="6:30:00">
                                </label> 
                            </div>
                        </div>
                        <?php if(isset($data['not_time'])) 
                        { ?> 
                        <div class="errors"><?= $data['not_time']?></div> 
                        <?php } ?>

                        <label for="drama"><b>Drama Ticket Price</b></label><br>
                        <input type="number" name="price" placeholder="Price">
                        <?php if(isset($data['not_price'])) 
                        { ?> 
                        <div class="errors"><?= $data['not_price']?></div> 
                        <?php } ?>
<!-- 

                <label for="image">Image</label>
                <input type="file" id="image" name="image" accept="image/*"> -->

                <!-- <label for="content" >Content</label> -->
                <!-- <input type="text" id="content" name="content"> -->
                <!-- <textarea rows="10" id="content" name="content"></textarea>  -->

                <!-- <label for="status">Status</label>
                <select name="status" id="status">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select> -->


                        <button class="submit">AVAILABLE DATES</button>
					</form><br>

				</div>
			</div>
            <br><br><br>

            <div class="right_right" style="overflow-y: auto;">
                        <div class="contact">
                            <?php if(isset($data['home_data'])){ ?>
                                    <table id="myTable">
                                        <tr>
                                            <th>Drama ID</th>
                                            <th>Tiltle</th>
                                        </tr>
                                        <?php foreach($data['home_data'] as $x) { ?>
                                            <tr class="row-clickable">
                                                <td class="drama-id"><?=$x->id ?></td>
                                                <td class="title"><?=$x->title ?></td>
                                            </tr>
                                    <?php }?>
                                    </table>
                            <?php } ?>
                        </div>
                </div>

                    <?php if(isset($data['filt_date']))
                    {
                        // show($data['filt_date']['available']);
                    }
                    ?>

			    <div class="right">
                    <div class="contact">
                        <br><br><br>
                                        <div class="details">
                                            <div class="cont">
                                                <h5>AVAILABLE DATES</h5>
                                         <?php if(isset($data['filt_date']['available']))
                                                {
                                                    foreach($data['filt_date']['available'] as $x)
                                                    {
                                            ?>
                                                        <p><?= $x ?></p>
                                            <?php
                                                    }
                                                ?>
                                         <?php } ?>
                                            </div>

                                            <div class="cont">
                                                <h5>BOOKED DATES</h5>
                                                <?php if(isset($data['filt_date']['booked']))
                                                {
                                                    foreach($data['filt_date']['booked'] as $y)
                                                    {
                                            ?>
                                                        <p><?= $y ?></p>
                                            <?php
                                                    }
                                                ?>
                                         <?php } ?>
                                            </div>

                                            <div class="timeslot">
                                                <h5>Available Time Slots</h5>
                                        <?php if(isset($data['filt_date']['input_time1']) && !isset($data['filt_date']['input_time2'])) { ?>
                                            <?php $time_from_db = $data['filt_date']['input_time1'];
                                                $time_formatted = date("h:i A", strtotime($time_from_db)); ?>
                                                    <p><?= $time_formatted ?></p>
                                         <?php } 
                                                else if(!isset($data['filt_date']['input_time1']) && isset($data['filt_date']['input_time2'])) { ?>
                                            <?php $time_from_db = $data['filt_date']['input_time2'];
                                                $time_formatted = date("h:i A", strtotime($time_from_db)); ?>
                                                    <p><?= $time_formatted ?></p>
                                           
                                         <?php }
                                                else if(isset($data['filt_date']['input_time1']) && isset($data['filt_date']['input_time2'])) { ?>
                                            <?php $time_from_db1 = $data['filt_date']['input_time1'];
                                                    $time_from_db2 = $data['filt_date']['input_time2'];

                                                $time_formatted1 = date("h:i A", strtotime($time_from_db1));
                                                $time_formatted2 = date("h:i A", strtotime($time_from_db2)); ?>
                                                    <p><?= $time_formatted1 ?></p>
                                                    <p><?= $time_formatted2 ?></p>
                                        <?php } ?>

                                            </div>
                                        </div>

                                        <div class="details">

                        <form method="post" id="form2">
                                            <div class="message">
                                            <?php if(isset($data['filt_date']['available']))
                                            {
                                                if($data['filt_date']['available'] == null)
                                                {?>
                                                <p>No available dates for selected date range. Try another date range</p>
                                          <?php }
                                                else
                                                { 
                                                    $available_data_json = json_encode($data['filt_date']['available']);
                                                    ?>

                                                <input type="hidden" name="pst_available_data" value="<?php echo htmlspecialchars($available_data_json); ?>">
                                                <input type="hidden" name="pst_drama_id" value="<?= $data['drama_id'] ?>">
                                                <input type="hidden" name="pst_title" value="<?= $data['title'] ?>">
                                                <input type="hidden" name="pst_price" value="<?= $data['price'] ?>">
                                                
                                                
                                                <!-- <input type="hidden" name="pst_time2" value=""> -->

                                                    <p>You can add this drama above available dates only.<br> Are you sure add drama into above dates in above times/time?</p>
                                                    
                                                    <p>Drama ID : <?= $data['drama_id']; ?></p>
                                                    <p>Drama Title : <?= $data['title']; ?></p>
                                                    <p>Ticket Price : <?= $data['price']; ?></p>

                                                    <p>Time Slots : <div class="timeslot">
                                                                        
                                                                <?php if(isset($data['filt_date']['input_time1']) && !isset($data['filt_date']['input_time2'])) { ?>
                                                                    <?php $time_from_db = $data['filt_date']['input_time1'];
                                                                        $time_formatted = date("h:i A", strtotime($time_from_db)); ?>
                                                                            <p><?= $time_formatted ?></p>
                                                <input type="hidden" name="pst_time1" value="<?= $data['filt_date']['input_time1'] ?>">
                                                                <?php } 
                                                                        else if(!isset($data['filt_date']['input_time1']) && isset($data['filt_date']['input_time2'])) { ?>
                                                                    <?php $time_from_db = $data['filt_date']['input_time2'];
                                                                        $time_formatted = date("h:i A", strtotime($time_from_db)); ?>
                                                                            <p><?= $time_formatted ?></p>
                                                <input type="hidden" name="pst_time2" value="<?= $data['filt_date']['input_time2'] ?>">
                                                                
                                                                <?php }
                                                                        else if(isset($data['filt_date']['input_time1']) && isset($data['filt_date']['input_time2'])) { ?>
                                                                    <?php $time_from_db1 = $data['filt_date']['input_time1'];
                                                                            $time_from_db2 = $data['filt_date']['input_time2'];

                                                                        $time_formatted1 = date("h:i A", strtotime($time_from_db1));
                                                                        $time_formatted2 = date("h:i A", strtotime($time_from_db2)); ?>
                                                                            <p><?= $time_formatted1 ?></p>
                                                                            <p><?= $time_formatted2 ?></p>

                                                <input type="hidden" name="pst_both_time1" value="<?= $data['filt_date']['input_time1'] ?>">
                                                <input type="hidden" name="pst_both_time2" value="<?= $data['filt_date']['input_time2'] ?>">
                                                                <?php } ?>

                                                                    </div></p>
                                                    <button type="submit">ADD DRAMA</button>
                                        <?php   }
                                            }?>
                                                
                                            </div>
                        </form>

                                        </div>

                                        <?php if(isset($data['invalid1']))
                                        {
                                            // foreach($data['invalid1'] as $m)
                                            // {
                                                show($data['invalid1']);
                                                // echo $m; ?><br><?php
                                            // }
                                        }
                                        ?>
                                         <?php if(isset($data['invalid2']))
                                        {
                                            // foreach($data['invalid2'] as $m)
                                            // {
                                                show($data['invalid2']);
                                                // echo $m; ?><br><?php
                                            // }
                                        }
                                        ?>
                                        <?php if(isset($data['no_enough_data']))
                                        {
                                            // foreach($data['success'] as $m)
                                            // {
                                            //     echo $m; ?><br><?php
                                            // }
                                        }
                                        ?>
                                
                            </div>        
                        </div>
                
			</div>
</body>
</html>

<!-- _____________________________AJAX SEND___________________________ -->
<!-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        var form = document.getElementById("myForm");
        var submitButton = document.querySelector(".submit");

        submitButton.addEventListener("click", function() {
            var formData = new FormData(form);

            // Send form data via Ajax
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "<?=ROOT?>/addseats", true);
            xhr.onload = function() 
            {
                if (xhr.status === 200) 
                {
                    // Request was successful
                    console.log(xhr.responseText); // Print response data to console
                    // Handle response data as needed
                } 
                else 
                {
                    // Request failed
                    console.error('Error: ' + xhr.status);
                }
            };
            xhr.onerror = function() {
                // Request error
                console.error('Request failed');
            };
            xhr.send(formData);
        });
    });
</script> -->


<!-- ______________________click and fill input fields__________________- -->
<script>
    // Get all rows with class "row-clickable"
    var rows = document.querySelectorAll('.row-clickable');

    // Add click event listener to each row
    rows.forEach(function(row) {
        row.addEventListener('click', function() {
            // Get the data from the clicked row
            var dramaId = this.querySelector('.drama-id').textContent;
            var title = this.querySelector('.title').textContent;

            // Populate the input fields with the data
            document.getElementById('dramaIdInput').value = dramaId;
            document.getElementById('titleInput').value = title;

            // Clear any previous errors
            document.getElementById('dramaIdError').innerHTML = '';
            document.getElementById('titleError').innerHTML = '';
        });
    });
</script>





