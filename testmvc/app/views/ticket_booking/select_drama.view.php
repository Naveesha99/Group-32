<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Theatre Reservation Form</title>
        <link rel="stylesheet" href="<?= ROOT ?>/assets/css/ticket_booking/select_drama.css">
        <!-- <link rel="stylesheet" href="<?= ROOT ?>/assets/css/ticket_booking/select_drama1.css"> -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>

    <body>
        <div class="image-container">
            <div class="form1">

                <h1><?= $data[0]->title ?></h1>

                <img src="<?= ROOT ?>/assets/images/drama_img/<?= $data[0]->image ?>" alt="Image 1">

                <div class="calendar">
                    <div class="calendar-body">
                        <table>

                            <br>

                            <tr>
                                <div class="container">
                                    <!-- <div class="component_left" onclick="moveDates('left')"><i class='bx bxs-left-arrow'></i></div> -->
                                        <div class="carousel" id ="dateCarousel" value=""></div>
                                    <!-- <div class="component_right" onclick="moveDates('right')"><i class='bx bxs-right-arrow'></i></div> -->

                                    <form id="userForm" method="POST">
                                        <input type="hidden" name="date" id="selectedDate">
                                        <input type="hidden" name="drama_id" id="selectedDate" value="<?= $data[0]->id ?>">
                                        
                                        <button type="submit" class="date_class">VIEW TIMES</button>
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
                <a href="<?= ROOT ?>/cancellation">
                    <button class="submit-button">CANCEL TICKET</button>
                </a>
            </div>
            <div class="swich1">
                <a href="<?= ROOT ?>/seat_map">
                    <button class="submit-button">BOOK TICKET</button>
                </a>
            </div>
        </div>
        <script>
            // ____________________________show times_________________________________________
         
            
                $(document).on('submit', '#userForm', function (e) {
                e.preventDefault();

                $.ajax({
                    method: "POST",
                    url: "<?= ROOT ?>/time",
                    data: $(this).serialize(),
                    success: function (data) 
                    {
                        console.log(data);

                        $('.time').empty();

                        for (var i = 0; i < data.length; i++)
                        {
                            var time = data[i].time;
                            //var drama_id = data[i].drama_id;
                            //var button1 = document.createElement("button")
                            //button1.onclick

                            $('.time').append('<td>'+
                            '<form method="POST" action="seat_map">'+
                            '<button type="submit" class="b2" name="time" value=time>' + time + '</button>'+
                            
                            '<input type="hidden" name="drama_id" value='+ data[i].drama_id +'>'+
                            '<input  type="hidden" name="date" value='+ data[i].date +'>'+
                            '<input  type="hidden" name="time" value='+ data[i].time +'>'+

                            '</form>'+
                            '</td>');
                        }
                    }
                });
            });
     
        </script>

<script>
    history.pushState(null, '', '/testmvc1/public/select_drama');


    window.onpopstate = function(event) {
        // Send an AJAX request to your server
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '<?=ROOT?>/select_drama', true);
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.onload = function() {
            if (xhr.status === 200) {
                // Request was successful, do something
                console.log('Data sent successfully');
                
            } 
            else 
            {
                // Request failed, handle error
                console.error('Failed to send data');
            }
        };
        xhr.onerror = function() 
        {
            // Request failed, handle error
            console.error('Failed to send data');
        };
        // You can send any data in the request body
        var data = { name: 'ishan' };
        xhr.send(JSON.stringify(data));
    }
</script>
        
        <script src="<?= ROOT ?>/assets/js/ticket_booking/select_drama.js"></script>
    </body>
</php>