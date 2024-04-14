<!DOCTYPE html>
<html lang="en">

<head>
    <title>Manager</title>
    <!-- Link Styles -->
    <!-- <link rel="stylesheet" href="<?= ROOT ?>/assets/css/style-bar.css"> -->
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/table.css">

    <!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> -->

    </head>

<body>
    <!-- Sidebar -->
    <!-- <?php //require_once 'reservaNavBar.php' ?> -->
    <!-- Navigation bar -->
    <?php if (isset($_SESSION['USER'])) {require_once 'reservaNavBarAfter.php';} else {require_once 'reservaNavBar.php';} ?>

    <!-- Scripts -->

    <!-- content  -->
    <section id="main" class="main">

        <ul class="breadcrumb">
            <!-- <li>
                <a href="#">Home</a>
            </li> -->
            <!-- <i class='bx bx-chevron-right'></i> -->
            <li>
                <a href="#" class="active">Sent Requests</a>
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



    <!-- Modal -->
    <div id="myModal" class="modal" style="display: none;">
        <div class="modal-body">
            <div class="modal-content">
                <button id="closeModalBtn">Close</button> <!-- Close button added here -->

                <h2>User Details</h2>
                <!-- <p><strong>Name:</strong> <span id="modal-name"></span></p>
                <p><strong>Date:</strong> <span id="modal-date"></span></p>
                <p><strong>Message:</strong> <span id="modal-message"></span></p> -->
                <table id="modalTable">
            </div>
        </div>
    </div>
<script>
// Get the modal
        var modal = document.getElementById("myModal");

        // Get the close button
        var closeModalBtn = document.getElementById('closeModalBtn');

        // Get the <span> element that closes the modal
        // var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the View button, open the modal
        var viewButtons = document.getElementsByClassName("view-btn");
        for (var i = 0; i < viewButtons.length; i++) {
            viewButtons[i].onclick = function() {
                modal.style.display = "block";
                // You can fetch data and populate the modal content here based on the data-id attribute of the clicked button
                console.log("hbyvuyviybi");
                var row = this.closest("tr");
                var rowData = {
                    id: row.cells[0].innerText,
                    hallno: row.cells[1].innerText,
                    name: row.cells[2].innerText,
                    date: row.cells[3].innerText,
                    startTime: row.cells[4].innerText,
                    endTime: row.cells[5].innerText,
                    hours: row.cells[6].innerText,
                    headCount: row.cells[7].innerText,
                    sounds: row.cells[8].innerText,
                    standings: row.cells[9].innerText,
                    message: row.cells[10].innerText,
                    amount: row.cells[11].innerText,
                    status: row.cells[12].innerText
                };
                populateModal(rowData);
            }
        }

        // When the user clicks on <span> (x), close the modal
        // span.onclick = function() {
        //     modal.style.display = "none";
        // }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        closeModalBtn.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        // Function to populate modal with data
        function populateModal(data) {
            var modalTable = document.getElementById("modalTable");
            modalTable.innerHTML = `
                <tr>
                    <td>ID:</td>
                    <td>${data.id}</td>
                </tr>
                <tr>
                    <td>Hall Number:</td>
                    <td>${data.hallno}</td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td>${data.name}</td>
                </tr>
                <tr>
                    <td>Date:</td>
                    <td>${data.date}</td>
                </tr>
                <tr>
                    <td>Start Time:</td>
                    <td>${data.startTime}</td>
                </tr>
                <tr>
                    <td>End Time:</td>
                    <td>${data.endTime}</td>
                </tr>
                <tr>
                    <td>Hours:</td>
                    <td>${data.hours}</td>
                </tr>
                <tr>
                    <td>Head Count:</td>
                    <td>${data.headCount}</td>
                </tr>
                <tr>
                    <td>Sounds:</td>
                    <td>${data.sounds}</td>
                </tr>
                <tr>
                    <td>Standings:</td>
                    <td>${data.standings}</td>
                </tr>
                <tr>
                    <td>Message:</td>
                    <td>${data.message}</td>
                </tr>
                <tr>
                    <td>Amount:</td>
                    <td>${data.amount}</td>
                </tr>
                <tr>
                    <td>Status:</td>
                    <td>${data.status}</td>
                </tr>

            `;
        }
    </script>


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