function verifyOTP() 
{
    const otpInput = document.getElementById("numbers").value.trim();

    if (otpInput === "") 
    {
        openModal();
        return;  // Exit the function if OTP is not entered
    }

    // Perform OTP verification logic here

    // For demonstration purposes, let's simulate a successful verification
    showSuccessMessage();

    // Redirect to home.php after a delay
    setTimeout(function () {
        window.location.href = "home.view.php";
    }, 3000); // 3000 milliseconds = 3 seconds
}

function openModal() 
{
    const modal = document.getElementById("customModal");
    modal.style.display = "block";

    // Hide the modal after 2 seconds
    setTimeout(function () {
        closeModal();
    }, 2000); // 2000 milliseconds = 2 seconds
}

function closeModal() {
    const modal = document.getElementById("customModal");
    modal.style.display = "none";
}

function showSuccessMessage() 
{
    const successMessage = document.getElementById("successMessage");
    successMessage.innerHTML = "Ticket cancellation Successful";
    successMessage.style.display = "block";

    // Hide the success message after 2 seconds
    setTimeout(function () {
        successMessage.style.display = "none";
    }, 2000); // 2000 milliseconds = 2 seconds
}
