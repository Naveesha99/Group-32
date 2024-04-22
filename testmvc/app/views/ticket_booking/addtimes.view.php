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
                            <?php 
                                if(isset($data['row']))
                                {
                            ?>
                                <div class="errors"><?= $data['row']?></div>
                            <?php
                                }
                            ?>
					<form  method="POST">
                        <h3 class="sign">ADD TIMES</h3>

                        <label for="drama"><b>Select Drama ID</b></label><br>
                        <input type="number" name="drama_id" placeholder="Drama ID">
                        <div class="errors"></div>

                        <label for="drama"><b>Starting Date</b></label><br>
						<input type="date" name="start_date" placeholder="Starting Date">
                        <div class="errors"></div>

                        <label for="drama"><b>End Date</b></label><br>
						<input type="date" name="end_date" placeholder="End Date">
                        <div class="errors"></div>

                        <label for="drama"><b>Drama Starting Time for above each day</b></label><br>
						<input type="date" name="end_date" placeholder="End Date">
                        <div class="errors"></div>

                        <label for="drama"><b>Number of Time Slots Per Day</b></label><br>
						<input type="date" name="end_date" placeholder="End Date">
                        <div class="errors"></div>

                        <label for="drama"><b>Drama Ticket Price</b></label><br>
                        <input type="number" name="price" placeholder="Price">
                        <div class="errors"></div>

                            <?php 
                                if(isset($data['invalid']))
                                {
                            ?>
                                <div class="errors"><?= $data['invalid']?></div>
                            <?php
                                }
                            ?>
                        <button class="submit">ADD</button>
					</form><br>
				</div>
			</div>

			<div class="right">
                <div class="contact">
                


                    <?php if(isset($data['home_data'])): 
                        ?>
                        <table>
                            <thead>
                                <tr>
                                    <th>DRAMA ID</th>
                                    <th>TITLE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data['home_data'] as $drama): ?>
                                    <tr>
                                        <td><?= $drama->id ?></td>
                                        <td><?= $drama->title ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                </div>
			</div>
		</div>
	</section>
</body>
</html>

