<!DOCTYPE html>
<html lang="en">

<head>
    <title>Manager</title>
    <!-- Link Styles -->
    <!-- <link rel="stylesheet" href="<?= ROOT ?>/assets/css/style-bar.css"> -->
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/table_copy.css">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/reservaRating.css">
    <script src="<?= ROOT ?>/assets/js/reservaRating.js" defer></script>

    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- <link href="<?= ROOT ?>/assets/css/reservaPayment.css" rel="stylesheet"> -->

    <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
    

    <!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> -->

</head>

<style>
    .button a[disabled]{
        background-color: #ccc;
        color: #666;
        cursor: not-allowed;
    
    }

    .button a[disabled]{
        background-color: light-dark(rgba(239, 239, 239, 0.3), rgba(19, 1, 1, 0.3));
    color: light-dark(rgba(16, 16, 16, 0.3), rgba(255, 255, 255, 0.3));
    border-color: light-dark(rgba(118, 118, 118, 0.3), rgba(195, 195, 195, 0.3));
    
    }

    button:disabled {
    background-color: light-dark(rgba(239, 239, 239, 0.3), rgba(19, 1, 1, 0.3));
    color: light-dark(rgba(16, 16, 16, 0.3), rgba(255, 255, 255, 0.3));
    border-color: light-dark(rgba(118, 118, 118, 0.3), rgba(195, 195, 195, 0.3));
}
</style>


<body>
    <!-- Sidebar -->
    <!-- <?php //require_once 'reservaNavBar.php' 
            ?> -->
    <!-- Navigation bar -->
    <?php if (isset($_SESSION['USER'])) {
        require_once 'reservaNavBarAfter.php';
    } else {
        require_once 'reservaNavBar.php';
    } ?>

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
                <!-- <input class="new-btn" type="button" onclick="openNew()" 
value="+New Order"> -->
            </div>

        </form>

        <div class="table">
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
                            <!-- <th class="pr">pay and review</th> -->

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                    <tbody>

<?php
if ($data['reservationRequests'] && (is_array($data['reservationRequests']) || is_object($data['reservationRequests']))) : ?>
    <?php foreach ($data['reservationRequests'] as $row) : ?>
        <tr>
            <td class="tbl-id"> <?php echo $row->id ?> </td>
            <td><?php echo $row->hallno ?></td>
            <td class="hidden-cell"><?php echo $row->name ?></td> <!-- Hidden cell -->
            <td><?php echo $row->date ?></td>
            <td><?php echo $row->startTime ?></td>
            <td><?php echo $row->endTime ?></td>
            <td><?php echo $row->hours ?></td> <!-- Hidden cell -->
            <td class="hidden-cell"><?php echo $row->headCount ?></td> <!-- Hidden cell -->
            <td class="hidden-cell"><?php echo $row->sounds ?></td> <!-- Hidden cell -->
            <td class="hidden-cell"><?php echo $row->standings ?></td> <!-- Hidden cell -->
            <td class="hidden-cell"><?php echo $row->message ?></td> <!-- Hidden cell -->
            <td><?php echo $row->amount ?></td>
            <td class="text-status <?php echo $row->status ?>"><?php echo $row->status ?></td>
            <td class="hidden-cell"><?php echo $row->rating ?></td> <!-- Hidden cell -->
            <td class="hidden-cell"><?php echo $row->review ?></td> <!-- Hidden cell -->
            <td class><?php echo $row->acceptedTime ?></td> <!-- Hidden cell -->

            <td class="b1">
                <span class="button">
                <a href="#" class="view-btn">view</a>

                <?php if ($row->status == "pending") : ?>
                        <a class="edit" href="ReservaHall1Edit?id=<?php echo $row->id ?>">Edit</a>
                        <a href="#">Delete</a>
                    <?php else : ?>
                        <a class="edit" href="#" disabled>Edit</a>
                        <a href="#" disabled>Delete</a>
                    <?php endif; ?>

<!-- 
                    <?php if ($row->status != "accepted" && $row->status != "rejected") : ?>
                        <a class="edit" href="ReservaHall1Edit?id=<?php echo $row->id ?>">Edit</a>
                        <a href="#">Delete</a>
                    <?php else : ?>
                        <a class="edit" href="#" disabled>Edit</a>
                        <a href="#" disabled>Delete</a>
                    <?php endif; ?>
 -->

    <!--                 <?//php foreach($data['from'])?>


                     <?php if ($row->status == "accepted") : ?>
                        <?php $paymentFound = false; ?>
                        <?php foreach($data['fromPymentTable'] as $row2): ?>
                            <?php if(($row2->reqid==$row->id) && ($row2->ispaid == 1)) : ?>
                                <?php $paymentFound = true; ?>
                                <button type="button" class="payNow" disabled style="background-color: #6263a7; color: white; cursor:not-allowed;">&nbsp;&nbsp;&nbsp;Paid&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <?php if (!$paymentFound) : ?>

                                <form action="ReservaPayment" method="get" style="display:inline;">
                                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($row->id) ?>">
                                    <input type="hidden" name="hall" value="<?php echo htmlspecialchars($row->hallno) ?>">
                                    <input type="hidden" name="hours" value="<?php echo htmlspecialchars($row->hours) ?>">
                                    <input type="hidden" name="amount" value="<?php echo htmlspecialchars($row->amount) ?>">
                                    <input type="hidden" name="hcount" value="<?php echo htmlspecialchars($row->headCount) ?>">
                                    <input type="hidden" name="date" value="<?php echo htmlspecialchars($row->date) ?>">
                                    <input type="hidden" name="startTime" value="<?php echo htmlspecialchars($row->startTime) ?>">
                                    <input type="hidden" name="endTime" value="<?php echo htmlspecialchars($row->endTime) ?>">
                                    <input type="hidden" name="sounds" value="<?php echo htmlspecialchars($row->sounds) ?>">
                                    <input type="hidden" name="standings" value="<?php echo htmlspecialchars($row->standings) ?>">
                                    <button type="submit" class="payNow">PayNow</button>
                                </form>
                                <button type="submit" class="payNow" onclick="pay2(<?php echo $row->id; ?>)" value="PayNow">PayNow</button>

                                
                        <?php endif; ?>
                    <?php else : ?>
                        <button type="button" class="payNow" disabled>PayNow</button>
                    <?php endif; ?> -->



<?php if ($row->status == "accepted") :?>
    <?php if($row->ispaid == 1) : ?>
        <button type="button" class="payNow" disabled style="background-color: #6263a7; color: white; cursor:not-allowed;">&nbsp;&nbsp;&nbsp;Paid&nbsp;&nbsp;&nbsp;&nbsp;</button>

    <?php else : ?>
        <button type="button" class="payNow" onclick="pay2(<?php echo $row->id; ?>)" value="PayNow">PayNow</button>
    <?php endif; ?>

<?php else: ?>
    <button type="button" class="payNow" disabled>PayNow</button>

<?php endif;?>






                    <?php
                    if (($row->status == "accepted") && ($row->date < date("Y-m-d")) || (($row->status == "accepted") && ($row->date == date("Y-m-d")) && ($row->startTime < date("H:i:s")))) : ?>


                    <?php endif; ?>
                    <?php if (($row->status == "accepted") && ($row->date < date("Y-m-d")) || (($row->status == "accepted") && ($row->date == date("Y-m-d")) && ($row->startTime < date("H:i:s")))) : ?> 
                        <form action="ReservaSentReq" method="post" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($row->id) ?>">
                        <input type="hidden" name="hall" value="<?php echo htmlspecialchars($row->hallno) ?>">
                        <button type="submit" class="Review">Reviews</button>
                        </form>


                    <?php else : ?>
                        <button type="button" class="Review" disabled>Review</button>
                    <?php endif; ?>

                </span>
            </td>
        </tr>
    <?php endforeach; ?>

<?php else : ?>
    <tr> <td colspan="9">No data available</td></tr>
<?php endif; ?>
</tbody>
                </table>
            </div>
            <div id="myModal1" class="modal1" style="display: none;">
                <div class="cont">
                    <div class="containerM">
                        <button id="closeModalBtn">Close</button>
                        <h1>Your Review</h1>
                        <div class="rating">
                            <span id="rating">0</span>/5
                        </div>
                        <div class="stars" id="stars">
                            <span class="star" data-value="1">★</span>
                            <span class="star" data-value="2">★</span>
                            <span class="star" data-value="3">★</span>
                            <span class="star" data-value="4">★</span>
                            <span class="star" data-value="5">★</span>
                        </div>
                        <script>
                        // console.log(document.getElementById('rating').innerHTML);
                        </script>
                        <form action="ReservaSentReq" method="post" id="reviewForm">
                        <!-- echo '<form action="ReservaPayment"  style="display:inline;"> -->
                        <input type="hidden" name="request_id" id="request_id">
                        <input type="text" name="rating" id="ratingValue">
                        <script>
                            console.log("Inside script");
                            console.log(document.getElementById('ratingValue').innerHTML);
                        </script>
                            <p>Share your review:</p>
                            <textarea id="review" name="review" placeholder="Write your review here">
                            </textarea>
                            <button type="submit" name="submitReview" id="submitReview">Submit</button>
                        </form>
                        <div class="reviews" id="reviews">
                        </div>
                    </div>
                </div>
            </div>
<?php 

// Assuming you have a controller named "YourController" and a method named "yourMethod"
// You can pass the $_POST array to the controller method like this:

if(isset($_POST['submitReview'])){
    $rating= $_POST['rating'];
    $review = $_POST['review'];
    $id = $_POST['request_id']; // Retrieve the request ID from the form
    show($rating);
    show($review);
    show($id);

    // Instantiate the controller
    $controller = new ReservaSentReq();
    // $reservationrequests= new Reservationrequests;
    // $reservationrequests->update($id, ['review' => $review] , 'id'); // Corrected

    // Call the controller method and pass the $_POST array
    $controller->review($_POST);
}

$encoded_dataForReview=json_encode($_POST);
file_put_contents('dataForReview.json', $encoded_dataForReview);
$json_dataForReview1 = file_get_contents('dataForReview.json');
$_POST['json_dataForReview1'] = $json_dataForReview1;

?>

            <!-- Modal -->
            <div id="myModal" class="modal" style="display: none;">
                <div class="modal-body">
                    <div class="modal-content">
                        <button id="closeModalBtnMyModal">Close</button> <!-- Close button added here -->
                        <h2>User Details</h2>
                        <table id="modalTable">
                        <!-- <form method="post" id="ReservaCancel" action="ReservaCancel">
                            <input type="text" name="formid" id="formid" value="" />
                            <input type="text" name="formacceptedtime" id="formacceptedtime" value="">
                            <button type="submit" class="cancellation" name="cancellation">Cancel Your Booking</button>
                        </form> -->
                        </table>

<form action="ReservaCancel" method="post">
    <input type="hidden" name="formid" id="formid" value="" />
    <input type="hidden" name="formacceptedtime" id="formacceptedtime" value="">
    <button type="submit" class="cancellation" name="cancellation" id="cancelButton">Cancel Your Booking</button>

</form>


                    </div>
                </div>
            </div>


            <script>
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the close button
                var closeModalBtnMyModal = document.getElementById('closeModalBtnMyModal');

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
                            status: row.cells[12].innerText,
                            acceptedTime: row.cells[15].innerText
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

                closeModalBtnMyModal.onclick = function() {
                    console.log("close button clicked for mymodal");
                    // modal.style.display = "none";
                    window.location.href = "ReservaSentReq";
                }

                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }

                // Function to populate modal with data
                function populateModal(data) {
                    // console.log(data);
                    document.getElementById('formacceptedtime').value = data.acceptedTime;
                    document.getElementById('formid').value = data.id;
                    var status = data.status;

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


            
    // Get the accepted time string from the hidden input field
    var acceptedTimeString = document.getElementById("formacceptedtime").value;
    console.log("Status for req",status);

    // Convert the accepted time string to a JavaScript Date object
    var acceptedTimeDate = new Date(acceptedTimeString);
    console.log("Convert the accepted time string to a JavaScript Date object",acceptedTimeDate);

    // Calculate the time difference in hours
    var timeDifferenceHours = calculateTimeDifference(acceptedTimeDate);

    // If time difference is less than 25 hours, hide the cancel button
    // if ((timeDifferenceHours > 24) && (status == "accepted") ){
    //     document.getElementById("cancelButton").style.display = "none";
    // }

if((status == "accepted") && (timeDifferenceHours <= 24)){
            document.getElementById("cancelButton").style.display = "block";

}
else{
            document.getElementById("cancelButton").style.display = "none";

}

    function calculateTimeDifference(acceptedTime) {
        var currentTime = new Date();
        console.log("Current Time",currentTime);

        // Calculate the time difference in milliseconds
        var timeDifferenceMillis = currentTime - acceptedTime;
        console.log("Time Difference in Milliseconds",timeDifferenceMillis);

        // Convert milliseconds to hours
        var timeDifferenceHours = timeDifferenceMillis / (1000 * 60 * 60);
        console.log("Time Difference in Hours",timeDifferenceHours);

        return timeDifferenceHours;
    }
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





    var closeModalBtn = document.getElementById('closeModalBtn');
    var modal1 = document.getElementById("myModal1");
    // Get the close button
    var review = document.getElementsByClassName("Review");
    for (var i = 0; i < review.length; i++) {
        review[i].onclick = function() {
            
            event.preventDefault();
            modal1.style.display = "block";
            // You can fetch data and populate the modal content here based on the data-id attribute of the clicked button
            console.log("review button clicked");
            var row = this.closest("tr");
            var rowData = {
                id: row.cells[0].innerText,
                rating: row.cells[13].innerText,
                review: row.cells[14].innerText
            };
            console.log(rowData);
            console.log(rowData.rating);
            populateModal1(rowData);
        }
    }

    function populateModal1(data) {
        console.log("data.rating = " ,data.rating);
        console.log(document.getElementById('rating').innerHTML);
        document.getElementById('rating').innerHTML = data.rating;
        document.getElementById('ratingValue').value = data.rating;
        var modalTable = document.getElementById("review");
        var requestIdInput = document.getElementById("request_id");
        modalTable.innerHTML = `${data.review}`;
        requestIdInput.value = data.id; // Populate the hidden input field with the request ID
        setRatingStars(data.rating); // Call the setRatingStars function with the fetched rating value
    }

    function setRatingStars(rating) {
        rating=parseInt(rating)
        console.log(typeof(rating));
    // Get all the star elements
    const stars = document.querySelectorAll(".star");

    // Reset all stars
    stars.forEach((s) => s.classList.remove("one", 
                                            "two", 
                                            "three", 
                                            "four", 
                                            "five"));

        // Add the appropriate class to 
        // each star based on the selected star's value
        stars.forEach((s, index) => {
            console.log("index and rating",index,rating)
            if (index < rating) {
                s.classList.add(getStarColorClass(rating));
            }
        });
}


    window.onclick = function(event) {
        if (event.target == modal) {
            console.log("outside clicked");
            modal1.style.display = "none";
        }
    }

    closeModalBtn.onclick = function() {
        console.log("close button clicked for moadal1");
        modal1.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal1.style.display = "none";
        }
    }




    function pay2(id)
{
  // console.log("pay2");
  // console.log(id);
  let id1=id;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = ()=>{
      if(xhttp.readyState == 4 && xhttp.status == 200)
      {
          // alert(xhttp.responseText);
          var obj = JSON.parse(xhttp.responseText);
          // Payment completed. It can be a successful failure.
          payhere.onCompleted = function onCompleted(orderId) 
          {
            // console.log("Payment completed. OrderID:" + obj["order_id"] +""+ orderId);
            paymentSuccess(orderId);
         // Note: validate the payment and show success or failure page to the customer
          };

            // Payment window closed
            payhere.onDismissed = function onDismissed() 
            {
                // Note: Prompt user to pay again or show an error page
                console.log("Payment dismissed");
            };

            // Error occurred
            payhere.onError = function onError(error) 
            {
                // Note: show an error page
                console.log("Error:"  + error);
            };

            // Put the payment variables here
  var payment = {
      "sandbox": true,
      "merchant_id": "1225768",    // Replace your Merchant ID
      "return_url": "http://localhost/Group-32/testmvc/public/ReservaPayment",     // Important
      "cancel_url": "http://localhost/Group-32/testmvc/public/ReservaPayment",     // Important
      "notify_url": "http://sample.com/notify",
      "order_id": obj["order_id"],
      "items": obj["item"],
      "amount": obj["amount"],
      "currency": obj["currency"],
      "hash": obj["hash"], // *Replace with generated hash retrieved from backend
      "first_name": obj["name"],
      "last_name": obj["last_name"],
      "email": obj["email"],
      "phone": obj["phone"],
      "address": "No.1, Galle Road",
      "city": "Colombo",
      "country": "Sri Lanka",
      "delivery_address": "No. 46, Galle road, Kalutara South",
      "delivery_city": "Kalutara",
      "delivery_country": "Sri Lanka",
      "custom_1": "",
      "custom_2": ""
  };
       payhere.startPayment(payment);
      }
  };
  xhttp.open("GET","pay3?id=" + id,true);
  xhttp.send();
  //END paymentgatway
}
// _________________________________________________________________



function paymentSuccess(orderId){

console.log("Payment completed. OrderID:" + orderId);

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = ()=>{
    if(xhttp.readyState == 4 && xhttp.status == 200)
    {
        alert(xhttp.responseText);
        var obj = JSON.parse(xhttp.responseText);
        console.log("sdfsdfsdf"+obj);

        sessionStorage.setItem('order_id', orderId);
        // window.location.href = "<?php echo ROOT ?>/reservaQR?pay_id=" + orderId;
        window.location.href = "<?php echo ROOT ?>/reservaQR1";
    }
};
xhttp.open("GET","pay3?pay_id=" + orderId,true);
xhttp.send();
}

</script>

</html>