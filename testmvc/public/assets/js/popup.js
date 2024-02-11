document.getElementById('openPopup').addEventListener('click', function () {
    document.getElementById('overlay').style.display = 'block';
    document.getElementById('popupForm').style.display = 'block';
});

document.getElementById('closePopup').addEventListener('click', function () {
    document.getElementById('overlay').style.display = 'none';
    document.getElementById('popupForm').style.display = 'none';
});

document.getElementById('myForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent form submission
    
    // Get form data
    var formData = new FormData(this);
    
    // Perform AJAX request or other actions with form data
    
    // Close the popup
    document.getElementById('overlay').style.display = 'none';
    document.getElementById('popupForm').style.display = 'none';
});
