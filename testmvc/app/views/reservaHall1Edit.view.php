<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= ROOT ?>/assets/css/reservaHall1.css" rel="stylesheet">
    <!-- <script src="<?= ROOT ?>/assets/js/cl.js" defer></script> -->
    <!-- <script src="/js/ReservaHall1.js"></script> -->
    <!-- <link rel="stylesheet" href="<?= ROOT ?>/assets/css/cl.css"> -->
    <!-- <script src="<?= ROOT ?>/assets/js/reservaReqModal.js" defer></script> -->

    <title>Admin Panel</title>

    <style>
        .tile {
            position: relative;
        }
    </style>

</head>
<?php require_once 'reservaNavBar.php' ?>



<body class="dashboard">
    <div class="container">

        <div class="content">

   
            <form  method="POST" class="form" id="Form" onsubmit="return validateForm()">

                <h2> <span class="hallNo" id="hallNo">Hall No</span> <BR> BOOKING REQUEST  <br>
                <span class="spn1">ID: <label class="spn2" id="requestId" name="requestId"> </label></span></h2>
                <!-- <div class="form_f">
                    <label for="requestId">Request ID:</label>
                    <input type="text" id="requestId" name="requestId" readonly required>
                </div>  -->

                <input type="hidden" id="hallnumber" name="hallno" >
                <input type="hidden" id="reservationId" name="id" >

                <input type="hidden" id="status" name="status" value="pending" >
                <!-- <script>
                    var hallnoText = document.getElementById('hallno').textContent;
                    console.log(hallnoText);
                    document.getElementById('hallId').value = hallnoText;
                    console.log("hall No function");
                    console.log(hallnoText);
                </script> -->

                <div class="form_f">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Write your name here.." >
                </div>
                <div class="form_f">

                    <label for="date">Date:</label>
                    <input type="text" id="date" name="date" placeholder="Select the date from the calendar" readonly required>
                </div>

                <div class="form-inside">
                    <div class="form_f">

                        <label for="startTime">Starting Time:</label>
                        <input type="text" id="startTime" name="startTime" placeholder="Select a starting time slot from the available time slots" readonly required>
                    </div>

                    <datalist id="endSlots">
                        <option value="09:00:00">
                        <option value="10:00:00">
                        <option value="11:00:00">
                        <option value="12:00:00">
                        <option value="13:00:00">
                        <option value="14:00:00">
                        <option value="15:00:00">
                        <option value="16:00:00">
                        <option value="17:00:00">
                        <option value="18:00:00">
                        <option value="19:00:00">
                        <option value="20:00:00">

                    </datalist>
                    <div class="form_f">

                        <label for="endTime">END TIME:</label>
                        <input type="text" id="endTime" name="endTime" list="endSlots" placeholder="endTime" onblur="validateListInput(this, 'endSlots')" readonly required>
                    </div>
                    <script>
                        function validateHours(input) {
                            // Get the entered value
                            let enteredValue = input.value;

                            // Check if the entered value is negative
                            if (enteredValue < 0) {
                                // If negative, set the value to 0
                                input.value = 0;
                            }
                        }
                    </script>
                </div>
                <div class="form_f">
                    <label for="hours">HOURS:</label>
                    <input type="text" id="hours" name="hours" placeholder="hours.." readonly required>
                </div>
                <div class="form_f">

                    <label for="headCount">Head Count:</label>
                    <input type="number" id="headCount" name="headCount" placeholder="Head Count" required>
                </div>
                <script>
                    function validateHCount(input) {
                        // Get the entered value
                        let enteredValue = input.value;

                        // Check if the entered value is negative
                        if (enteredValue < 0) {
                            // If negative, set the value to 0
                            input.value = 0;
                        }
                    }
                </script>

                <datalist id="yesOrNo">
                    <option value="YES">
                    <option value="NO">
                </datalist>
                <div class="form-inside">
                    <div class="form_f">

                        <label for="sounds">Sounds:</label>
                        <!-- <input type="text" id="sounds" name="sounds" list="yesOrNo" onblur="validateListInput(this, 'yesOrNo')" required> -->
                        <select id="sounds1" name="sounds1" onblur="validateListInput(this, 'yesOrNo')" required>
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                        </select>
                        <input type="text" id="sounds" name="sounds" required>
                        <script>

                            document.getElementById('sounds1').addEventListener('change', function(){

                                document.getElementById('sounds').value=document.getElementById('sounds1').value;
                            });
                        </script>
                    </div>


                    <div class="form_f">
                        <label for="standings">Standings:</label>
                        <!-- <input type="text" id="standings" name="standings" list="yesOrNo" onblur="validateListInput(this, 'yesOrNo')" required> -->
                        <select id="standings1" name="standings1" onblur="validateListInput(this, 'yesOrNo')" required>
                        <option value="YES">YES</option>
                            <option value="NO">NO</option>
                        </select>
                        <input type="text" id="standings" name="standings" required>
                        <script>

                            document.getElementById('standings1').addEventListener('change', function(){

                                document.getElementById('standings').value=document.getElementById('standings1').value;
                            });
                        </script>
                    </div>
                </div>

                <script>
                    function validateListInput(inputField, listId) {
                        var enteredValue = inputField.value.trim().toLowerCase();
                        var dataList = document.getElementById(listId);
                        var options = Array.from(dataList.options).map(option => option.value.toLowerCase());

                        if (!options.includes(enteredValue)) {
                            // alert("Invalid input. Please select a value from the list.");
                            inputField.value = ""; // Clear the input field

                            return false;
                        }

        return true;
    }
                </script>


                <div class="form_f">

                    <label for="message">Message:</label>
                    <input type="text" id="message" name="message" placeholder="What would you like to tell us.." required>
                </div>
                <div class="form-inside2">
                <div class="form_f1">
                        <label for="Amount to be paid ">Amount to be paid:</label>
                        <input type="text" placeholder="A payment" id="amount" name="amount" readonly>
                    </div>
                    
                </div>
                <div class="btns">
                    <!-- <button type="button" onclick="popup(this)">Send Request</button> -->
                    <button type="submit" onclick="popup(this)">Send Request</button>
                    <!-- <button type="submit">Send Request</button> -->

                    <!-- <button type="button" onclick="window.location.href=`reservaHall1`">Cancel</button> -->

                </div>

            </form>

        </div>

    </div>





    <!-- New popup container for confirmation message -->
    <div class="modal" id="modal">
        <div class="modal-body">
            <div class="modal-content">
                <h2>Your Request Has Been Successfully Edited & Submitted!</h2>
                <p>A confirmation email will be dispatched to you within 24 hours.</p>
                <p>You have 12 hours to make any necessary adjustments to your request.</p>
                <p>If you have inquiries, please contact us at <span class="contact-number">0111111111</span>.</p>


                <div class="button-container">
                    <button onclick="viewRequest()">View Request</button>
                    <button onclick="closeConfirmation()">OK</button>
                </div>
            </div>
        </div>
    </div>






    <script>

        

        // function updateSelectedDate() {
        //     var today = new Date();
        //     var formattedDate = date.getFullYear() + '-' + String(date.getMonth()).padStart(2, '0') + '-' + String(date.getDate()).padStart(2, '0');

        //     // const formattedDate = formatDate(today);
        //     console.log("formatted date  -  ");
        //     console.log(formattedDate);
        //     document.getElementById('selectedDate').textContent = formattedDate;
        //     console.log(formattedDate);

        //     var el = document.getElementsByClassName('time-slot available');
        //     for (var i = 0; i < el.length; i++) {
        //         el[i].style.display = 'none';
        //     }
        //     var ele = document.getElementsByClassName('time-slot unavailable');
        //     for (var i = 0; i < ele.length; i++) {
        //         ele[i].style.display = 'none';
        //     }

        //     var elem = document.getElementsByClassName('notice');
        //     for (var i = 0; i < elem.length; i++) {
        //         elem[i].innerHTML = 'Please select a date from tomorrow onwards.';
        //     }
        // }

        // window.onload = updateSelectedDate;

        window.onload = function() {
            // updateSelectedDate();

            const reqId= getQueryParam('id');
            console.log(reqId);
            document.getElementById('requestId').innerHTML=reqId;

            const reservaReqs = <?php echo json_encode($data);?>;
            console.log(reservaReqs);

            for (var i = 0; i < reservaReqs.length; i++) {

            var reservationId = reservaReqs[i];
            // console.log(reservationId.id);
            // console.log(reqId);
            if (reservationId.id == reqId) {
                document.getElementById('hallNo').innerHTML=reservationId.hallno;
                document.getElementById('hallnumber').value=reservationId.hallno;
                document.getElementById('reservationId').value = reservationId.id; 

                document.querySelector('.form_f input[name="name"]').value = reservationId.name; 
                document.querySelector('.form_f input[name="date"]').value = reservationId.date; 
                document.querySelector('.form_f input[name="startTime"]').value = reservationId.startTime; 
                document.querySelector('.form_f input[name="endTime"]').value = reservationId.endTime; 
                document.querySelector('.form_f input[name="hours"]').value = reservationId.hours; 
                document.querySelector('.form_f input[name="headCount"]').value = reservationId.headCount; 
                document.querySelector('.form_f input[name="sounds"]').value = reservationId.sounds; 
                document.getElementById('sounds1').value = reservationId.sounds;
                document.querySelector('.form_f input[name="standings"]').value = reservationId.standings;
                document.getElementById('standings1').value = reservationId.standings; 
                document.querySelector('.form_f input[name="message"]').value = reservationId.message; 
                document.querySelector('.form_f1 input[name="amount"]').value = reservationId.amount;

            }
        }


            // document.getElementById('hallno').value = hallnumber;
            // hallnuberforinputfield=document.getElementById('hallno')
            // console.log(hallnuberforinputfield );
            



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

        function getQueryParam(id) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(id);

        }

       
        



        function popup(id) {

            event.preventDefault();
            console.log("inside popup function");
            if (checkRequiredFields()) {
                document.getElementById('modal').style.display = 'block';
                // document.getElementById('Form').submit();

                // Add your code here for further actions
            } else {
                // Some required fields are not filled, display an error or take other actions
                alert("Please fill in all required fields.");
            }

        }


        function checkRequiredFields() {
            // Get all required fields
            const requiredFields = document.querySelectorAll('[required]');

            // Check if all required fields are filled
            for (const field of requiredFields) {
                if (!field.value.trim()) {
                    // Field is empty, return false
                    return false;
                }
            }

            // All required fields are filled, return true
            return true;
        }


        function closeConfirmation() {
            console.log("INSIDE CLOSE CONFIRMATION FUN")
            // Add logic to handle "OK" button click
            // For now, let's just close the confirmation popup
            document.querySelector('.modal').style.display = 'none';
            // window.location.href = 'reservaHall';
            window.location.href = `reservaHall`;
            document.getElementById('Form').submit();


        }

        function viewRequest() {
            console.log("INSIDE VIEW RE D+FUN")

            document.querySelector('.modal').style.display = 'none';
            // window.location.href = 'reservaSentReq';
            window.location.href = `reservaSentReq`;
            document.getElementById('Form').submit();


        }


    </script>

</html>