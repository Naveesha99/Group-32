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