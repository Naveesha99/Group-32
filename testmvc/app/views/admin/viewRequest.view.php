<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= ROOT ?>/assets/css/viewRequest.css" rel="stylesheet">

    <title>Admin Request</title>
</head>

<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body>
    <div class="container">
        <!--for demo wrap-->
        <h1>Sent Request</h1>
        <div class="table">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th class="tbl-id">ID</th>
                        <th>HallNo</th>
                        <th>Date</th>
                        <th>Start</th>
                        <th>End</th>
                        <!-- <th>Request Sent Date</th> -->
                        <!-- <th>Initial Payment</th> -->
                        <!-- <th>Remaining Hours for Initial Payment</th> -->
                        <!-- <th>Full Payment</th> -->
                        <!-- <th>Remaining Days for Full Payment</th> -->
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Options</th> <!-- <th>View</th> -->
                        <!-- <th>Edit</th> -->


                    </tr>
                </thead>



            </table>

            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>

                    <?php
                    if ($data && (is_array($data) || is_object($data))) {
                        foreach ($data as $row) {
                            echo '<tr>
                    <td class="tbl-id">' . $row->id . '</td>
                    <td>' . $row->hallno . '</td>
                    <td class="hidden-cell">' . $row->name . '</td> <!-- Hidden cell -->
                    <td>' . $row->date . '</td>
                    <td>' . $row->startTime . '</td>
                    <td>' . $row->endTime . '</td>
                    <td class="hidden-cell">' . $row->hours . '</td> <!-- Hidden cell -->
                    <td class="hidden-cell">' . $row->headCount . '</td> <!-- Hidden cell -->
                    <td class="hidden-cell">' . $row->sounds . '</td> <!-- Hidden cell -->
                    <td class="hidden-cell">' . $row->standings . '</td> <!-- Hidden cell -->
                    <td class="hidden-cell">' . $row->message . '</td> <!-- Hidden cell -->
                    <td>' . $row->amount . '</td>
                    <td>' . $row->status . '</td>
                    <td>
                                    <button type="submit" name="View" id = "openProfile" class="btn">View</button>

                                    <form method="POST">
                                        <input type="hidden" name="accept_request" value="' . $row->id . '">
                                        <button type="submit" name="Delete" class="btn-accept">Accept</button>
                                    </form>
                                    <form method="POST">
                                        <input type="hidden" name="reject_request" value="' . $row->id . '">
                                        <button type="submit" name="Delete" class="btn-reject">Reject</button>
                                    </form>
                                </td>
              </tr>';
                        }
                    } else {
                        echo '<tr><td colspan="9">No data available</td></tr>';
                    }
                    ?>
        </div>
    </div>
</body>

</html>