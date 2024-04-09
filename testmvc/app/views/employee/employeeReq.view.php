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
    <div class="container">
        <div class="cardBox">
            <div class="card">
            <a href="<?= ROOT ?>/EmployeeRequestForm">
                <div>
                    <div class="cardName">Request to Leave</div>
                </div>
            </div>

            <div class="card">
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

                <?php
                if($data &&(is_array($data))) {
                    foreach($data as $row){
                        echo '<tr>
                        <td>' . $row->leave_type . ' </td>
                        <td>' . $row->start_date . ' </td>
                        <td>' . $row->end_date . ' </td>
                        <td>' . limitWords($row->reason,5) . ' </td>
                        <td>' . $row->state . '</td>
                        <td>
                                <span class="action_btn">
                                        
                                    <a href = "employeeReqView?id=' . $row->id . '" class = "btn-view">View</a>

                                        
                                    <a href = "cwEditArticle?id=' . $row->id . '" class = "btn-update">Edit </a>
            

                                    <form method="POST">
                                        <input type="hidden" name="delete_article" value="' . $row->id . '">
                                         <button type="submit" name="Delete" class="btn-delete">Delete</button>
                                    </form>
                                </span>
                        </td>
                        </tr>';
                    }
                }else {
                    echo '<tr><td colspan="9">No data available</td></tr>';
                }
                ?>
            </table>
        </div>


    </div>

</body>

</html>