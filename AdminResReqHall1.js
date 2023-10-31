function showDetails(id) {
    const details = getDetailsById(id);
    document.getElementById('detailsContainer').innerHTML = details;
    document.getElementById('modal').style.display = 'block';
}

function closeModal() {
    document.getElementById('modal').style.display = 'none';
}

function acceptReservation() {
    console.log('Reservation accepted');
}

function rejectReservation() {
    console.log('Reservation rejected');
}


function showDetails(btn) {
const tableRow = btn.parentNode.parentNode;
const cells = tableRow.getElementsByTagName('td');

const id = cells[0].innerText;
const name = cells[1].innerText;
const hallNo = cells[2].innerText;
const date = cells[3].innerText;
const startTime = cells[4].innerText;
const endTime = cells[5].innerText;
const headCount = cells[6].innerText;
const sounds = cells[7].innerText;
const light = cells[8].innerText;

const start = new Date(`2000-01-01T${startTime}`);
const end = new Date(`2000-01-01T${endTime}`);

// Calculate the difference in milliseconds
const diffInMilliseconds = Math.abs(end - start);

// Convert milliseconds to hours
const hours = diffInMilliseconds / (1000 / 60 / 60);

const modalContent = document.getElementById('detailsContainer');
modalContent.innerHTML = `
    <p>ID: ${id}</p>
    <p>Name: ${name}</p>
    <p>HallNo: ${hallNo}</p>
    <p>Date: ${date}</p>
    <p>Start Time: ${startTime}</p>
    <p>End Time: ${endTime}</p>
    <p>Hours: ${start}</p>
    <p>Head Count: ${headCount}</p>
    <p>Sounds: ${sounds}</p>
    <p>Light: ${light}</p>
    <p>Purpose: Few Lines</p>
`;

document.getElementById('modal').style.display = 'block';
}

// Rest of the script remains unchanged