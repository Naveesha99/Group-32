<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theatre Reservation Form</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ticket_booking/select_drama.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ticket_booking/select_drama1.css">
</head>

<body>
    <div class="image-container">
        <div class="form1">
            <h1>SINHABAHU</h1>
            <img src="<?=ROOT?>/assets/images/ticket_booking/image2.jpg" alt="Image 1">

            <div class="calendar">       
                <div class="calendar-body">
                    <table>
                            <tr>
                                <th>
                                    <button class="b1"> MON <br>8 </button>
                                </th>
                                <th>
                                    <button class="b1"> TUE <br>9 </button>
                                </th>
                                <th>
                                    <button class="b1"> WED <br>10 </button>
                                </th>
                                <th>
                                    <button class="b1"> THU <br>11 </button>
                                </th>
                                <th>
                                    <button class="b1"> FRI <br>12 </button>
                                </th>     
                            </tr>
        
                            <tr>
                                <td class="time">
                                    <a href="<?=ROOT?>/ticket_booking/conditions.php">
                                        <button class="b2">9.00 AM</button><br>
                                        <button class="b2">3.00 AM</button><br>
                                        <button class="b2">9.00 PM</button><br>
                                    </a>
                                </td>
        
                                <td class="time">
                                    <a href="<?=ROOT?>/ticket_booking/conditions.php">
                                        <button class="b2">9.00 AM</button><br>
                                        <button class="b2">3.00 AM</button><br>
                                        <button class="b2">9.00 PM</button><br>
                                    </a>
                                </td>
        
                                <td class="time">
                                    <a href="<?=ROOT?>/ticket_booking/conditions.php">
                                        <button class="b2">9.00 AM</button><br>
                                        <button class="b2">3.00 AM</button><br>
                                        <button class="b2">9.00 PM</button><br>
                                    </a>
                                </td>
                                <td class="time">
                                    <a href="<?=ROOT?>/ticket_booking/conditions.php">
                                        <button class="b2">9.00 AM</button><br>
                                        <button class="b2">3.00 AM</button><br>
                                        <button class="b2">9.00 PM</button><br>
                                    </a>
                                </td>
                                <td class="time">
                                    <a href="<?=ROOT?>/ticket_booking/conditions.php">
                                        <button class="b2">9.00 AM</button><br>
                                        <button class="b2">3.00 AM</button><br>
                                        <button class="b2">9.00 PM</button><br>
                                    </a>
                                </td>
                            </tr>
                    </table>
                </div>
            
            </div>
        </div>

        <div class="form2">
            <div class="topic">
                <p>Description</p>
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <img src="<?=ROOT?>/assets/images/ticket_booking/image1.jpg" alt="Image 1">
                    </div>
            
                    <div class="mySlides fade">
                        <img src="<?=ROOT?>/assets/images/ticket_booking/image2.jpg" alt="Image 2">
                    </div>
            
                    <div class="mySlides fade">
                        <img src="<?=ROOT?>/assets/images/ticket_booking/image3.jpg" alt="Image 3">
                    </div>
            
                    <div class="mySlides fade">
                        <img src="<?=ROOT?>/assets/images/ticket_booking/image4.jpg" alt="Image 4">
                    </div>
            
                    <div class="mySlides fade">
                        <img src="<?=ROOT?>/assets/images/ticket_booking/image5.jpg" alt="Image 5">
                    </div>
                </div>
            </div>


            <div class="switch">
                <div class="switch1">
                    <a href="<?=ROOT?>/ticket_booking/cancellation.php">
                        <button class="submit-button">CANCEL TICKET</button>
                    </a>  
                </div>
                <div class="swich1">
                    <a href="<?=ROOT?>/ticket_booking/conditions.php">
                        <button class="submit-button">BOOK TICKET</button>
                    </a>
                </div>                 
            </div>
            
        </div>
        
    </div>


</div>
<script src="<?=ROOT?>/assets/js/ticket_booking/select_drama.js"></script>
</body>
</php>
