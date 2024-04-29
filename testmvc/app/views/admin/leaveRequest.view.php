<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= ROOT ?>/assets/css/leaveRequest.css" rel="stylesheet">

    <title>Admin Request</title>
</head>

<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body>
    <div class="container">
        <div class="content">
            <h1>Sent Request</h1>
            <div class="requests">
                <table>
                    <thead>
                        <tr class="tr-1">
                            <th class="tbl-id">ID</th>
                            <th>Employee Name</th>
                            <th>Leave Type</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Reason</th>
                            <th>Status</th>
                            <th>Opthion</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if ($data && (is_array($data) || is_object($data))) {
                    foreach ($data as $row) {
                        if($row->state == 'pending'){
                        echo '<tr class = "tr-2">
                            <td class="tbl-id">' . $row->id . '</td>
                            <td>' . $row->employee_name . '</td>
                            <td>' . $row->leave_type . '</td>
                            <td>' . $row->start_date . '</td>
                            <td>' . $row->end_date . '</td>
                            <td>' . $row->reason . '</td>
                            <td>' . $row->state . '</td>                    <td>
                                <span class="action_btn">
                                    <a class = "btn-1" href="viewLeaveRequest?id=' . $row->id . '">View</a>
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