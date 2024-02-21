<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= ROOT ?>/assets/css/reservaHall1.css" rel="stylesheet">
    <script src="<?= ROOT ?>/assets/js/cl.js" defer></script>
    <!-- <script src="/js/ReservaHall1.js"></script> -->
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/cl.css">
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
            <div class="tile-main">
                <div class="tile">


                    <header>
                        <p class="current-date"></p>
                        <div class="icons">
                            <span id="prev" class="material-symbols-rounded">
                                <</span>
                                    <span id="next" class="material-symbols-rounded">></span>
                        </div>
                    </header>
                    <div class="calendar">
                        <ul class="weeks">
                            <li>Sun</li>
                            <li>Mon</li>
                            <li>Tue</li>
                            <li>Wed</li>
                            <li>Thu</li>
                            <li>Fri</li>
                            <li>Sat</li>
                        </ul>
                        <ul class="days"></ul>
                    </div>
                </div>

                <div class="tile2">
                    <h2 id="selectedDate"> </h2>
                    <div class="description">

                    <?php
                        // Define an array for time slots
                        $timeSlots = array(
                            "08:00:00" => "8:00AM-9:00AM",
                            "09:00:00" => "9:00AM-10:00AM",
                            "10:00:00" => "10:00AM-11:00AM",
                            "11:00:00" => "11:00AM-12:00PM",
                            "12:00:00" => "12:00PM-1:00PM",
                            "13:00:00" => "1:00PM-2:00PM",
                            "14:00:00" => "2:00PM-3:00PM",
                            "15:00:00" => "3:00PM-4:00PM",
                            "16:00:00" => "4:00PM-5:00PM",
                            "17:00:00" => "5:00PM-6:00PM",
                            "18:00:00" => "6:00PM-7:00PM",
                            "19:00:00" => "7:00PM-8:00PM"
                        );
                        ?>
                    <?php
                    // Assume you have already passed the reservation data as an array named $reservations

                    // Create an array to store reserved time slots
                    // $reservedTimeSlots = array();
                    // foreach ($acceptedReservations as $reservation) {
                    //     $startTime = $reservation->startTime;
                    //     $hours = $reservation->hours;
                    //     $endTime = date('H:i:s', strtotime("$startTime +$hours hour"));
                    //     // Store reserved time slots
                    //     $reservedTimeSlots[] = array('start' => $startTime, 'end' => $endTime);
                    // }
                    // show($reservedTimeSlots);
                    ?>

                        <div class="time-slots">
                            <div class="notice"></div>
                            <?php 
                            $counter = 8;
                            foreach ($timeSlots as $time => $slot): ?>
                                <div class="time-slot available" onclick="bookSlot('<?php echo $time; ?>')" id="<?php echo $counter; ?>"><?php echo $slot; ?></div>
                            <?php 
                            $counter++;
                            endforeach; ?>
                        </div>

                        <!-- <p>No Bookings</p> -->
                        <!-- <div class="time-slots">
                            <div class="notice"></div>
                            <div class="time-slot available" onclick="bookSlot('08:00:00')" id="1">8:00AM-9:00AM</div>
                            <div class="time-slot available" onclick="bookSlot('09:00:00')" id="1">9:00AM-10:00AM</div>
                            <div class="time-slot available" onclick="bookSlot('10:00:00')" id="1">10:00AM-11:00AM</div>
                            <div class="time-slot available" onclick="bookSlot('11:00:00')" id="1">11:00AM-12:00PM</div>
                            <div class="time-slot available" onclick="bookSlot('12:00:00')" id="1">12:00PM-1:00PM</div>
                            <div class="time-slot available" onclick="bookSlot('13:00:00')" id="1">1:00PM-2:00PM</div>
                            <div class="time-slot available" onclick="bookSlot('14:00:00')" id="1">2:00PM-3:00PM</div>
                            <div class="time-slot available" onclick="bookSlot('15:00:00')" id="1">3:00PM-4:00PM</div>
                            <div class="time-slot available" onclick="bookSlot('16:00:00')" id="1">4:00PM-5:00PM</div>
                            <div class="time-slot available" onclick="bookSlot('17:00:00')" id="1">5:00PM-6:00PM</div>
                            <div class="time-slot unavailable" onclick="bookSlot('18:00:00')" id="1">6:00PM-7:00PM</div>
                            <div class="time-slot available" onclick="bookSlot('19:00:00')" id="1">7:00PM-8:00PM</div>
                        </div> -->
                        <!-- <button class="ReqButton">Request</button> -->
                    </div>
                </div>
            </div>







   
            <form  method="POST" class="form" id="Form" onsubmit="return validateForm()">

                <h2> <span class="hallNo" id="hallNo">Hall No</span> <BR> BOOKING REQUEST  <br><span class="spn1">ID: <label class="spn2" id="requestId" name="requestId"> </label></span></h2>
                <!-- <div class="form_f">
                    <label for="requestId">Request ID:</label>
                    <input type="text" id="requestId" name="requestId" readonly required>
                </div>  -->

                <input type="hidden" id="hallno" name="hallno" >

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
                    <input type="text" id="name" name="name" placeholder="Write your name here.." required>
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
                        <input type="text" id="endTime" name="endTime" list="endSlots" placeholder="endTime" onblur="validateListInput(this, 'endSlots')" required>
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
                        <input type="text" id="sounds" name="sounds" list="yesOrNo" onblur="validateListInput(this, 'yesOrNo')" required>
                    </div>
                    <div class="form_f">

                        <label for="standings">Standings:</label>
                        <input type="text" id="standings" name="standings" list="yesOrNo" onblur="validateListInput(this, 'yesOrNo')" required>
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
                        <input type="A payment" placeholder="A payment" id="amount" name="amount" readonly>
                    </div>
                    <!-- <div class="form_f1">
                        <label for="Full Payment ">Advanced Payment:</label>
                        <input type="F payment" placeholder="F payment">
                    </div> -->
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
                <h2>Your Request Has Been Successfully Submitted!</h2>
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

const reservaReqs = <?php echo json_encode($acceptedReservations);?>;
const amount = <?php echo json_encode($hall); ?>;

function calculateAmountToBePaid(hours,standing,sound,amountPerHour,amountStandings,amountSounds){
    var amountToBePaid = 0;
    if(standing == 'yes'){
        amountToBePaid += amountStandings;
    }
    if(sound == 'yes'){
        amountToBePaid += amountSounds;
    }
    amountToBePaid += hours * amountPerHour;
    return amountToBePaid;
    
}



document.getElementById('endTime').addEventListener('input',function(){
    console.log("in end time input event listener");
    const startTime = document.getElementById('startTime').value;
    const endTime = this.value;
    const hoursDifference = calculateHoursDifference(startTime, endTime);
    const standing = document.getElementById('standings').value;
    const sound = document.getElementById('sounds').value;

    const amountPerHour = amount[0].amountOneHour;
    console.log("amount per hour");
    console.log(amountPerHour);
    const amountStandings = amount[0].amountStandings;
    const amountSounds = amount[0].amountSounds;
    const amountToBePaid = calculateAmountToBePaid(hoursDifference,standing,sound,amountPerHour,amountStandings,amountSounds);
    document.getElementById('amount').value = amountToBePaid;
});




// Function to update end time options based on the selected start time
function updateEndTimeOptions(selectedStartTime) {
    console.log("in fuction updateEndTimeOptions");

    // Get the end time datalist element
    const endTimeDatalist = document.getElementById('endSlots');
    // Remove all existing options from the datalist
    endTimeDatalist.innerHTML = '';
    // Available time slots for end time
    const availableEndTimes = [
        "09:00:00", "10:00:00", "11:00:00", "12:00:00", "13:00:00",
        "14:00:00", "15:00:00", "16:00:00", "17:00:00", "18:00:00",
        "19:00:00", "20:00:00"
    ];

    const unavailableEndTimes = [
        // Add your logic to get the unavailable slots
    ];


    // Find the index of the selected start time in the available times
    // const startIndex = availableEndTimes.indexOf(selectedStartTime);
    const startIndex = availableEndTimes.findIndex(time => time === selectedStartTime);
    console.log("startIndex");
    console.log(startIndex);

    // If a valid start time is selected, update end time options
    if (startIndex !== -1) {
        
        // Create options for end time starting from the selected start time
        for (let i = startIndex +1; i < availableEndTimes.length; i++) {
            var j=i+8;
            var element = document.getElementById(j);
            if (element.classList.contains('unavailable')) {
                // The element has the class 'yourClassName'
                break;            
            }
            // console.log(option);
            const option = document.createElement('option');
            option.value = availableEndTimes[i];
            endTimeDatalist.appendChild(option);
        }
    }

    else if(startIndex == -1) {
        // Create options for end time starting from the selected start time
        for (let i = 0; i < availableEndTimes.length; i++) {

            var j=i+8;
            var element = document.getElementById(j);
            if (element.classList.contains('unavailable')) {
                // The element has the class 'yourClassName'
                break;            
            }

            // console.log(option);
            const option = document.createElement('option');
            option.value = availableEndTimes[i];
            endTimeDatalist.appendChild(option);
        }
    }

        // for (const unavailableTime of unavailableEndTimes) {
        // const option = document.createElement('option');
        // option.style.display = 'none'; 
        // option.value = unavailableTime;
        // option.style.display = 'none'; 
        // options.disabled=true;
        // console.log("disable line runs");
        // endTimeDatalist.appendChild(option);

        // }
}





    function formatDate(date) 
    {
        console.log("in format dae func")
        // return new Date(date).toLocaleDateString(undefined, options);
        const options = {
        year: 'numeric',
        month: '2-digit',
        day: '2-digit',
        };

        // var today = new Date(); 
        var formattedDate = date.getFullYear() + '-' + String(date.getMonth()).padStart(2, '0') + '-' + String(date.getDate()).padStart(2, '0');
        return formattedDate;
    }

        function updateSelectedDate() {
            var today = new Date();
            var formattedDate = date.getFullYear() + '-' + String(date.getMonth()).padStart(2, '0') + '-' + String(date.getDate()).padStart(2, '0');

            // const formattedDate = formatDate(today);
            console.log("formatted date  -  ");
            console.log(formattedDate);
            document.getElementById('selectedDate').textContent = formattedDate;
            console.log(formattedDate);

            var el = document.getElementsByClassName('time-slot available');
            for (var i = 0; i < el.length; i++) {
                el[i].style.display = 'none';
            }
            var ele = document.getElementsByClassName('time-slot unavailable');
            for (var i = 0; i < ele.length; i++) {
                ele[i].style.display = 'none';
            }

            var elem = document.getElementsByClassName('notice');
            for (var i = 0; i < elem.length; i++) {
                elem[i].innerHTML = 'Please select a date from tomorrow onwards.';
            }
        }

        // window.onload = updateSelectedDate;

        window.onload = function() {
            updateSelectedDate();
            generateAndSetRequestId();


            const hallnumber = getQueryParam('hallno');
            document.getElementById('hallNo').textContent=hallnumber;
            document.getElementById('hallno').value = hallnumber;
            hallnuberforinputfield=document.getElementById('hallno')
            console.log(hallnuberforinputfield );
            



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

        function getQueryParam(name) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(name);

        }

        function generateAndSetRequestId() {
            const requestId = generateUniqueId();
            // document.getElementById('requestId').value = requestId;
            document.getElementById('requestId').textContent = requestId;

        }

        function generateUniqueId() {
            return 'R' + Date.now();
        }


        function bookSlot(selectedTime) {
            document.getElementById('endTime').value = '';
            document.getElementById('hours').value = '';
            // window.location.href = `reservaReq?time=${selectedTime}&date=${document.getElementById('selectedDate').innerHTML}`;
            document.getElementById('startTime').value = selectedTime;
            // document.getElementById('date').value=document.getElementById('selectedDate').innerHTML;
            var sdate=document.getElementById('selectedDate').innerHTML;
            var sdate1 = new Date(sdate);
            // $timestamp = strtotime($selectedDate);
            var sdate2= sdate1.getFullYear() + '-' + String(sdate1.getMonth()+1).padStart(2, '0') + '-' + String(sdate1.getDate()).padStart(2, '0');
            console.log("selected date");
            console.log(sdate2);
            document.getElementById('date').value=sdate2;
            updateEndTimeOptions(selectedTime);
                                            
        }



        function popup(id) {

            event.preventDefault();
            console.log("inside popup function");
            // Prevent the default form submission
            // event.preventDefault();
            // document.getElementById('Form').submit();
            // Check if all required fields are filled
            if (checkRequiredFields()) {
                // All required fields are filled, proceed with your logic
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




















        // Add an event listener to the end time input field
        document.getElementById('endTime').addEventListener('input', function() {
            // Get the start time and end time values
            const startTime = document.getElementById('startTime').value;
            const endTime = this.value; // 'this' refers to the element that triggered the event

            // Calculate the hours difference
            const hoursDifference = calculateHoursDifference(startTime, endTime);

            // Update the value of the 'hours' input field
            document.getElementById('hours').value = hoursDifference;
        });

        // Function to calculate the hours difference between two time strings
        function calculateHoursDifference(startTime, endTime) {
            // Convert times to Date objects
            const startDate = new Date(`1970-01-01T${startTime}`);
            const endDate = new Date(`1970-01-01T${endTime}`);

            // Calculate the difference in milliseconds
            const differenceInMilliseconds = endDate - startDate;

            // Convert the difference to hours
            const hoursDifference = differenceInMilliseconds / (60 * 60 * 1000);

            // Return the result as an integer
            return Math.floor(hoursDifference);
        }
    </script>

</html>