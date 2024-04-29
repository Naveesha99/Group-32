<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= ROOT ?>/assets/css/resRequest.css" rel="stylesheet">

    <title>Admin Request</title>
</head>

<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body>
    <div class="container">
    <div class="btn-class">
            <a href="resRequest?status=pending" class="btn-1">Pending</a>
            <a href="resRequest?status=accepted" class="btn-1">Accepted</a>
            <a href="resRequest?status=rejected" class="btn-1">Rejected</a>
            <a href="resRequest?status=refund" class="btn-1">Refund</a>
        </div>
        <div class="content">
            <h1>Sent Request</h1>
            <div class="requests">
                <table>
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
                    <tbody>
                        <?php
                        if ($data && (is_array($data) || is_object($data))) {
                            foreach ($data as $row) {
                                $status = isset($_GET['status']) ? $_GET['status'] : 'pending';
                        // show($_GET['state']);
                        if($row->status == $status){
                                echo '<tr class = "tr-2">
                    <td class="tbl-id">' . $row->id . '</td>
                    <td>' . $row->hallno . '</td>
                    <td>' . $row->date . '</td>
                    <td>' . $row->startTime . '</td>
                    <td>' . $row->endTime . '</td>
                    <td>' . $row->amount . '</td>
                    <td>' . $row->status . '</td>
                    <td>
                        <span class="action_btn">
                            <a class = "btn-1" href="viewRequest?id=' . $row->id . '">View</a>
                        </span>                    
                    </td>
              </tr>';
                        }
                            }
                        } else {
                            echo '<tr><td colspan="9">No data available</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>