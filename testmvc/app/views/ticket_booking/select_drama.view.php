<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Theatre Reservation Form</title>
        <link rel="stylesheet" href="<?= ROOT ?>/assets/css/ticket_booking/select_drama.css">
        <!-- <link rel="stylesheet" href="<?= ROOT ?>/assets/css/ticket_booking/select_drama1.css"> -->
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:400,700">

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="<?= ROOT ?>/assets/js/ticket_booking/select_drama.js"></script>
    </head>

    <body>


<?php 
  require_once 't_reservaNavBar.php';
?>

        <div class="image-container">
            
            <div class="form1">
            <div class="title"><?= $data[0]->title ?></a></div>
            
                <img src="<?= ROOT ?>/assets/images/drama_img/<?= $data[0]->image ?>" alt="Image 1">

                <div class="calendar">
                    <div class="calendar-body">
                        <table>

                            <br>
                            <div class="para">
                                <p>Click on the required date to check the Drama Showing Time </p>
                            </div>
                            

                            <tr>
                                <div class="container">
                                        <div class="carousel" id ="dateCarousel" value=""></div>

                                    <form id="userForm" method="POST">
                                        <input type="hidden" name="date" id="selectedDate">
                                        <input type="hidden" name="drama_id" id="selectedDate" value="<?= $data[0]->id ?>">
                                        
                                        <!-- <button type="submit" class="date_class">VIEW TIMES</button> -->
                                    </form>
                                </div>  

                                <?Php
                                //show($_POST);
                                ?>
                            </tr>

                            <tr>
                                <td class="time">
                                    <!-- <form action="seat_map" method="POST">
                                        <button class="b2" type="submit" id="userForm"></button>
                                    </form> -->
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <!-- <div class="form3"> -->
                <!-- <div class="topic">Upcoming Drama Times</div> -->
                <?php
                
                // if(isset($data['tmsss']))
                // {
                    // echo'ISHAN CHAMIKA';
                    // foreach($data['tmsss'] as $x)
                    // {
                    //     $time_from_db = $x->time;
                    //     $time_formatted = date("h:i A", strtotime($time_from_db));
                    ?>
                        <!-- <div class="times"><?= $x->date ?> <?= $time_formatted ?></div><br> -->
                    <?php 
                //     }
                // }
                    ?>
            <!-- </div> -->

            <div class="form2">
                <div class="topic">
                    <p>DESCRIPTION</p>
                    <div class="slideshow-container">
                        <div class="mySlides fade">
                            <?= $data[0]->description ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="switch">
            <div class="switch1">
                <a href="<?= ROOT ?>/recover">
                    <button class="submit-button">Lost Your Booking Details ?</button>
                </a>
            </div>
            <!-- <div class="swich1">
                <a href="<?= ROOT ?>/seat_map">
                    <button class="submit-button">BOOK TICKET</button>
                </a>
            </div> -->
        </div>

        <?php require_once 't_reservaFooter1.php' ?>

<script>
// ____________________________show times_________________________________________

    $(document).ready(function() {
    // Function to generate dates and handle component click events
    function generateDates() {
        const carousel = document.getElementById('dateCarousel');
        const currentDate = new Date();

        for (let i = 0; i < 7; i++) {
            const date = new Date(currentDate);
            date.setDate(currentDate.getDate() + i);

            // const dayName = date.toLocaleDateString('en-US', { weekday: 'short' });
            const dayName = date.toLocaleDateString('en-US', { weekday: 'short', timeZone: 'Asia/Colombo' });
            const dateNumber = date.getDate();

            const component = document.createElement('div');
            component.classList.add('component');
            component.textContent = `${dayName} ${dateNumber}`;

            // Add an event listener to update the hidden input and trigger AJAX request on click
            component.addEventListener('click', function () {

                // Remove 'clicked' class from all components
                document.querySelectorAll('.component').forEach(comp => comp.classList.remove('clicked'));

                // Add 'clicked' class to the clicked component
                this.classList.add('clicked');
                document.getElementById('selectedDate').value = date.toISOString().split('T')[0];
                
                // Trigger the AJAX request
                sendAjaxRequest();
            });

            carousel.appendChild(component);
        }
    }

    // Call the function to generate dates
    generateDates();



//______________________convert time into AM/PM format__________________________________

    function convertTime(time) 
    {
    // Split the time string into hours, minutes, and seconds
    var timeArray = time.split(':');
    var hours = parseInt(timeArray[0]);
    var minutes = timeArray[1];

    // Convert hours to 12-hour format
    var meridiem = 'AM';
    if (hours >= 12) {
        meridiem = 'PM';
    }
    if (hours > 12) {
        hours -= 12;
    }
    if (hours === 0) {
        hours = 12;
    }

    // Construct the formatted time string
    var formattedTime = hours + ':' + minutes + ' ' + meridiem;
    return formattedTime;
}



//_____________________Function to send AJAX request_____________________________

    function sendAjaxRequest() {
        $.ajax({
            method: "POST",
            url: "<?= ROOT ?>/time",
            data: $('#userForm').serialize(),
            success: function (data) {
                console.log(data);

                $('.time').empty();

                for (var i = 0; i < data.length; i++) 
                {
                    
                    var time = data[i].time;
                    
                    $('.time').append('<td>'+
                    '<form method="POST" action="seat_map">'+
                    '<button type="submit" class="b2" name="time" value=time>' + convertTime(time) + '</button>'+
                    
                    '<input type="hidden" name="drama_id" value='+ data[i].drama_id +'>'+
                    '<input  type="hidden" name="date" value='+ data[i].date +'>'+
                    '<input  type="hidden" name="time" value='+ data[i].time +'>'+

                    '</form>'+
                    '</td>');
                }
            }
        });
    }
});



</script>        
        
</body>
</php>