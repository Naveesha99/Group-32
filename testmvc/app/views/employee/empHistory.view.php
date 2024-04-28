<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task history</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/empHistory.css">
</head>

<?php require_once 'employeeSideBar.php' ?>
<?php include 'navBar.php' ?>

<body>
    <div class="container">
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
        <!-- <div class="cardBox">
            <div class="card">
                <div>
                    <div class="numbers">Total Tasks</div>
                    <div class="cardName"><?= $data['total'] ?></div>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">Completed</div>
                    <div class="cardName"><?= $data['completed'] ?></div>
                </div>
            </div>
        </div> -->

        <div class="content-2">



            <div class="history">
                <div class="title">
                    <h2>History</h2>
                </div>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Task</th>
                                <th>Place</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Status</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php
                            if ($historyTasks) {
                                foreach ($historyTasks as $row) {
                                    echo '<tr>
                            <td>' . $row->task . ' </td>
                            <td>' . $row->place . ' </td>
                            <td>' . $row->relavant_date . ' </td>
                            <td>' . $row->relavant_time . ' </td>
                            <td>' . $row->status . '</td>
                            <td> 
                            <span class="action_btn">
                                    <a href = "empTaskView?id=' . $row->id . '" class = "btn">View</a>
                                </span>
                                </td>
                            </tr>';
                                }
                            } else {
                                echo '<tr><td colspan="6">No data available</td></tr>';
                            }
                            ?>

                        </tbody>



                    </table>

                </div>

            </div>
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

</html>