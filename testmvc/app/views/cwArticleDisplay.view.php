<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/cwArticleDisplay.css">
    <title>Display Article</title>
</head>
<?php require_once 'cwNaviBar.php' ?>
<body>
    <div class="container">
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
                                <td>' . $row->article_content . '</td>
                                <td>' . $row->image . '</td>
                                <td><a href="javascript:void(0)" class="btn" onclick="showAlert()">View</a></td>
                                <td><a href="#" class="btn-update">Update</a></td>
                                <td>
                                    <form method="POST">
                                        <input type="hidden" name="employee_id" value="' . $row->id . '">
                                        <button type="submit" name="Delete" class="btn-delete">Delete</button>
                                    </form>
                                </td>
                              </tr>';
                    }
                } else {
                    echo '<tr><td colspan="9">No data available</td></tr>';
                }
                ?>
                <!-- <tbody>
                    <tr>
                        <td>01</td>
                        <td>Maname</td>
                        <td>Tragedy</td>
                        <td>Set in the fictional Arabian city of Agrabah, ...</td>
                        <td><img src="<?=ROOT?>/assets/images/kuweni.jpeg" alt="" srcset=""></td>
                        <td>
                            <span class="action_btn">
                                <a href="#">Edit</a>
                                <a href="#" >Delete</a>

                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td>01</td>
                        <td>Maname</td>
                        <td>Tragedy</td>
                        <td>Set in the fictional Arabian city of Agrabah, ...</td>
                        <td><img src="<?=ROOT?>/assets/images/kuweni.jpeg" alt="" srcset=""></td>
                        <td>
                            <span class="action_btn">
                                <a href="#">Edit</a>
                                <a href="#" >Delete</a>

                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td>01</td>
                        <td>Maname</td>
                        <td>Tragedy</td>
                        <td>Set in the fictional Arabian city of Agrabah, ...</td>
                        <td><img src="<?=ROOT?>/assets/images/kuweni.jpeg" alt="" srcset=""></td>
                        <td>
                            <span class="action_btn">
                                <a href="#">Edit</a>
                                <a href="#" >Delete</a>

                            </span>
                        </td>
                    </tr>
                </tbody> -->
            </table>
        </div>
        
        
    </div>
    
</body>
</html>