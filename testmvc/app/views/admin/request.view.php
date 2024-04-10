<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= ROOT ?>/assets/css/request.css" rel="stylesheet">

    <title>Admin Request</title>
</head>

<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body>
    <div class="container">
        <!--for demo wrap-->
        <h1>Sent Request</h1>
        <div class="requests">
            <table>
                <tr class="tr-1">
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

                <?php
                if ($data && (is_array($data) || is_object($data))) {
                    foreach ($data as $row) {
                        echo '<tr class = "tr-2">
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
                        <span class="action_btn">
                            <a class = "btn" href="viewRequest?id=' . $row->id . '">View</a>
                        </span>                    
                    </td>
              </tr>';
                    }
                } else {
                    echo '<tr><td colspan="9">No data available</td></tr>';
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>