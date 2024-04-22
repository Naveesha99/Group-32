<?php
// show($data); 

$test = array();
// show($test);
// $count = 0;
// $label = array();
// $y = array();
foreach ($data as $row) {
    // array_push($label, $row->month);
    // array_push($y, $row->income);
    // $test["label"] = $row->month;
    // $test["y"] = $row->income;

    $arr1 = array("y" => $row->income, "label" => $row->month);
    array_push($test, $arr1);
}

$arr2 = array_slice($test, -12);
// array_push($test, $label);
// array_push($test, $y);
// show($arr1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/adminReport.css">
    <title>Document</title>

    <?php include 'adminSidebar.php' ?>
    <?php include 'navBar.php' ?>
    <script>
        window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
                title: {
                    text: "Ticket Income"
                },
                axisY: {
                    title: "Income in LKR"
                },
                data: [{
                    markerColor: "#e6cc00",
                    type: "line",
                    showInLegend: true,
                    dataPoints: <?php echo json_encode($arr2, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();

        }

        document.querySelector('.btn').addEventListener('click', function() {
            var period = document.querySelector('#period').value;
            var url = "<?= ROOT ?>/adminReport/" + period;
            switch (period) {
                case 'last6months':
                    var months = 6;
                    break;
                case 'last3months':
                    var months = 3;
                    break;
                case 'lastyear':
                    var months = 12;
                    break;
            }
            window.location.href = url;
        });
console.log("months");
    </script>
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="filter">
                <select name="period" id="period">
                    <option value="last6mo1nths">Last 6 Months</option>
                    <option value="last3months">Last 3 Months</option>
                    <option value="lastyear">Last Year</option>
                </select>
                <button type="submit" class="btn" id="btn">Submit</button>
            </div>
            <div class="chartContainer" id="chartContainer"></div>
        </div>
    </div>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>

</html>