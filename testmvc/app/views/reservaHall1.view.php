<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= ROOT ?>/assets/css/reservaHall1.css" rel="stylesheet">
    <script src="<?= ROOT ?>/assets/js/cl.js" defer></script>
    <!-- <script src="/js/ReservaHall1.js"></script> -->
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/cl_1.css">
    <title>Admin Panel</title>

    <style>
        .tile {
            position: relative;
        }

        .tile svg {
            margin: 0;
            display: block;
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%
        }
    </style>

</head>
<?php require_once 'reservaSideBar.php' ?>


<body class="dashboard">
    <div class="container">
        <div class="header">
            <?php require_once 'navBar.php' ?>

        </div>
        <div class="content">
            <div class="tile">
                <svg width="346" height="36" viewBox="0 0 346 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 34.4C1 34.4 83.0736 1 169.448 1C255.822 1 345.064 34.4 345.064 34.4" stroke="#B51111" stroke-linecap="square" />
                </svg>

                <svg width="384" height="163" viewBox="0 0 384 163" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.48 32.6C20.48 32.6 105.626 0 192 0C278.374 0 364.544 32.6 364.544 32.6L384 163H0L20.48 32.6Z" fill="url(#paint0_linear_604_1876)" />
                    <defs>
                        <linearGradient id="paint0_linear_604_1876" x1="-233.492" y1="-284.449" x2="-233.492" y2="81.5" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#B51111" />
                            <stop offset="1" stop-color="#B51111" stop-opacity="0.01" />
                        </linearGradient>
                    </defs>
                </svg>

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
                        <div class="time-slot available" onclick="bookSlot('8:00AM')" id="1">8:00AM</div>
                        <div class="time-slot available" onclick="bookSlot('9:00AM')" id="1">9:00AM</div>
                        <div class="time-slot available" onclick="bookSlot('10:00AM')" id="1">10:00AM</div>
                        <div class="time-slot available" onclick="bookSlot('11:00AM')" id="1">11:00AM</div>
                        <div class="time-slot available" onclick="bookSlot('12:00AM')" id="1">12:00PM</div>
                        <div class="time-slot available" onclick="bookSlot('1:00PM')" id="1">1:00PM</div>
                        <div class="time-slot available" onclick="bookSlot('2:00PM')" id="1">2:00PM</div>
                        <div class="time-slot available" onclick="bookSlot('3:00PM')" id="1">3:00PM</div>
                        <div class="time-slot available" onclick="bookSlot('4:00PM')" id="1">4:00PM</div>
                        <div class="time-slot available" onclick="bookSlot('5:00PM')" id="1">5:00PM</div>
                        <div class="time-slot unavailable" onclick="bookSlot('6:00PM')" id="1">6:00PM</div>
                        <div class="time-slot available" onclick="bookSlot('7:00PM')" id="1">7:00PM</div>
                    </div>

                    <!-- <button class="ReqButton">Request</button> -->
                </div>
            </div>
        </div>

    </div>
</body>
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
    // Function to update the selected date
    function updateSelectedDate() {

        const today = new Date();
        const formattedDate = formatDate(today);

        //     const selectedDateText = document.getElementById('selectedDate').textContent;
        //     if (selectedDateText === formattedDate) {
        //     // The selected date is today, hide the time slots
        //     var el = document.getElementsByClassName('time-slots');
        //     for (var i = 0; i < el.length; i++) {
        //         el[i].style.display = 'none';
        //     }
        // } 

        document.getElementById('selectedDate').textContent = formattedDate;
        console.log(formattedDate);

        // if (document.getElementById('selectedDate').innerHTML == today) {
        //     var el = document.getElementsByClassName('time-slots');
        //     for (var i = 0; i < el.length; i++) {
        //         el[i].style.display = 'none';
        //     }
        // }

        // document.getElementById('1').innerHTML='Unavailable';

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

        // document.getElementById('1').style.display = 'none';


        // timeSlots.forEach(slot => {
        //         slot.classList.add('time-slot unavailable');
        //         slot.innerHTML("unavailabe");
        //     });


        // const timeSlots = document.querySelectorAll('.time-slot');
        // // Check if the selected date is today or before today
        // const selectedDate = new Date(today.getFullYear(), today.getMonth(), today.getDate());
        // console.log('abc' );
        // const currentDate = new Date(currYear, currMonth, parseInt(selectedDateHeader.textContent.match(/\d+/)[0]));
        // // const currentDate = new Date(currYear, currMonth, parseInt(selectedDateHeader.textContent.split(' ')[1]));
        // if (currentDate <= selectedDate) {
        //     // The selected date is today or before today, disable time slots
        //     timeSlots.forEach(slot => {
        //         slot.classList.add('unavailable');
        //     });
        // } else {
        //     // The selected date is after today, enable time slots
        //     timeSlots.forEach(slot => {
        //         slot.classList.remove('unavailable');
        //     });
        // }

    }
    // Call the function when the page loads
    window.onload = updateSelectedDate;




    function bookSlot(selectedTime) {
        // const selectedDate = document.getElementById('selectedDate').innerHTML;
        // if (isTodayOrBefore(selectedDate)) {
        //         // The selected date is today or before today, disable time slots
        //         alert('Selected date is today or before today. Time slots are unavailable.');
        //         return;
        //     }





        // You can implement the booking logic here
        // alert("Time slot booked: " + slot.innerText);
        // window.location.href='reservaReq.html?time=' + selectedTime;
        window.location.href = `reservaReq?time=${selectedTime}&date=${document.getElementById('selectedDate').innerHTML}`;

    }
</script>

</html>