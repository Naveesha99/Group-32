<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/addDrama.css">

    <title>Add Drama</title>
</head>
<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body>
    <div class="container">
        <form method="POST" class="add-drama">
            <h1>Add New Drama</h1><br>
            <label for="dramaName">Drama Name
                <input type="text" name="dramaName"></label>
            <label for="showingDate">Showing Date
                <div class="checkbox-group" id="days">
                    <label class="checkbox"><input type="checkbox" name="showingDate[]" value="monday"> Monday</label>
                    <label class="checkbox"><input type="checkbox" name="showingDate[]" value="tuesday"> Tuesday</label>
                    <label class="checkbox"><input type="checkbox" name="showingDate[]" value="wednesday"> Wednesday</label>
                    <label class="checkbox"><input type="checkbox" name="showingDate[]" value="thursday"> Thursday</label>
                    <label class="checkbox"><input type="checkbox" name="showingDate[]" value="friday"> Friday</label>
                    <label class="checkbox"><input type="checkbox" name="showingDate[]" value="saturday"> Saturday</label>
                    <label class="checkbox"><input type="checkbox" name="showingDate[]" value="sunday"> Sunday</label>
                </div>
            </label>


            <label for="showingTime">Showing Date
                <div class="checkbox-group" id="times">
                    <label class="checkbox"><input type="checkbox" name="showingTime[]" value="slot1">Slot 1 (09:00 - 10:00)</label>
                    <label class="checkbox"><input type="checkbox" name="showingTime[]" value="slot2">Slot 2 (11:00 - 12:30)</label>
                    <label class="checkbox"><input type="checkbox" name="showingTime[]" value="slot3">Slot 3 (14:00 - 15:30)</label>
                </div>
            </label>
            <label for="description">Description
                <input type="textarea" name="description"></label>
            <label for="ticket">Ticket Price
                <input type="text" name="ticketPrice">
                <span>LKR</span>
            </label>
            <label for="coverPhoto">Cover Photo
                <input type="file" name="coverPhoto"><br>
                <span>image should **MB and 0000*1111 resolution<span>
            </label>
            <!-- <label for="empContact">Contact
                    <input type="text" name="empContact"></label> -->
            <!-- <label for="empRoll">Employee Roll</label> -->
            <!-- <select class="select" name="empRoll"> -->
            </select>

            <br>
            <button class="btn-1">Submit</button>
        </form>
    </div>
</body>

</html>