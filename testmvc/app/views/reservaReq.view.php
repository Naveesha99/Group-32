<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=ROOT?>/assets/css/reservaReq.css" rel="stylesheet">

    <script src="<?= ROOT ?>/assets/js/reservaReqModal.js" defer></script>
    <title>Admin Panel</title>

</head>


<?php require_once 'reservaSideBar.php' ?>

<body class="dashboard">
    <div class="container">
        <div class="header">


            <?php require_once 'navBar.php' ?>
        </div>

        <div class="content">
            <form class="form">
                <h2>HALL 01 <BR> BOOKING REQUEST</h2>
                <div class="form_f">
                    <label for="requestId">Request ID:</label>
                    <!-- Add a readonly input field for Request ID -->
                    <input type="text" id="requestId" name="requestId" readonly>
                </div>

                <div class="form_f">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Write your name here..">
                </div>
                <div class="form_f">

                    <label for="date">Date:</label>
                    <input type="text" id="date" name="date" readonly>
                </div>

                <div class="form-inside">
                    <div class="form_f">

                        <label for="startTime">Starting Time:</label>
                        <input type="text" id="startTime" name="startTime" readonly>
                    </div>
                    <div class="form_f">

                        <label for="hours">Hours:</label>
                        <input type="number" id="hours" name="hours" placeholder="No of Hours"
                            oninput="validateHours(this)">
                    </div>
                    <script>
                        function validateHours(input) {
                            // Get the entered value
                            let enteredValue = input.value;

                            // Check if the entered value is negative
                            if (enteredValue < 0) {
                                // If negative, set the value to 0
                                input.value = 0;
                            }
                        }
                    </script>
                </div>
                <div class="form_f">

                    <label for="hcount">Head Count:</label>
                    <input type="number" id="hcount" name="hcount" placeholder="Head Count"
                        oninput="validateHcount(this)">
                </div>
                <script>
                    function validateHCount(input) {
                        // Get the entered value
                        let enteredValue = input.value;

                        // Check if the entered value is negative
                        if (enteredValue < 0) {
                            // If negative, set the value to 0
                            input.value = 0;
                        }
                    }
                </script>

                <datalist id="yesOrNo">
                    <option value="YES">
                    <option value="NO">
                </datalist>
                <div class="form-inside">
                    <div class="form_f">

                        <label for="sounds">Sounds:</label>
                        <input type="text" id="sounds" name="sounds" list="yesOrNo">
                    </div>
                    <div class="form_f">

                        <label for="standings">Standings:</label>
                        <input type="text" id="standings" name="standings" list="yesOrNo">
                    </div>
                </div>

                <div class="form_f">

                    <label for="message">Message:</label>
                    <input type="text" id="message" name="message" placeholder="What would you like to tell us..">
                </div>
                <div class="form-inside2">
                    <div class="form_f1">
                        <label for="Advanced Payment ">Advanced Payment:</label>
                        <input type="A payment" placeholder="A payment">
                    </div>
                    <div class="form_f1">
                        <label for="Full Payment ">Advanced Payment:</label>
                        <input type="F payment" placeholder="F payment">
                    </div>
                </div>
                <div class="btns">
                    <button type="button" onclick="popup(this)">Send Request</button>
                    <button type="button" onclick="window.location.href='reservaHall1.html'">Cancel</button>
                </div>
                <!-- <div>
                <span class="fa fa-phone"></span>001 1023 567
                <span class="fa fa-envelope-o"></span> contact@company.com
                </div>  -->
            </form>
        </div>
    </div>




    <!-- New popup container for confirmation message -->
    <div class="modal" id="modal">
        <div class="modal-body">
            <div class="modal-content">
                <h2>Your Request Has Been Successfully Submitted!</h2>
                <p>A confirmation email will be dispatched to you within 24 hours.</p>
                <p>You have 12 hours to make any necessary adjustments to your request.</p>
                <p>If you have inquiries, please contact us at <span class="contact-number">0111111111</span>.</p>
                <div class="button-container">
                    <button onclick="viewRequest()">View Request</button>
                    <button onclick="closeConfirmation()">OK</button>
                </div>
            </div>
        </div>
    </div>




    <script>
        // Function to extract query parameters from the URL
        function getQueryParam(name) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(name);
        }


        function setValuesFromURL() {
            const selectedTime = getQueryParam('time');
            const selectedDate = getQueryParam('date');


            // Set the values to the respective elements on the page
            document.getElementById('startTime').textContent = selectedTime;

            document.getElementById('selectedDate').textContent = selectedDate;

        }

        // Function to be called when the form is submitted
        function submitForm() {
            // Add your form submission logic here
            alert('Form submitted!');
        }

        window.onload = function () {
            const startTimeInput = document.getElementById('startTime');
            const selectedTime = getQueryParam('time');
            if (selectedTime) {
                startTimeInput.value = selectedTime;
            }
            const DateInput = document.getElementById('date');
            const selectedDate = getQueryParam('date');
            console.log("setDate function is executed", selectedDate);

            if (selectedDate) {
                DateInput.value = selectedDate;
            }
            generateAndSetRequestId();
        }
        function generateAndSetRequestId() {
        // Assuming you have a function to generate a unique ID, you can use it here
        const requestId = generateUniqueId();

        // Set the generated ID to the Request ID field
        document.getElementById('requestId').value = requestId;
    }

    // Example function to generate a unique ID (you may need a more robust solution)
    function generateUniqueId() {
        // This is a simple example, and you may want to use a more sophisticated method
        // to generate a unique ID, such as UUIDs or server-generated IDs.
        return 'R' + Date.now();
    }




    </script>


</html>