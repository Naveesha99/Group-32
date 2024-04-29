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
    <div id="overlay"></div>
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
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Status</th>
                                <th>Option</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            if ($historyTasks) {
                                foreach ($historyTasks as $row) {
                            ?>
                                    <tr>
                                        <td><?= $row->taskType ?> </td>
                                        <td><?= $row->location ?> </td>
                                        <td><?= $row->date ?> </td>
                                        <td><?= $row->startTime ?> </td>
                                        <td><?= $row->endTime ?> </td>
                                        <td><?= $row->status ?></td>
                                        <td>
                                            <span class="action_btn">
                                                <form method="POST">
                                                    <input type="hidden" name="task_id" value="' . $row->id . '">
                                                    <button type="button" data-order='<?= json_encode($row) ?>' class="btn" onClick="openPopup(this)">View</button>
                                                </form>
                                            </span>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo '<tr><td colspan="6">No data available</td></tr>';
                            }
                            ?>

                            <div class="card1" id="card1">
                                <div class="box">
                                    <div class="content">

                                        <div class="paragraph">
                                            <label for="taskType">Task:</label>
                                            <input type="text" id="taskType" name="taskType" readonly>

                                            <label for="location">Place:</label>
                                            <input type="text" id="location" name="location" readonly>

                                            <label for="date">Date:</label>
                                            <input type="text" id="date" name="date" readonly>

                                            <label for="startTime">Start Time:</label>
                                            <input type="text" id="startTime" name="startTime" readonly>

                                            <label for="endTime">End Time:</label>
                                            <input type="text" id="endTime" name="endTime" readonly>

                                            <label for="status">Status:</label>
                                            <input type="text" id="status" name="status" readonly>
                                            <button onclick="closePopup()">Close</button>
                                        </div>

                                    </div>
                                </div>
                            </div>

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

        function openPopup(button) {
            var order = JSON.parse(button.getAttribute("data-order"));
            document.getElementById('taskType').value = order.taskType;
            document.getElementById('location').value = order.location;
            document.getElementById('date').value = order.date;
            document.getElementById('startTime').value = order.startTime;
            document.getElementById('endTime').value = order.endTime;
            document.getElementById('status').value = order.status;
            document.getElementById('card1').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
            
        };

        function closePopup() {
            document.getElementById('card1').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
            window.location.href = "EmpHistory";

        };
    </script>


</body>

</html>