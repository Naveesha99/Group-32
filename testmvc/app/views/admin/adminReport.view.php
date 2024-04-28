<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/adminReport.css">
    <title>Document</title>
</head>
<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body>
    <div class="container">
        <div class="content">
            <div class="left">
                <div class="ticket-income">
                    <table>
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Order ID</th>
                                <th>Income</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $arr1 = array_slice($data['order'], -10);
                            foreach ($arr1 as $row) :
                            ?>
                                <tr>
                                    <td><?= $row->drama_date ?></td>
                                    <td><?= $row->order_id ?></td>
                                    <td><?= $row->payment ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <a href="<?= ROOT ?>/dramaIncome?page=1"><button class="btn-1">View All</button></a>
                </div>
            </div>
            <div class="right">
                <div class="reservation-income">
                <table>
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Reservation ID</th>
                                <th>Income</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $arr2 = array_slice($data['income'], -10);
                            foreach ($arr2 as $row2) :
                            ?>
                                <tr>
                                    <td><?= $row2->id ?></td>
                                    <td><?= $row2->date ?></td>
                                    <td><?= $row2->amount ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>