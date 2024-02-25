<!DOCTYPE html>
<html lang="en">

<head>
    <title>Manager</title>
    <!-- Link Styles -->
    <!-- <link rel="stylesheet" href="<?= ROOT ?>/assets/css/style-bar.css"> -->
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/table.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    >

    </head>

<body>
    <!-- Sidebar -->
    <?php require_once 'reservaNavBar.php' ?>
    <!-- Navigation bar -->

    <!-- Scripts -->

    <!-- content  -->
    <section id="main" class="main">

        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <i class='bx bx-chevron-right'></i>
            <li>
                <a href="#" class="active">Customer Orders</a>
            </li>

        </ul>

        <form>
            <div class="form">
                <form >
                    <div class="form-input">
                        <input type="search" placeholder="Search...">
                        <button type="submit" class="search-btn">
                            <i class='bx bx-search'></i>
                        </button>
                    </div>
                </form>
				<!-- <input class="new-btn" type="button" onclick="openNew()" value="+New Order"> -->
			</div>

        </form>

        <div class="table">
            <!-- <div class="table-header">
                <p>Order Details</p>
                <div>
                    <input placeholder="order"/>
                    <button class="add_new">+ Add New</button>
                </div>
            </div> -->
            <div class="table-section">
                <table>
                    <thead>
                        <tr>
                            <th>Request Id</th>
                            <th>Hall</th>
                            <!-- <th>Name</th> -->
                            <th>Date</th>
                            <th>STart Time</th>
                            <th>End Time</th>
                            <th>Hours</th>
                            <!-- <th>Head Count</th> -->
                            <!-- <th>Sounds</th> -->
                            <!-- <th>Standings</th> -->
                            <!-- <th>Message</th> -->
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Options</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                            if ($data && (is_array($data) || is_object($data))) {
                                foreach ($data as $row) {
                                    echo '<tr>
                                <td class="tbl-id">' . $row->id . '</td>
                                <td>' . $row->hallno . '</td>
                                <td class="hidden-cell">' . $row->name . '</td> <!-- Hidden cell -->
                                <td>' . $row->date . '</td>
                                <td>' . $row->startTime . '</td>
                                <td>' . $row->endTime . '</td>
                                <td >' . $row->hours . '</td> <!-- Hidden cell -->
                                <td class="hidden-cell">' . $row->headCount . '</td> <!-- Hidden cell -->
                                <td class="hidden-cell">' . $row->sounds . '</td> <!-- Hidden cell -->
                                <td class="hidden-cell">' . $row->standings . '</td> <!-- Hidden cell -->
                                <td class="hidden-cell">' . $row->message . '</td> <!-- Hidden cell -->
                                <td >' . $row->amount . '</td>
                                <td  class="text-status  ' . $row->status . '" >' . $row->status . '</td>
                                
                 
                          


                                <td>
                                    <span class="button">
                                        <a class="edit" href="ReservaHall1Edit?id='. $row->id . '">Edit</a>
                                        <a href="#" class="view-btn">view</a>
                                        <a href="#" >Delete</a>
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


</body>


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

</html>