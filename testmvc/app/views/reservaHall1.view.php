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
    <script src="<?= ROOT ?>/assets/js/reservaReqModal.js" defer></script>

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

                        <!-- <p>No Bookings</p> -->
                        <div class="time-slots">
                            <div class="notice"></div>
                            <div class="time-slot available" onclick="bookSlot('8:00AM')" id="1">8:00AM-9:00AM</div>
                            <div class="time-slot available" onclick="bookSlot('9:00AM')" id="1">9:00AM-10:00AM</div>
                            <div class="time-slot available" onclick="bookSlot('10:00AM')" id="1">10:00AM-11:00AM</div>
                            <div class="time-slot available" onclick="bookSlot('11:00AM')" id="1">11:00AM-12:00PM</div>
                            <div class="time-slot available" onclick="bookSlot('12:00AM')" id="1">12:00PM-1:00PM</div>
                            <div class="time-slot available" onclick="bookSlot('1:00PM')" id="1">1:00PM-2:00PM</div>
                            <div class="time-slot available" onclick="bookSlot('2:00PM')" id="1">2:00PM-3:00PM</div>
                            <div class="time-slot available" onclick="bookSlot('3:00PM')" id="1">3:00PM-4:00PM</div>
                            <div class="time-slot available" onclick="bookSlot('4:00PM')" id="1">4:00PM-5:00PM</div>
                            <div class="time-slot available" onclick="bookSlot('5:00PM')" id="1">5:00PM-6:00PM</div>
                            <div class="time-slot unavailable" onclick="bookSlot('6:00PM')" id="1">6:00PM-7:00PM</div>
                            <div class="time-slot available" onclick="bookSlot('7:00PM')" id="1">7:00PM-8:00PM</div>
                        </div>

                        <!-- <button class="ReqButton">Request</button> -->
                    </div>
                </div>
            </div>







            <form class="form">
                <h2> <span class="hallno" id="hallno">HALL 01</span> <BR> BOOKING REQUEST  <br><span class="spn1">ID: <label class="spn2" id="requestId1" name="requestId1"> </label></span></h2>
                <!-- <div class="form_f">
                    <label for="requestId">Request ID:</label>
                    <input type="text" id="requestId" name="requestId" readonly required>
                </div>  -->

                <div class="form_f">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Write your name here.." required>
                </div>
                <div class="form_f">

                    <label for="date">Date:</label>
                    <input type="text" id="date" name="date" readonly required>
                </div>

                <div class="form-inside">
                    <div class="form_f">

                        <label for="startTime">Starting Time:</label>
                        <input type="text" id="startTime" name="startTime" readonly required>
                    </div>
                    <div class="form_f">

                        <label for="hours">Hours:</label>
                        <input type="number" id="hours" name="hours" placeholder="No of Hours" required
                            oninput="validateHours(this)">
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

                    <label for="hcount">Head Count:</label>
                    <input type="number" id="hcount" name="hcount" placeholder="Head Count" required
                        oninput="validateHcount(this)">
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
                        <input type="text" id="sounds" name="sounds" list="yesOrNo" required>
                    </div>
                    <div class="form_f">

                        <label for="standings">Standings:</label>
                        <input type="text" id="standings" name="standings" list="yesOrNo" required>
                    </div>
                </div>

                <div class="form_f">

                    <label for="message">Message:</label>
                    <input type="text" id="message" name="message" placeholder="What would you like to tell us.." required>
                </div>
                <div class="form-inside2">
                    <div class="form_f1">
                        <label for="Advanced Payment ">Advanced Payment:</label>
                        <input type="A payment" placeholder="A payment">
                    </div>
                    <div class="form_f1">
                        <label for="Full Payment ">Advanced Payment:</label>
                        <input type="F payment" placeholder="F payment">
                    </div>
                </div>
                <div class="btns">
                    <!-- <button type="button" onclick="popup(this)">Send Request</button> -->
                    <button type="submit" onclick="popup(this)">Send Request</button>
                    <button type="button" onclick="window.location.href='reservaHall1'">Cancel</button>

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

    // Function to format the date as "Month YYYY, D"
    function formatDate(date) {
        const options = {
            month: 'long',
            year: 'numeric',
            day: 'numeric'
        };
        return new Date(date).toLocaleDateString(undefined, options);
    }

    function updateSelectedDate() {
        const today = new Date();
        const formattedDate = formatDate(today);
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

    window.onload = function () {
            updateSelectedDate();
            generateAndSetRequestId();

            
            const hallnumber = getQueryParam('hallno');
            document.getElementById('hallno').textContent=hallnumber;
            console.log(hallno);



            
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

    function getQueryParam(name) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(name);

        }

    function generateAndSetRequestId() {
        const requestId = generateUniqueId();
        // document.getElementById('requestId').value = requestId;
        document.getElementById('requestId1').textContent = requestId;

    }

    function generateUniqueId() {
        return 'R' + Date.now();
    }


    function bookSlot(selectedTime) {
        // window.location.href = `reservaReq?time=${selectedTime}&date=${document.getElementById('selectedDate').innerHTML}`;
        document.getElementById('startTime').value = selectedTime;
        document.getElementById('date').value=document.getElementById('selectedDate').innerHTML;
    }


</script>

</html>