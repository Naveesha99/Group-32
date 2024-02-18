<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drafts</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/cwDraft.css">
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
        <?php
        if (!empty($data['draft_articles']) && is_array($data['draft_articles'])) {
            foreach ($data['draft_articles'] as $row) {
                echo  '<div class="card">
                        <div class="imgBX">
                            <img src="' . ROOT . '/assets/images/drama_portal/' . $row->image . '" alt="image" >
                        </div>
    
                        <div class="Content">
                            <h2>' . $row->article_name . '</h2>
                            <p>Category:' . $row->category . '</p>
                            <p>' . limitWords($row->article_content, 20) . '</p>
                            <button type="submit" onclick="publish()">Publish Article</button>
    
                        </div>
                        </div>';
            }
        } else {
            echo '<p>No data available</p>';
        }
        ?>
        <!-- <div class="card">
            <div class="imgBX">
                <img src="<?= ROOT ?>/assets/images/home/i3.jpg" alt="image">
            </div>

            <div class="Content">
                <h2>EDIPAS RAJA</h2>
                <p>Category:Tragedy</p>
                <p>Oedipus Rex by Sophocles is a Greek tragedy about a man who unknowingly fulfills a prophecy by killing his father and marrying his mother. It explores themes of fate, free will, and the consequences of unchecked pride.</p>
                <button type="submit" onclick="publish()">Publish Article</button>

            </div>
        </div> -->

        <!-- <div class="card">
            <div class="imgBX">
                <img src="<?= ROOT ?>/assets/images/home/i10.jpeg" alt="">
            </div>
            <div class="Content">
                <h2>RAWANA</h2>
                <p>Category:Tragedy</p>
                <p>Lanka flourished under his rule and Ravana had proceeded on a series of campaigns conquering humans, celestials and demons. It is said that Ravana ruled Lanka for several hundred years prior to the times of Ramayana, when he was killed by prince Rama for kidnapping his wife Sita.</p>
                <button type="submit" onclick="publish()">Publish Article</button>
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
                <button type="submit" onclick="publish()">Publish Article</button>
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
                <button type="submit" onclick="publish()">Publish Article</button>
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
                <button type="submit" onclick="publish()">Publish Article</button>
            </div>
        </div> -->


    </div>

</body>

</html>