<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/cwDashboard.css">
    <title>content writer dashboard</title>
</head>
<?php require_once 'cwNaviBar.php' ?>
<body>
    <div class="cardBox">
        <div class=" card">
            <div>
                <div class="numbers">1,504</div>
                <div class="cardName">Daily Views</div>
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
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Maname</td>
                        <td>Tragedy</td>
                        <td>Set in the fictional Arabian city of Agrabah, ...</td>
                        <td><img src="<?=ROOT?>/assets/images/kuweni.jpeg" alt="" srcset=""></td>
                        <td>
                            <span class="action_btn">
                                <a href="#">View</a>

                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
    </div>

    
</body>
</html>