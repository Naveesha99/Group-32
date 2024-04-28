<?php
$dataPoints = $data['dataPoints'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/adminArticles.css">
    <title>Admin Articles</title>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</head>
<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body>
    <div class="container">
        <div class="content">
            <div class="cardBox">
                <a href="<?= ROOT ?>/pendingArticles">
                    <div class="card">
                        <div class="box">
                            <h2>Pending Articles</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div id="chartContainer" style="height: 370px; width: 100%;"></div>
        </div>
    </div>
</body>
<script>
    window.onload = function() {

        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            theme: "light2",
            title: {
                text: "Likes of Articles in Last 7 Days"
            },
            axisY: {
                title: "Likes",
            },
            axisX: {
                title: "Articles Name",
            },
            data: [{
                color: "#265073",
                type: "column",
                yValueFormatString: "#,###",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();

    }
</script>

</html>