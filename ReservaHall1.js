// Your JavaScript for handling calendar and schedule functionality

// Example: Calendar functionality to display schedules based on the selected day
document.getElementById('calendar').addEventListener('click', function(event) {
    if (event.target.tagName === 'TD') {
        const selectedDay = event.target.innerText; // Get the selected day

        // You may use an AJAX call or dummy data for schedules
        // For example:
        const schedule = getScheduleForDay(selectedDay);

        // Display the schedule for the selected day in the schedule tile
        document.getElementById('daySchedule').innerHTML = schedule;
    }
});

function getScheduleForDay(day) {
    // Dummy data for schedules
    const schedules = {
        '1': 'Schedule for Day 1',
        '2': 'Schedule for Day 2',
        // Add more schedules for different days...
    };

    return schedules[day] || 'No schedule available for this day';
}
