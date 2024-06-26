<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/cwArticleDisplay.css">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/breacrumb.css">
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
        <ul class="breadcrumb">
            <li>
                <a href="<?= ROOT ?>/cwDramaPortal">Dramas</a>
            </li>
            <i class="fa-solid fa-greater-than"></i>
            <li>
                <a href="#" class="active">All articles</a>
            </li>
        </ul>

        <form>
            <div class="form">
                <form>
                    <div class="form-input">
                        <input type="search" placeholder="Search...">
                        <button type="submit" class="search-btn">
                            <i class='bx bx-search'></i>
                        </button>
                    </div>
                </form>
            </div>

        </form>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <!-- <th>Id</th> -->
                        <th>Article Name</th>
                        <th>Category</th>
                        <th>Article Content</th>
                        <th>Image</th>
                        <th>Progress</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <?php
                if ($data && (is_array($data) || is_object($data))) {
                    foreach ($data as $row) {
                        echo '<tr>
                                
                                <td>' . $row->article_name . '</td>
                                <td>' . $row->category . '</td>
                                <td>' . limitWords($row->article_content, 5) . '</td>
                                <td>
                                    <img src="' . ROOT . '/assets/images/drama_portal/' . $row->image . '" alt="Article Image">
                                </td>
                                <td>' . $row->progress . '</td>
                                <td>
                                    <span class="action_btn">
                                        
                                        <a href = "cwViewOwnArticle?id=' . $row->id . '" class = "btn-view">View</a>


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

    <script>
        const search = document.querySelector(".form input"),
            table_rows = document.querySelectorAll("tbody tr");

        search.addEventListener('input', performSearch);

        function performSearch() {
            table_rows.forEach((row, i) => {
                let search_data = search.value.toLowerCase(),
                    row_text = '';

                for (let j = 0; j < row.children.length - 1; j++) {
                    row_text += row.children[j].textContent.toLowerCase();


                }
                // console.log(row_text);

                row.classList.toggle('hide', row_text.indexOf(search_data) < 0);
            })
        }
    </script>
</body>