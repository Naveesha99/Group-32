<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?=ROOT?>/assets/css/ticket_booking/addtimes.css" rel="stylesheet">
	<title>ADD TIMES</title>
</head>
<body>
	<section class="signup">
		<div class="signup_box">
			<div class="left">
				<div class="contact">
                             
					<form  method="POST">
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

                    <form id="myForm">
                        <label for="drama"><b>Starting Date</b></label><br>
						<input type="date" name="start_date" placeholder="Starting Date">
                        <div class="errors"></div>

                        <label for="drama"><b>End Date</b></label><br>
						<input type="date" name="end_date" placeholder="End Date">
                        <?php if(isset($data['not_date'])) 
                        { ?> 
                        <div class="errors"><?= $data['not_date']?></div> 
                        <?php } ?>

                        <button id="submit_btn" type="button">Find Available Days For Drama</button>
                    </form>


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
                                    <p>Timeslot 2: 6:30</p>
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


                        <button class="submit">ADD</button>
					</form><br>

				</div>
			</div>
            <br><br><br>

            <div class="right_right">
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
                        show($data['filt_date']['available']);
                    }
                    ?>

			    <div class="right">
                <div class="contact">
                    <br><br><br>
                            <?php if(isset($data['all_days'])){ ?>
                                    <table id="myTable2">
                                        <tr>
                                            <th>Drama ID</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                        </tr>
                                        <?php foreach($data['all_days'] as $day) { ?>
                                            <tr class="date-clickable">
                                                <td class="id"><?=$day->drama_id ?></td>
                                                <td class="date"><?=$day->date ?></td>
                                                <td class="time"><?=$day->time ?></td>
                                            </tr>
                                    <?php }?>
                                    </table>
                            <?php } ?>
                        </div>        
                </div>
                
			</div>
	</section>
</body>
</html>

<!-- _____________________________AJAX SEND___________________________ -->
<script>
    $(document).ready(function() {
        $("#submit_btn").click(function() {
            var start_date = $("#start_date").val();
            var end_date = $("#end_date").val();

            $.ajax({
                type: "POST",
                url: "<?=ROOT?>/addtimes",
                data: { start_date: start_date, end_date: end_date },
                success: function(response) 
                {
                    // Handle the response here
                    console.log(response);
                },
                error: function(xhr, status, error) 
                {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>


<!-- ______________________clicl and fill input fields__________________- -->
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


<script>
// Function to check if the given date and time are in the input range
function checkDateInRange(date, time) {
    var startDate = new Date(document.getElementsByName("start_date")[0].value);
    var endDate = new Date(document.getElementsByName("end_date")[0].value);

    var startTime = time.split(":");
    var selectedTime = new Date(date);
    selectedTime.setHours(startTime[0]);
    selectedTime.setMinutes(startTime[1]);
    selectedTime.setSeconds(startTime[2]);

    return selectedTime >= startDate && selectedTime <= endDate;
}
</script>


