<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/dramaincome.css">
    <title>Drama Income</title>
</head>
<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body>
    <div class="container">
        <div class="content">
            <div class="income">
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
                        foreach ($data['order'] as $row) :
                        ?>
                            <tr>
                                <td><?= $row->drama_date ?></td>
                                <td><?= $row->order_id ?></td>
                                <td><?= $row->payment ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <a href="<?= ROOT ?>/dramaIncome?page=1"><button class="btn-1">First</button></a>
            <?php if (isset($_GET['page']) && $_GET['page'] > 1) : ?>
                <a href="<?= ROOT ?>/dramaIncome?page=<?= $_GET['page'] - 1 ?>"><button class="btn-1">Previous</button></a>
            <?php else : ?>
                <a><button class="btn-1">Previous</button></a>
            <?php endif; ?>

            <?php if (!isset($_GET['page'])) : ?>
                <a href="<?= ROOT ?>/dramaIncome?page=2"><button class="btn-1">Next</button></a>
            <?php else : ?>
                <?php if ($_GET['page'] >= $data['pages']) : ?>
                    <a><button class="btn-1">Next</button></a>
                <?php else : ?>
                    <a href="<?= ROOT ?>/dramaIncome?page=<?= $_GET['page'] + 1 ?>"><button class="btn-1">Next</button></a>
                <?php endif; ?>
            <?php endif; ?>
            <a href="<?= ROOT ?>/dramaIncome?page=<?= $data['pages'] ?>"><button class="btn-1">Last</button></a>
        </div>
    </div>
</body>

</html>