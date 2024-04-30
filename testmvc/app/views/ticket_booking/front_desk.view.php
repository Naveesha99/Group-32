<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?= ROOT ?>/assets/css/ticket_booking/front_desk.css" rel="stylesheet">

	<title>signup</title>
</head>



<body>
        <?php 
        if(isset($data['days'])) 
        {
            ?>
            <table>
                <thead>
                    <tr>
                        <th>Drama ID</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Book</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['days'] as $x) { ?>
                        <form method="post" action="<?=ROOT?>/res_seat_map/" id="form1">
                            <tr>
                                <td><?php echo $x->drama_id; ?></td>
                                <td><?php echo $x->date; ?></td>
                                <td><?php echo $x->time; ?></td>
                                <input type="hidden" name="drama_id" value="<?= $x->drama_id ?>">
                                <input type="hidden" name="date" value="<?= $x->date ?>">
                                <input type="hidden" name="time" value="<?= $x->time ?>">

                                <td><button type="submit">Book</button></td>
                            </tr>
                        </form>
                    <?php } ?>
                </tbody>
            </table>
            <div class="ticket-scan">
                <a href="<?=ROOT?>/check_viewers">
                <div class="btn-1">Ticket QR</div>
            </a>
            <a href="<?=ROOT?>/reservaqrscanner">
                <div class="btn-1">Reservation QR</div>
            </a>
            </div>
        <?php
        } 
        else 
        {
            echo 'No data available.';
        }
        ?>

	<div class="container">
		<div class="content">
			<form  method="POST"  enctype="multipart/form-data" >
				<!-- <h2>Physically Ticket Booking</h2> -->
				
                


			</form>
		</div>
	</div>
</body>

</html>





