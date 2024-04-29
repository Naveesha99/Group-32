<?php

if (!empty($data['payments'])) {
    foreach ($data['payments'] as $key => $value) {
        $dataPoints[] = array("y" => $value, "label" => $key);
    }
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
        </div>
        
    </div>
</body>

</html>