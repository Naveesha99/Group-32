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
        <!--for demo wrap-->
        <h1>Sent Request</h1>
        <div class="requests">
            <table>
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

                <?php
                if ($data && (is_array($data) || is_object($data))) {
                    foreach ($data as $row) {
                        echo '<tr class = "tr-2">
                    <td class="tbl-id">' . $row->id . '</td>
                    <td>' . $row->employee_name . '</td>
                    <td>' . $row->leave_type . '</td>
                    <td>' . $row->start_date . '</td>
                    <td>' . $row->end_date . '</td>
                    <td>' . $row->reason . '</td>
                    <td>' . $row->state . '</td>
                    <td class="hidden-cell">' . $row->emp_id . '</td> <!-- Hidden cell -->
                    <td class="hidden-cell">' . $row->Created_at . '</td> <!-- Hidden cell -->
                    <td>
                        <span class="action_btn">
                            <a class = "btn" href="viewLeaveRequest?id=' . $row->id . '">View</a>
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