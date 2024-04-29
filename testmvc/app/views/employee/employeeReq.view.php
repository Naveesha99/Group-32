<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/employeeRequests.css">
    <title>Employee Requests</title>
</head>

<?php require_once 'employeeSideBar.php' ?>
<?php include 'navBar.php' ?>

<?php
function limitWords($text, $limit)
{
    $words = explode(" ", $text);
    $limitedWords = array_slice($words, 0, $limit);
    $result = implode(" ", $limitedWords);

    if (count($words) > $limit) {
        $result .= '...';
    }

    return $result;
}
?>

<body>
    <div id="overlay"></div>
    <div class="container">
        <div class="cardBox">
            <div class="card">
                <a href="<?= ROOT ?>/EmployeeRequestForm">
                    <div>
                        <div class="cardName">Request to Leave</div>
                    </div>
                </a>
            </div>

            <div class="cardN">
                <div>
                    <div class="cardName">Total Leaves</div>
                    <div class="numbers">10</div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Leave Type</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Reason</th>
                        <th>State</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($data && (is_array($data))) {
                        foreach ($data as $row) {
                    ?> <tr>
                            <tr>
                                <td><?= $row->leave_type ?></td>
                                <td><?= $row->start_date ?></td>
                                <td><?= $row->end_date ?></td>
                                <td><?= limitWords($row->reason, 5) ?></td>
                                <td><?= $row->state ?></td>
                                <td>
                                    <span class="action_btn">
                                        <?php if ($row->state === 'pending') : ?>
                                            <form>
                                                <input type="hidden" name="reqId" value="<?=$row->id?>">
                                                <button type="button" data-order='<?= json_encode($row) ?>' class="btn-view" onClick="openPopup(this)">View</button>
                                            </form>
                                            <a href="empEditRequest?id=<?= $row->id ?>" class="btn-update">Edit</a>
                                            <form method="POST">
                                                <input type="hidden" name="delete_request" value="<?= $row->id ?>">
                                                <button type="submit" name="Delete" class="btn-delete">Delete</button>
                                            </form>
                                        <?php else : ?>
                                            <form >
                                                <input type="hidden" name="reqId" value="<?=$row->id?>">
                                                <button type="button" data-order='<?= json_encode($row) ?>' class="btn-view" onClick="openPopup(this)">View</button>
                                            </form>
                                            <button class="btn-update" disabled>Edit</button>
                                            <button class="btn-delete" disabled>Delete</button>
                                        <?php endif; ?>
                                    </span>
                                </td>
                            </tr>
                    <?php
                        }
                    } else {
                        echo '<tr><td colspan="6">No data available</td></tr>';
                    }
                    ?>

                    <div class="card1" id="card1">
                        <div class="box">
                            <div class="content">

                                <div class="paragraph">
                                    <label for="employee_name">Employee Name:</label>
                                    <input type="text" id="employee_name" name="employee_name" readonly>

                                    <label for="leave_type">Leave Type:</label>
                                    <input type="text" id="leave_type" name="leave_type" readonly>

                                    <label for="start_date">Start Date:</label>
                                    <input type="text" id="start_date" name="start_date" readonly>

                                    <label for="end_date">End date:</label>
                                    <input type="text" id="end_date" name="end_date" readonly>

                                    <label for="reason">Reason:</label>
                                    <input type="text" id="reason" name="reason" readonly>

                                    <label for="state">Status:</label>
                                    <input type="text" id="state" name="state" readonly>
                                    <button onclick="closePopup()">Close</button>
                                </div>

                            </div>
                        </div>
                    </div>

                </tbody>


            </table>
        </div>


    </div>

    <script>
        function openPopup(button) {
            var order = JSON.parse(button.getAttribute("data-order"));
            document.getElementById('leave_type').value = order.leave_type;
            document.getElementById('employee_name').value = order.employee_name;
            document.getElementById('start_date').value = order.start_date;
            document.getElementById('end_date').value = order.end_date;
            document.getElementById('reason').value = order.reason;
            document.getElementById('state').value = order.state;
            document.getElementById('card1').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        }

        function closePopup() {
            document.getElementById('card1').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
            window.location.href = "EmployeeReq";
        }
    </script>

</body>

</html>