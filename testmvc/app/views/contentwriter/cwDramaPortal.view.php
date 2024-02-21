<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/cwDramaPortal.css">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/cwDramaPortal.css">
    <title>Drama Portal</title>
</head>
<?php require_once 'cwNaviBar.php' ?>
<?php include 'navBar.php' ?>

<body>

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
    <div class="container">
        <!-- <div class="heading">
            <h1>DRAMA PORTAL</h1>
        </div> -->
        <?php
        if ($data && (is_array($data) || is_object($data))) {
            foreach ($data as $row) {
                echo  '<div class="card">
                        <div class="imgBX">
                            <img src="' . ROOT . '/assets/images/drama_portal/' . $row->image . '" alt="image" >
                        </div>
    
                        <div class="Content">
                            <h2>' . $row->article_name . '</h2>
                            <p>Category:' . $row->category . '</p>
                            <p>' . limitWords($row->article_content, 20) . '</p>
                            <a href="cwViewOwnArticle?id=' . $row->id . '">READ MORE</a>
    
                        </div>
                        </div>';
            }
        } else {
            echo '<p>No data available</p>';
        }
        ?>
        </div>

</body>

</html>