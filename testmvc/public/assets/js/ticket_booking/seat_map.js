const container = document.querySelector('.container');
const count = document.getElementById('count');
const total = document.getElementById('total');
const payable = document.querySelector('.payable'); // Add this line to select the payable div
const movieSelect = document.getElementById('movie');
const selectedSeatsInput = document.getElementById('selectedSeats');

let ticketPrice = +movieSelect.value;
let selectedSeatIds = [];

// Update total and count
function updateSelectedCount() {
  const selectedSeats = document.querySelectorAll('.row .seat.selected');
  selectedSeatIds = Array.from(selectedSeats).map(seat => seat.getAttribute('id'));

  const selectedSeatsCount = selectedSeatIds.length;

  count.innerText = selectedSeatsCount;
  total.innerText = selectedSeatsCount * ticketPrice;

  // Update the value of the hidden input field with selected seat IDs
  selectedSeatsInput.value = JSON.stringify(selectedSeatIds);

  // Update the payable div with the total price
  const longSpace = '\xa0\xa0\xa0\xa0\xa0\xa0';
  payable.innerText = "Amount Payable: \xa0\xa0\xa0\xa0 LKR" + longSpace + (selectedSeatsCount * ticketPrice);

  // Update the value of the hidden input field with the total price
  document.getElementById('totalPriceInput').value = selectedSeatsCount * ticketPrice;

}

// Movie Select Event
movieSelect.addEventListener('change', (e) => {
  ticketPrice = +e.target.value;
  updateSelectedCount();
});


// ______________________________________________________________________
// Seat click event
container.addEventListener('click', (e) => {
  const seat = e.target;

  if (e.target.classList.contains('seat') && !e.target.classList.contains('occupied')) {
    const role = e.target.getAttribute('role');

    if (role === 'free') 
    {
      e.target.classList.toggle('selected');
      updateSelectedCount();
    } 
    else if (role === 'booked') 
    {
      alert('This seat is already booked and you cannot be selected.');
      // You can customize this alert or add a UI indication for a booked seat
    } 
    else 
    {
      alert('This seat is selected by another user just now. But not approved. So please wait and try again.');
      // Handle other roles if needed
    }
  }
});

// _____________________________________________________________

// color booked seats red
const bookedSeats = document.querySelectorAll('.seat[role="booked"]');
bookedSeats.forEach(seat => {
  seat.classList.add('booked');
});

// Color pending seats yellow
const pendingSeats = document.querySelectorAll('.seat[role="pending"]');
pendingSeats.forEach(seat => {
  seat.classList.add('pending');
});



function toggleSubmitButton() {
  var checkbox = document.getElementById("myCheckbox");
  var submitButton = document.getElementById("submitBtn");

  // Enable or disable the submit button based on checkbox state
  submitButton.disabled = !checkbox.checked;
}

