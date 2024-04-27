<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/viewRequest.css">

    <title>Status and Reason</title>
    <style>
        #reason {
            display: none;
        }
    </style>
    <?php include 'adminSidebar.php' ?>
    <?php include 'navBar.php' ?>
</head>

<body>
    <div class="container">
        <div class="form-right">
            <form method="POST" class="form">
                <label for="hallno">Hall No:</label>
                <input type="text" id="hallno" value="<?= $data['request'][0]->hallno ?>" disabled />
                <label for="name">Name:</label>

                <input type="text" id="name" value="<?= $data['request'][0]->name ?>" disabled />
                <label for="full_name">Date:</label>
                <input type="text" id="date" value="<?= $data['request'][0]->date ?>" disabled />

                <label for="startTime">Start Time:</label>
                <input type="text" id="startTime" value="<?= $data['request'][0]->startTime ?>" disabled />

                <label for="endTime">End Time:</label>
                <input type="text" id="endTime" value="<?= $data['request'][0]->endTime ?>" disabled />

                <label for="headCount">Head Count:</label>
                <input type="text" id="headCount" value="<?= $data['request'][0]->headCount ?>" disabled />

                <label for="sounds">Sounds:</label>
                <input type="text" id="sounds" value="<?= $data['request'][0]->sounds ?>" disabled />

                <label for="standings">Standing:</label>
                <input type="text" id="standings" value="<?= $data['request'][0]->standings ?>" disabled />

                <label for="message">Message:</label>
                <input type="text1" id="message" value="<?= $data['request'][0]->message ?>" disabled />

                <label for="amount">Amount:</label>
                <input type="text" id="amount" value="<?= $data['request'][0]->amount ?>" disabled />

                <label for="status">Current Status:</label>
                <input type="text" id="status" value="<?= $data['request'][0]->status ?>" disabled />
                <select id="popup" name="status">
                    <option value="accepted">Accept</option>
                    <option value="rejected">Reject</option>
                </select>
                <br>
                <div id="reason">
                    <label for="reason">Reason:</label>
                    <textarea name="reason"></textarea>
                    <?php if (!empty($errors['reason'])) : ?>
							<span style="color: red; font-weight: bold; margin-bottom: 5px;">
								<?= show($errors['reason']) ?>
							</span>
						<?php endif; ?>

                </div>
                <br>
                <button class="btn-1" id="submit">Submit</button>
            </form>
        </div>
    </div>


    <script>


window.onload = function() {

    var status1 = document.getElementById('status').value;
    var btn = document.getElementById('submit');
    var popup = document.getElementById('popup');
    console.log(status1);

    if (status1 == 'accepted' || status1 == 'rejected') {
        btn.style.display = 'none';
        popup.style.display = 'none';

    } else {
        btn.style.display = 'block';
        popup.style.display = 'block';
    }
}
        document.getElementById('popup').addEventListener('change', function() {
            var reasonField = document.getElementById('reason');
            if (this.value === 'rejected') {
                reasonField.style.display = 'block';
            } else {
                reasonField.style.display = 'none';
            }
        });
    </script>
</body>

</html>