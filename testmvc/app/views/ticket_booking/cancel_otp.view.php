<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms and Conditions</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ticket_booking/cancel_otp.css">
</head>
<body>
    <div class="popup" id="popup">
        <div class="popup-content">
            <div class="popup-header">
                <h2>Ticket Cancellation</h2>
            </div>

            <div class="popup-body">
                <label for="numbers">OTP Verification:</label>
                <input type="number" id="numbers" name="numbers" required title="Enter the ticket number">
            </div>
            
            <div class="cancel">
                <button class="submit-button" onclick="verifyOTP()">Verify OTP</button>
            </div>

            <div class="custom-modal" id="customModal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <p>Please enter the OTP before verifying.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="successMessage" class="success-message"></div>

    <script src="<?=ROOT?>/assets/js/ticket_booking/cancel_otp.js"></script>
</body>

</html>
