<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/viewRequest.css">
    <title>Employee View</title>
</head>

<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body>
    <!-- end of styling are -->

    <!-- Page content -->

    <hr>

    <div class="container">

</h1><h1 align="center">Request ID <?= $data['request'][0]->id ?></h1>


        <hr>
        <div class="form-right">

            <!-- Personal Email -->
            <label for="hallno">Hall No:
                <input type="text" id="hallno" value="<?= $data['request'][0]->hallno ?>" disabled /></label>
            <!-- NIC -->
            <label for="name">Name:
                <input type="text" id="name" value="<?= $data['request'][0]->name ?>" disabled /></label>
            <!-- DOB -->
            <label for="full_name">Date:
                <input type="text" id="date" value="<?= $data['request'][0]->date ?>" disabled /></label>

            <!-- Address -->
            <label for="startTime">Start Time:
                <input type="text" id="startTime" value="<?= $data['request'][0]->startTime ?>" disabled /></label>

            <!-- Contact No -->
            <label for="endTime">End Time:
                <input type="text" id="endTime" value="<?= $data['request'][0]->endTime ?>" disabled /></label>

            <!-- Hired Date -->
            <label for="headCount">Head Count:
                <input type="text" id="headCount" value="<?= $data['request'][0]->headCount ?>" disabled /></label>

            <label for="sounds">Sounds:
                <input type="text" id="sounds" value="<?= $data['request'][0]->sounds ?>" disabled /></label>

            <label for="standings">Standing:
                <input type="text" id="standings" value="<?= $data['request'][0]->standings ?>" disabled /></label>

            <label for="message">Message:
                <input type="text1" id="message" value="<?= $data['request'][0]->message ?>" disabled /></label>

            <label for="amount">Amount:
                <input type="text" id="amount" value="<?= $data['request'][0]->amount ?>" disabled /></label>

            <label for="status">Status:
                <input type="text" id="status" value="<?= $data['request'][0]->status ?>" disabled /></label>

            <label for="reservationistId">Reservationist ID:
                <input type="text" id="reservationistId" value="<?= $data['request'][0]->reservationistId ?>" disabled /></label>
            <div class="btn-container">
                <form method="POST">
                    <input type="hidden" name="accept_request" value="<?= $data['request'][0]->id ?>">
                    <button type="submit" name="Accept" class="btn-accept">Accept</button>
                </form>
                <form method="POST">
                    <input type="hidden" name="reject_request" value="<?= $data['request'][0]->id ?>">
                    <button type="submit" name="Reject" class="btn-reject">Reject</button>
                </form>
            </div>
        </div>

    </div>
</body>

</html>