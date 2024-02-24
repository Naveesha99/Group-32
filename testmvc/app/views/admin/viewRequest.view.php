<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/viewRequest.css">
    <title>Employee View</title>
</head>

<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php'?>

<body>
    <!-- end of styling are -->

    <!-- Page content -->

    <hr>

    <div class="container">

        <h1 align="center">User Profile</h1>

        <hr>
        <div class="form-right">

            <!-- Personal Email -->
            <label for="full_name">Hall No:
                <input type="text" id="full_name" value="<?= $data['request'][0]->hallno ?>" disabled /></label>
            <!-- NIC -->
            <label for="nic">Name:
                <input type="text" id="nic" value="<?= $data['request'][0]->name ?>" disabled /></label>
            <!-- DOB -->
            <label for="full_name">Date:
                <input type="text" id="full_name" value="<?= $data['request'][0]->date ?>" disabled /></label>

            <!-- Address -->
            <label for="address">Start Time:
                <input type="text" id="address" value="<?= $data['request'][0]->startTime ?>" disabled /></label>

            <!-- Contact No -->
            <label for="contact_no">End Time:
                <input type="text" id="contact_no" value="<?= $data['request'][0]->endTime ?>" disabled /></label>

            <!-- Hired Date -->
            <label for="hired_date">Head Count:
                <input type="text" id="hired_date" value="<?= $data['request'][0]->headCount ?>" disabled /></label>

            <label for="hired_date">Sounds:
                <input type="text" id="hired_date" value="<?= $data['request'][0]->sounds ?>" disabled /></label>

            <label for="hired_date">Standing:
                <input type="text" id="hired_date" value="<?= $data['request'][0]->standings ?>" disabled /></label>

            <label for="message">Message:
                <input type="text1" id="message" value="<?= $data['request'][0]->message ?>" disabled /></label>

            <label for="hired_date">Amount:
                <input type="text" id="hired_date" value="<?= $data['request'][0]->amount ?>" disabled /></label>

            <label for="hired_date">Status:
                <input type="text" id="hired_date" value="<?= $data['request'][0]->status ?>" disabled /></label>

            <label for="hired_date">Reservationist ID:
                <input type="text" id="hired_date" value="<?= $data['request'][0]->reservationistId ?>" disabled /></label>
            <form method="POST">
                <input type="hidden" name="accept_request" value="<?= $data['request'][0]->id ?>">
                <button type="submit" name="Accept" class="btn-accept">Accept</button>
            </form>
        </div>

    </div>
</body>

</html>