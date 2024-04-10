<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task view</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/empTaskView.css">
</head>

<body>
    <div class="container">
        <?php if ($data !== null) :
            // show($data)
        ?>
            <div class="card">
                <div class="box">
                    <div class="content">
                        <h3>Task</h3>
                        <div class="paragraph">
                            <p>Task : <?= $data['emp_task'][0]->task ?></p>
                            <p>Place : <?= $data['emp_task'][0]->place ?></p>
                            <p>Date : <?= $data['emp_task'][0]->relavant_date ?></p>
                            <p>Time : <?= $data['emp_task'][0]->relavant_time ?></p>
                            <p>Status : <?= $data['emp_task'][0]->status ?></p>

                        </div>

                    </div>
                </div>
            </div>
        <?php else : ?>
            <p>Article not found!</p>
        <?php endif; ?>
    </div>


</body>

</html>