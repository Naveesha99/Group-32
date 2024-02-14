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
                            <a href="cwViewOwnArticle">READ MORE</a>
    
                        </div>
                        </div>';
            }
        } else {
            echo '<p>No data available</p>';
        }
        ?>

        <!-- <div class="card">
            <div class="imgBX">
                <img src="<?= ROOT ?>/assets/images/home/i10.jpeg" alt="" >
            </div>
            <div class="Content">
                <h2>RAWANA</h2>
                <p>Category:Tragedy</p>
                <p>Lanka flourished under his rule and Ravana had proceeded on a series of campaigns conquering humans, celestials and demons. It is said that Ravana ruled Lanka for several hundred years prior to the times of Ramayana, when he was killed by prince Rama for kidnapping his wife Sita.</p>
                <a href="#">READ MORE</a>
            </div>
        </div>

        <div class="card">
            <div class="imgBX">
                <img src="<?= ROOT ?>/assets/images/home/i7.jpg" alt="">
            </div>
            <div class="Content">
                <h2>ALADIN SAHA PUDUMA PAHANA</h2>
                <p>Category:Tragedy</p>
                <p>Set in the fictional Arabian city of Agrabah, the story follows the familiar tale of a poor young man who is granted three wishes by a genie in a lamp, which he uses to woo a princess and to thwart the sultan's evil Grand Vizier.</p>
                <a href="#">READ MORE</a>
            </div>
        </div> -->

        <!-- <div class="card">
            <div class="imgBX">
                <img src="<?= ROOT ?>/assets/images/article.png" alt="">
            </div>
            <div class="Content">
                <h2>MANAME</h2>
                <p>Category:Tragedy</p>
                <p>A drama by the celebrated dramatist,
                    Prof Ediriweera Sarachchandra, that utilises the traditions of nadagama
                    (a type of rural folk theatre in Sri Lanka). </p>
                <a href="#">READ MORE</a>
            </div>
        </div>

        <div class="card">
            <div class="imgBX">
                <img src="<?= ROOT ?>/assets/images/sinhabahu.jpeg" alt="">
            </div>
            <div class="Content">
                <h2>SINHABAHU</h2>
                <p>Category:Tragedy</p>
                <p>Set in the fictional Arabian city of Agrabah, the story follows the familiar tale of a poor young man who is granted three wishes by a genie in a lamp, which he uses to woo a princess and to thwart the sultan's evil Grand Vizier.</p>
                <a href="#">READ MORE</a>
            </div>
        </div> -->

        <!-- <div class="card">
            <div class="imgBX">
                <img src="<?= ROOT ?>/assets/images/kuweni.jpeg" alt="">
            </div>
            <div class="Content">
                <h2>KUWENI</h2>
                <p>Category:Tragedy</p>
                <p>Set in the fictional Arabian city of Agrabah, the story follows the familiar tale of a poor young man who is granted three wishes by a genie in a lamp, which he uses to woo a princess and to thwart the sultan's evil Grand Vizier.</p>
                <a href="#">READ MORE</a>
            </div>
        </div>

        <div class="card">
            <div class="imgBX">
                <img src="<?= ROOT ?>/assets/images/sokari.jpeg" alt="">
            </div>
            <div class="Content">
                <h2>SOKARI</h2>
                <p>Category:Tragedy</p>
                <p>Set in the fictional Arabian city of Agrabah, the story follows the familiar tale of a poor young man who is granted three wishes by a genie in a lamp, which he uses to woo a princess and to thwart the sultan's evil Grand Vizier.</p>
                <a href="#">READ MORE</a>
            </div>
        </div> -->

        <!-- <div class="card">
            <div class="imgBX">
                <img src="<?= ROOT ?>/assets/images/home/i5.jpeg" alt="">
            </div>
            <div class="Content">
                <h2>HITHUMATHE ADARE</h2>
                <p>Category:Tragedy</p>
                <p>Set in the fictional Arabian city of Agrabah, the story follows the familiar tale of a poor young man who is granted three wishes by a genie in a lamp, which he uses to woo a princess and to thwart the sultan's evil Grand Vizier.</p>
                <a href="#">READ MORE</a>
            </div>
        </div> -->
    </div>

</body>

</html>