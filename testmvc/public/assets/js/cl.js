const daysTag = document.querySelector(".days"),
    currentDate = document.querySelector(".current-date"),
    prevNextIcon = document.querySelectorAll(".icons span");

// getting new date, current year and month
let date = new Date(),
    currYear = date.getFullYear(),
    currMonth = date.getMonth();

// storing full name of all months in array
const months = ["January", "February", "March", "April", "May", "June", "July",
    "August", "September", "October", "November", "December"];

const renderCalendar = () => {
    let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(), // getting first day of month
        lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), // getting last date of month
        lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), // getting last day of month
        lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // getting last date of previous month
    let liTag = "";

    for (let i = firstDayofMonth; i > 0; i--) { // creating li of previous month last days
        liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
    }

    for (let i = 1; i <= lastDateofMonth; i++) { // creating li of all days of current month
        // adding active class to li if the current day, month, and year matched
        let isToday = i === date.getDate() && currMonth === new Date().getMonth()
            && currYear === new Date().getFullYear() ? "active" : "";
        liTag += `<li class="${isToday}">${i}</li>`;
    }

    for (let i = lastDayofMonth; i < 6; i++) { // creating li of next month first days
        liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`
    }

    // for (let i = firstDayofMonth; i < lastDayofMonth; i++) {
    //     const dayOfMonth = i - firstDayofMonth + 1;
    //     const currentDate = new Date(currYear, currMonth, dayOfMonth);

    //     if (currentDate < date) {
    //         liTag += `<li class="inactive">${dayOfMonth}</li>`;
    //     } else {
    //         liTag += `<li>${dayOfMonth}</li>`;
    //     }
    // }


    currentDate.innerText = `${months[currMonth]} ${currYear}`; // passing current mon and yr as currentDate text
    daysTag.innerHTML = liTag;


    const dayElements = document.querySelectorAll(".days li");
    const selectedDateHeader = document.querySelector(".tile2 h2"); // Select the h2 tag for the selected date


    dayElements.forEach(day => {
        day.addEventListener("click", function () {
            for (let i = 8; i < 20; i++) {
                // Select the element corresponding to the time slot
                const slotElement = document.getElementById(i);

                // If the slot element exists, add the unavailable class
                if (slotElement) {
                slotElement.classList.remove('unavailable');
                }
                }
            if ((!this.classList.contains("inactive")) && (!this.classList.contains("inactive2"))) {
                const selectedDate = new Date(currYear, currMonth, parseInt(this.textContent));

                // this part was added to alert function
                const today = new Date();
                if ((selectedDate < today) || (selectedDate == today)) {

                    const formattedDate = `${months[currMonth]} ${currYear}, ${this.textContent}`;
                selectedDateHeader.textContent = formattedDate;

                    var el = document.getElementsByClassName('time-slot available');
                    for (var i = 0; i < el.length; i++) {
                        el[i].style.display = 'none';
                    }

                    var el = document.getElementsByClassName('time-slot unavailable');
                    for (var i = 0; i < el.length; i++) {
                        el[i].style.display = 'none';
                    }
                    var elem = document.getElementsByClassName('notice');
                    for (var i = 0; i < elem.length; i++) {
                        elem[i].style.display = 'block'
                    }
                    // document.getElementById('selectedDate').innerHTML = "Please select a date from tomorrow onwards.";
                    // alert("Please select a date from today onwards.");
                    return;
                }

                else {
                    var el = document.getElementsByClassName('time-slot available');
                    for (var i = 0; i < el.length; i++) {
                        el[i].style.display = 'block';
                    }


                    var el = document.getElementsByClassName('time-slot unavailable');
                    for (var i = 0; i < el.length; i++) {
                        el[i].style.display = 'block';
                    }

                    var elem = document.getElementsByClassName('notice');
                    for (var i = 0; i < elem.length; i++) {
                        elem[i].style.display = 'none'
                    }
                }

                // Update the selected date
                const formattedDate = `${months[currMonth]} ${currYear}, ${this.textContent}`;
                selectedDateHeader.textContent = formattedDate;
                // console.log(document.getElementById('selectedDate').innerHTML );

            // 1. Extract the date from the selected date element
        // var selectedDate = document.getElementById('selectedDate').innerHTML;
        var sdate_1 = new Date(selectedDate);
            // $timestamp = strtotime($selectedDate);
            var sdate_2= sdate_1.getFullYear() + '-' + String(sdate_1.getMonth()+1).padStart(2, '0') + '-' + String(sdate_1.getDate()).padStart(2, '0');
        console.log("selected dateeeeeeeeeeeeeeeeeeee");
        console.log(sdate_2);
        // Now you can access the acceptedReservations array
        console.log(reservaReqs);


        // 2. Loop through the acceptedReservations array to find reservations on the selected date
        var bookedSlots = [];
        for (var i = 0; i < reservaReqs.length; i++) {
            var reservation = reservaReqs[i];
            var sdate_s = new Date(reservation.date);
            var sdate_s2=sdate_s.getFullYear() + '-' + String(sdate_s.getMonth()+1).padStart(2, '0') + '-' + String(sdate_s.getDate()).padStart(2, '0');
            console.log(sdate_s2);

            // 3. Check if the reservation date matches the selected date
            if (sdate_s2 === sdate_2) {
                console.log("fgdgh");
                // 4. Extract the start time and hours
                var startTime = reservation.startTime;
                var hours = reservation.hours;
                var endTime=reservation.endTime;
                var start = startTime.split(':');
                var end = endTime.split(':');
                var shour = parseInt(start[0], 10);
                var ehour = parseInt(end[0], 10);

                // 5. Calculate the end time based on the start time and hours
                // var endTime = calculateEndTime(startTime, hours);
                for (let i = shour; i < ehour; i++) {
                // Select the element corresponding to the time slot
                const slotElement = document.getElementById(i);

                // If the slot element exists, add the unavailable class
                if (slotElement) {
                slotElement.classList.add('unavailable');
                }
                }
                // Store the booked slot (start time and end time) in the bookedSlots array
                bookedSlots.push({ start: startTime, end: endTime });
            }
        }

        // // Function to calculate the end time based on the start time and hours
        // function calculateEndTime(startTime, hours) {
        //     // Convert start time to milliseconds
        //     var startTimeMs = Date.parse('01/01/2000 ' + startTime);

        //     // Add hours to start time in milliseconds
        //     var endTimeMs = startTimeMs + (hours * 60 * 60 * 1000);

        //     // Convert end time from milliseconds to formatted time
        //     var endTime = new Date(endTimeMs).toLocaleTimeString('en-US', { hour12: false });

        //     return endTime;
        // }

        // Now the bookedSlots array contains the booked slots for the selected date
        console.log(bookedSlots);

            }
        });
    });


}
renderCalendar();

prevNextIcon.forEach(icon => { // getting prev and next icons
    icon.addEventListener("click", () => { // adding click event on both icons
        // if clicked icon is previous icon then decrement current month by 1 else increment it by 1
        currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;

        if (currMonth < 0 || currMonth > 11) { // if current month is less than 0 or greater than 11
            // creating a new date of current year & month and pass it as date value
            date = new Date(currYear, currMonth, new Date().getDate());
            currYear = date.getFullYear(); // updating current year with new date year
            currMonth = date.getMonth(); // updating current month with new date month
        } else {
            date = new Date(); // pass the current date as date value
        }
        renderCalendar(); // calling renderCalendar function
    });
});




daysTag.addEventListener("click", (event) => {
    if (event.target.tagName === "LI" && !event.target.classList.contains("inactive")) {
        // Remove the "active" class from the current "active" day
        const activeDay = document.querySelector(".days .active");
        if (activeDay) {
            activeDay.classList.remove("active");
        }

        // Add the "active" class to the clicked day
        event.target.classList.add("active");

        // Update the "current-date" text to the clicked date
        //   currentDate.textContent = `${months[currMonth]} ${currYear}, ${event.target.textContent}`;
    }
});