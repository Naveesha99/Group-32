<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT?>/assets/css/pendingArticle.css">
    <title>Pending Articles</title>
</head>
<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body>
    <div class="container">
        <div class="content">
            <div class="requests">
                <table>
                    <thead>
                        <tr>
                            <th>Article ID</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Category</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($data && (is_array($data) || is_object($data))) {
                            foreach ($data['pending'] as $row) {
                                echo '<tr class = "tr-2">
                    <td class="tbl-id">' . $row->id . '</td>
                    <td>' . $row->article_name . '</td>
                    <td>' . $row->cwName . '</td>
                    <td>' . $row->category . '</td>
                    <td>
                        <span class="action_btn">
                            <a class = "btn-1" href="viewPendingarticles?id=' . $row->id . '">View</a>
                        </span>                    
                    </td>
              </tr>';
                            }
                        } else {
                            echo '<tr><td colspan="9">No data available</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>