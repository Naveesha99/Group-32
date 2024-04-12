<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/cwDashboard.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <title>content writer dashboard</title>
</head>
<?php require_once 'cwNaviBar.php' ?>
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
            <div class=" card">
                <div>
                    <div class="numbers"><?= $data['published'] ?></div>
                    <div class="cardName">Total Published Articles</div>
                </div>
            </div>

            <div class=" card">
                <div>
                    <div class="numbers"><?= $data['draft'] ?></div>
                    <div class="cardName">Total Draft Articles</div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <!-- <th>Id</th> -->
                        <th>Article Name</th>
                        <th>Category</th>
                        <th>Article Content</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <?php
                // Check if $data is not false and is an array or object
                if ($data['result'] && (is_array($data['result']) || is_object($data['result']))) {
                    foreach ($data['result'] as $row) {
                        echo '<tr>
                                <td>' . $row->article_name . '</td>
                                <td>' . $row->category . '</td>
                                <td>' . limitWords($row->article_content, 5) . '</td>
                                <td>' . $row->image . '</td>
                                <td>
                                    <span class="action_btn">
                                        <a href = "cwViewOwnArticle?id=' . $row->id . '" class = "btn-view">View</a>

                                            
                                        <a href = "cwEditArticle?id=' . $row->id . '" class = "btn-update">Edit </a>
            

                                        <form method="POST">
                                            <input type="hidden" name="delete_article" value="' . $row->id . '">
                                            <button type="submit" name="Delete" class="btn-delete">Delete</button>
                                        </form>
                                    </span>
                                </td>
                              </tr>';
                    }
                } else {
                    echo '<tr><td colspan="9">No data available</td></tr>';
                }
                ?>

            </table>

            


        </div>


    </div>




</body>

</html>