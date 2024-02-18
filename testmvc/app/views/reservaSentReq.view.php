<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= ROOT ?>/assets/css/reservaSentReq.css" rel="stylesheet">

    <title>Admin Panel</title>

</head>
<!-- <//?php require_once 'reservaSideBar.php' ?>  -->

<?php require_once 'reservaNavBar.php' ?>


<body class="dashboard">
    <div class="container">
        <!-- <div class="header">


            <//?php require_once 'navBar.php' ?>
        </div> -->



        <div class="content">
            <section>
                <!--for demo wrap-->
                <h1>Sent Request</h1>
                <div class="tbl-header">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <thead>
                            <tr>
                                <th class="tbl-id">ID</th>
                                <th>HallNo</th>
                                <th>Date</th>
                                <th>Start</th>
                                <th>End</th>
                                <!-- <th>Request Sent Date</th> -->
                                <!-- <th>Initial Payment</th> -->
                                <!-- <th>Remaining Hours for Initial Payment</th> -->
                                <!-- <th>Full Payment</th> -->
                                <!-- <th>Remaining Days for Full Payment</th> -->
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Options</th> <!-- <th>View</th> -->
                                <!-- <th>Edit</th> -->


                            </tr>
                        </thead>



                    </table>
                </div>
                <div class="tbl-content">
                    <table cellpadding="0" cellspacing="0" border="0">
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
                                <td class="hidden-cell">' . $row->hours . '</td> <!-- Hidden cell -->
                                <td class="hidden-cell">' . $row->headCount . '</td> <!-- Hidden cell -->
                                <td class="hidden-cell">' . $row->sounds . '</td> <!-- Hidden cell -->
                                <td class="hidden-cell">' . $row->standings . '</td> <!-- Hidden cell -->
                                <td class="hidden-cell">' . $row->message . '</td> <!-- Hidden cell -->
                                <td>' . $row->amount . '</td>
                                <td>' . $row->status . '</td>

                                <td>
                                    <span class="action_btn">
                                        <a href="ReservaHall1Edit?id='. $row->id . '">Edit</a>
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
            </section>

        </div>
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
    window.onload = function() {
        const urlSearchParams = new URLSearchParams(window.location.search);
        var session = urlSearchParams.get('loggedin');
        document.getElementById('img-profile').style.display = 'none';
        if (session == 'false') {
            document.getElementById('img-profile').style.display = 'none';
            // document.getElementById('login-btn').style.display='none';
        }
        if (session == 'true') {
            // document.getElementById('img-profile').style.display = 'none';
            document.getElementById('img-profile').style.display = 'block';
            document.getElementById('login-btn').style.display = 'none';
        }

    }
</script>

</html>