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
                                <th>ID</th>
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
                                <th>Options</th>                                <!-- <th>View</th> -->
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
                                <td>' . $row->id . '</td>
                                <td>' . $row->hallno . '</td>
                                <td>' . $row->date . '</td>
                                <td>' . $row->startTime . '</td>
                                <td>' . $row->endTime . '</td>
                                <td>' . $row->amount . '</td>
                                <td>' . $row->status . '</td>
                                <td>
                                    <span class="action_btn">
                                        <a href="<?=ROOT?>/cwArticleDisplay">Edit</a>
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


                        <!--    <tr>
                                <td>R1703141338522</td>
                                <td>2021/02/23 </td>
                                <td>Rs.12000</td>
                                <td>7d</td>
                                <td>Rs.24000</td>
                                <td>124m</td>
                                <td>Pending</td>
                                <td><button type="button" onclick="window.location.href='reservaViewReq.html'">View</button></td>
                                <td> <button class="Notallowed" type="button" onclick="window.location.href='reservaViewReq.html'">Edit</button></td>
                                <td> <button class="allowed" type="button" onclick="window.location.href='pymnt.html'">PayNow</button>
                                </td>
                            </tr>-->

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
    <h2>User Details</h2>
    <p><strong>Name:</strong> <span id="modal-name"></span></p>
    <p><strong>Date:</strong> <span id="modal-date"></span></p>
    <p><strong>Starting Time:</strong> <span id="modal-start-time"></span></p>
    <p><strong>End Time:</strong> <span id="modal-end-time"></span></p>
    <p><strong>Hours:</strong> <span id="modal-hours"></span></p>
    <p><strong>Head Count:</strong> <span id="modal-head-count"></span></p>
    <p><strong>Sounds:</strong> <span id="modal-sounds"></span></p>
    <p><strong>Standings:</strong> <span id="modal-standings"></span></p>
    <p><strong>Message:</strong> <span id="modal-message"></span></p>
</div>
</div>
</div>

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the View button, open the modal
    var viewButtons = document.getElementsByClassName("view-btn");
    for (var i = 0; i < viewButtons.length; i++) {
        viewButtons[i].onclick = function() {
            modal.style.display = "block";
            console.log("hbyvuyviybi");
            // You can fetch data and populate the modal content here based on the data-id attribute of the clicked button
        }
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>





</body>

<script>
    window.onload = function () {
        const urlSearchParams = new URLSearchParams(window.location.search);
        var session=urlSearchParams.get('loggedin');
        document.getElementById('img-profile').style.display = 'none';
        if(session == 'false'){
            document.getElementById('img-profile').style.display = 'none';
            // document.getElementById('login-btn').style.display='none';
        }
        if(session == 'true'){
            // document.getElementById('img-profile').style.display = 'none';
            document.getElementById('img-profile').style.display = 'block';
            document.getElementById('login-btn').style.display='none';
        }
        
        }
</script>

</html>