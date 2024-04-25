<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/cwArticleDisplay.css">
    <title>Display Article</title>
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
                <tbody>
                    <?php
                    // Check if $data is not false and is an array or object
                    if ($data && (is_array($data) || is_object($data))) {
                        foreach ($data as $row) {
                            echo '<tr>
                               
                                <td>' . $row->article_name . '</td>
                                <td>' . $row->category . '</td>
                                <td>' . limitWords($row->article_content, 5) . '</td>
                                <td>' . $row->image . '</td>
                                <td>
                                    <span class="action_btn">
                                    <button class="btn-hide">Hide</button>
                                        
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

                </tbody>



            </table>
        </div>


    </div>

</body>

</html>