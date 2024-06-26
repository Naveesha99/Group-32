<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/cwDashboard.css">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/breacrumb.css">
    <script src="https://kit.fontawesome.com/8bff7d7f97.js" crossorigin="anonymous"></script>

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
        <ul class="breadcrumb">
            <!-- <li>
                <a href="#">Home</a>
            </li> -->
            <!-- <i class="fa-solid fa-greater-than"></i> -->
            <li>
                <a href="#" class="active">Dashboard</a>
            </li>
        </ul>
        <div class="cardBox">
            <div class=" card">
                <a href="<?= ROOT ?>/cwArticleDisplay">
                    <div>
                        <div class="numbers"><?= $data['published'] ?></div>
                        <div class="cardName">Total Published Articles</div>
                    </div>
                </a>
            </div>

            <div class=" card">
                <a href="<?= ROOT ?>/cwPending">
                    <div>
                        <div class="numbers"><?= $data['pendingCount'] ?></div>
                        <div class="cardName">Total Pending Articles</div>
                    </div>
                </a>
            </div>

            <div class=" card">
                <a href="<?= ROOT ?>/cwRejected">
                    <div>
                        <div class="numbers"><?= $data['rejected'] ?></div>
                        <div class="cardName">Total Rejected Articles</div>
                    </div>
                </a>
            </div>

            <div class=" card">
            <a href="<?= ROOT ?>/cwDrafts">
                <div>
                    <div class="numbers"><?= $data['draft'] ?></div>
                    <div class="cardName">Total Draft Articles</div>
                </div>
            </a>
            </div>
        </div>

        <div class="title">
            <h2>Published Articles</h2>

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
                <tbody>
                    <?php
                    // Check if $data is not false and is an array or object
                    if ($data['result'] && (is_array($data['result']) || is_object($data['result']))) {
                        foreach ($data['result'] as $row) {
                            $hideLabel = ($row ->hide == 1) ? 'Unhide' : 'Hide';
                            echo '<tr>
                            
                                <td>' . $row->article_name . '</td>
                                <td>' . $row->category . '</td>
                                <td>' . limitWords($row->article_content, 5) . '</td>
                                <td> 
                                    <img src="' . ROOT . '/assets/images/drama_portal/' . $row->image . '" alt="Article Image"></td>
                                <td>
                                    <span class="action_btn">
                                        <form method="POST">
                                            <input type="hidden" name="hide_article" value="' . $row->id . '">
                                            <button type="submit" name="hide" class="btn-hide">'. $hideLabel . '</button>
                                        </form>
                                        <a href = "cwViewOwnArticle?id=' . $row->id . '" class = "btn-view">View</a>

                                            
                                        <a href = "cwEditArticle?id=' . $row->id . '" class = "btn-update">Edit </a>
            

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

    <script>
        window.addEventListener('scroll', function() {
            const navHeight = document.querySelector('.nav').offsetHeight;
            const container = document.querySelector('.container');
            const scrolled = window.scrollY;
            // console.log(navHeight);
            // console.log(container);
            // console.log(scrolled);

            // Adjust margin-top of the container based on scroll position
            container.style.marginTop = (scrolled > navHeight) ? '0' : navHeight + 'px';
        });
    </script>




</body>

</html>