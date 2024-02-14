<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/cwDashboard.css">
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
                    <div class="numbers">1,504</div>
                    <div class="cardName">Total Articles</div>
                </div>
            </div>

            <div class=" card">
                <div>
                    <div class="numbers">1,504</div>
                    <div class="cardName">Total Views</div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Article Name</th>
                        <th>Category</th>
                        <th>Article Content</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <?php
                // Check if $data is not false and is an array or object
                if ($data && (is_array($data) || is_object($data))) {
                    foreach ($data as $row) {
                        echo '<tr>
                                <td>' . $row->id . '</td>
                                <td>' . $row->article_name . '</td>
                                <td>' . $row->category . '</td>
                                <td>' . limitWords($row->article_content, 5) . '</td>
                                <td>' . $row->image . '</td>
                                <td>
                                    <span class="action_btn">
                                        <a href="<?=ROOT?>/cwArticleDisplay">View</a>
                                        <a href="#">Edit</a>
                                        <a href="#" >Delete</a>
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