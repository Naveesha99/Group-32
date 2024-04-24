<div class="movie-list-wrapper1">
    <h1 class="movie-list-title1">NOW SHOWING</h1>
    <?php for ($i = 1; $i <= 7; $i++) { ?>
        <div class="dateshowing" id="date<?= $i ?>" style="<?= $i == 1 ? '' : 'display: none;' ?>">
            <h3><?= ${'nextDate'.$i} ?></h3>
            <?php
            foreach ($data2 as $ondate) {
                if ($ondate->date == ${'nextDate'.$i}) {
                    $time_from_db = $ondate->time;
                    $time_formatted = date("h:i A", strtotime($time_from_db));
                    ?>
                    <p><?= $ondate->title ?> - <?= $time_formatted ?></p>
            <?php }
            } ?>
        </div>
    <?php } ?>
</div>