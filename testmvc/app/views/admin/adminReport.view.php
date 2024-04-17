<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <canvas id="incomeChart"></canvas>
        </div>
    </div>

    <script>
        // Sample monthly income data
        var monthlyIncome = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Monthly Income',
                data: [500, 800, 1200, 900, 1500, 1000],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        };

        // Get the canvas element
        var canvas = document.getElementById('incomeChart');
        var ctx = canvas.getContext('2d');

        // Draw the chart
        var chart = new Chart(ctx, {
            type: 'bar',
            data: monthlyIncome,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
