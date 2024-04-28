<?php
foreach ($data['payments'] as $key => $value) {
    $dataPoints[] = array("y" => $value, "label" => $key);
}
foreach ($data['status_counts'] as $key => $value) {
    $statusCounts[] = array("y" => $value, "label" => $key, "color" => "#265073", "exploded" => true);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/adminDashboard.css">

    <title>Admin Panel</title>

    <script>
        window.onload = function() {
            var dataPoints1 = <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>;
            var chart1 = new CanvasJS.Chart("chartContainer-1", {
                animationEnabled: true,
                title: {
                    text: "Ticket Income"
                },
                axisY: {
                    title: "Income in LKR",
                    includeZero: true
                },
                axisX: {
                    title: "Months"
                },
                data: [{
                    color: "#265073",
                    type: "bar",
                    yValueFormatString: "#,###",
                    indexLabel: "{y}",
                    indexLabelPlacement: "inside",
                    indexLabelFontWeight: "bolder",
                    indexLabelFontColor: "white",
                    dataPoints: dataPoints1
                }]
            });
            chart1.render();

            var dataPoints2 = <?php echo json_encode($statusCounts, JSON_NUMERIC_CHECK); ?>;
            var chart2 = new CanvasJS.Chart("chartContainer-2", {
                animationEnabled: true,
                title: {
                    text: "Reservation Requests"
                },
                subtitles: [{
                    text: "Current Status"
                }],
                data: [{
                    type: "pie",
                    yValueFormatString: "#,##0",
                    indexLabel: "{label} ({y})",
                    dataPoints: dataPoints2
                }]
            });
            chart2.render();
        }
    </script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>

<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body class="dashboard">
    <div class="container">

        <div class="content">
            <div class="charts">
                <div class="chart-1" id="chartContainer-1"></div>
                <div class="chart-2" id="chartContainer-2"></div>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>6</h1>
                        <h3>Showing Dramas</h3>
                    </div>
                    <div class="icon-case">
                        <img src="students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>
                            <?php echo count($data['employee']) ?>
                        </h1>
                        <h3>Total Employees</h3>
                    </div>
                    <div class="icon-case">
                        <img src="teachers.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>350000</h1>
                        <h3>Income</h3>
                    </div>
                    <div class="icon-case">
                        <img src="income.png" alt="">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="tasks">
                    <div class="title">
                        <h2>Daily Tasks</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Task</th>
                            <th>Status</th>
                            <!-- <th>Amount</th>
                            <th>Option</th> -->
                        </tr>
                        <tr>
                            <td>Check reservation request</td>
                            <td>
                                <label for="dropdown"></label>
                                <select id="dropdown" name="dropdown">
                                    <option value="option1">To do</option>
                                    <option value="option2">In progress</option>
                                    <option value="option3">Done</option>
                                </select>
                            </td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>
                                <label for="dropdown"></label>
                                <select id="dropdown" name="dropdown">
                                    <option value="option1">To do</option>
                                    <option value="option2">In progress</option>
                                    <option value="option3">Done</option>
                                </select>
                            </td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>
                                <label for="dropdown"></label>
                                <select id="dropdown" name="dropdown">
                                    <option value="option1">To do</option>
                                    <option value="option2">In progress</option>
                                    <option value="option3">Done</option>
                                </select>
                            </td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>
                                <label for="dropdown"></label>
                                <select id="dropdown" name="dropdown">
                                    <option value="option1">To do</option>
                                    <option value="option2">In progress</option>
                                    <option value="option3">Done</option>
                                </select>
                            </td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>
                                <label for="dropdown"></label>
                                <select id="dropdown" name="dropdown">
                                    <option value="option1">To do</option>
                                    <option value="option2">In progress</option>
                                    <option value="option3">Done</option>
                                </select>
                            </td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>
                                <label for="dropdown"></label>
                                <select id="dropdown" name="dropdown">
                                    <option value="option1">To do</option>
                                    <option value="option2">In progress</option>
                                    <option value="option3">Done</option>
                                </select>
                            </td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                    </table>
                </div>
                <div class="new-dramas">
                    <div class="title">
                        <h2>New Dramas</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Drama</th>
                            <th>option</th>
                        </tr>
                        <tr>
                            <td>Sinhabahu</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Steve Doe</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Steve Doe</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Steve Doe</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>