function requestOTP() 
{
    // Check if at least one checkbox is checked
    const checkbox1 = document.getElementById("myCheckbox1");
    const checkbox2 = document.getElementById("myCheckbox2");
    const ticketNumber = document.getElementById("numbers");

    if (!(checkbox1.checked || checkbox2.checked) || ticketNumber.value.trim() === "" || !isPositiveInteger(ticketNumber.value)) 
    {
        // No checkbox is checked or ticket number is empty, display the custom modal
        openModal();

        // Hide the modal after 2 seconds
        setTimeout(() => {
            closeModal();
        }, 2000);
    } 
    else 
    {
        // At least one checkbox is checked or ticket number is filled, navigate to cancel_otp.html
        window.location.href = "cancel_otp";
    }
}

function isPositiveInteger(value) {
    return /^\d+$/.test(value) && parseInt(value, 10) >= 0;
}

function openModal() {
    const modal = document.getElementById("customModal");
    modal.style.display = "flex";
}

function closeModal() {
    const modal = document.getElementById("customModal");
    modal.style.display = "none";
}
