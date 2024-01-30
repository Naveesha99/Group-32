<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms and Conditions</title>
    <!-- <link rel="stylesheet" href="styles/cancellation.css"> -->
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ticket_booking/cancellation.css">

</head>
<body>
    <!-- <button id="showPopup">Accept Terms</button> -->

    <div class="popup" id="popup">
        <div class="popup-content">
            <div class="popup-header">
                <h2>Ticket Cancellation</h2>
            </div>

            <div class="popup-body">
                <label for="numbers">Enter Ticket Number:</label>
                <input type="number" id="numbers" min="0">
            </div>
            

            <div class="paragraph">
                <p>Receive Ticket Number:</p>
            </div>
            <div class="container">
                <div class="custom-checkbox1">
                    <label for="myCheckbox1" class="label1">Email:</label>
                    <input type="checkbox" id="myCheckbox1">
                </div>
            
                <div class="custom-checkbox2">
                    <div class="checkbox-container">
                        <label for="myCheckbox2" class="label1">Contact:</label>
                        <input type="checkbox" id="myCheckbox2">
                    </div>
                </div>
            
                <div class="cancel">
                        <button class="submit-button" onclick="requestOTP()">Request OTP</button>
                </div>

                <div class="custom-modal" id="customModal">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal()">&times;</span>
                        <p>Please select the required method or Valid Ticket number</p>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- <script src="js/cancellation.js"></script> -->
    <script src="<?=ROOT?>/assets/js/ticket_booking/cancellation.js"></script>

</body>
</html>
