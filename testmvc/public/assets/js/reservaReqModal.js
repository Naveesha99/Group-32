// function popup(id){
//     document.getElementById('modal').style.display='block';
// }

function popup(id) {
    // Prevent the default form submission
    // event.preventDefault();
    document.getElementById('Form').submit();
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
    console.log("INSIDE CLOSE CONFIRMATION D+FUN")
    // Add logic to handle "OK" button click
    // For now, let's just close the confirmation popup
    document.querySelector('.modal').style.display = 'none';
    // window.location.href = 'reservaHall';
    // redirect('reservaHall');

    // window.location.href = `reservaHall`;

}

function viewRequest(){
    console.log("INSIDE VIEW RE D+FUN")

    document.querySelector('.modal').style.display = 'none';
    // window.location.href = 'reservaSentReq';
    // redirect('reservaSentReq');

    // window.location.href = `reservaSentReq`;


}