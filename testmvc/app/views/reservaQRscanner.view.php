<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Scanner</title>
    <!-- <link rel="stylesheet" href="<?=ROOT?>/assets/css/ticket_booking/qrscanner.css"> -->
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ticket_booking/check_viewers.css">

</head>

<body>
    <div class="container">
        <div class="container1">
        <h3>Find Booking and Refund Details</h3>
        <div style="display:flex; justify-content: center;">
            <div id="my-qr-reader"style="width:500px;"></div>
        </div>
        <form id="qrdata" method="POST">
            <input type="text" id="you-qr-result" name="qrdata" value="" readonly>
            <button type="submit" id="btn1">FIND</button>
        </form>
    </div>



    <div class="container2">

    <?php
    
    // show($data);
            if(isset($data['row']))
            {
               $x = $data['row'];
            ?>
            <div class="indetails">

                <div class="order_data">Order ID : <?= $x[0]->id ?></div>
                <div class="order_data">Hall Name : <?= $x[0]->hallno ?></div>
                <div class="order_data">Date : <?= $x[0]->date ?></div>
                <div class="order_data">startTime : <?= $x[0]->startTime ?></div>
                <div class="order_data">endTime : <?= $x[0]->endTime ?></div>
                <div class="order_data">hours : <?= $x[0]->hours ?></div>
                <div class="order_data">sounds : <?= $x[0]->sounds ?></div>
                <div class="order_data">standings : <?= $x[0]->standings ?></div>
                <div class="order_data">amount : <?= $x[0]->amount ?></div>
                <div class="order_data">status : <?= $x[0]->status ?></div>
                <div class="order_data"> Reservationist ID : <?= $x[0]->reservationistId ?></div>
                <div class="order_data">Is Paid : <?= $x[0]->ispaid ?></div>
                <div class="order_data">has Arrived : 
                    <?php 
                        if($x[0]->hasArrived == 1){
                            echo "Yes";
                        }else{
                            echo "No";
                        }; ?> 
                </div>                                              
                <div class="order_data">refundAmount : <?= $x[0]->refundedAmount ?></div>



                <?php if(isset($x[0]->refundedAmount))
                    {
                        if($x[0]->refundedAmount > 0)
                        { ?>
                            <div class="order_data">
                                <p>Refund Details : <?= $x[0]->refundedAmount; ?></div></p>
                            </div>
                            <form method="post">
                                <input type="text" value="<?= $x[0]->id ?>" name="reqid">
                                <input type="text" value="refunded" name="status">
                                <button type="submit">Confirm Refund</button>
                            </form>
                        <?php 
                        }
                        else { ?>
                            <div class="order_data">
                            <p>Has arrived</p>
                            </div>
                            <form action="" method="post">
                                <input type="text" value="<?= $x[0]->id ?>" name="reqid">
                                <input type="text" value="1" name="isArrived">
                                <button type="submit">Confirm Arrival</button>
                            </form>

                   <?php }
                    }
                ?>
    </div>

<?php }?>

    <!-- LOAD Library__ -->
    <script src="https://unpkg.com/html5-qrcode"></script>
    <script>
        function domReady(fn){
            if(document.readyState === "complete" || document.readyState === "interactive"){
                setTimeout(fn, 1)
            }
            else
            {
                document.addEventListener("DOMContentLoaded", fn)
            }
        }

        domReady(function(){
            var myqr =document.getElementById('you-qr-result')
            var lastResult,countResults = 0;

            // IF FOUND QR CODE
            function onScanSuccess(decodeText,decodeResult){
                if(decodeText !== lastResult){
                    ++countResults;
                    lastResult =decodeText;

                    // SET THE VALUE OF INPUT TAG
                    myqr.value = decodeText;

                    // ALTER YOU QR HERE
                    alert("You QR is : " + decodeText, decodeResult)

                    // AND ADD TODO YOU QR IN TOP
                    myqr.innerHTML = ` You Scan ${countResults} : ${decodeText}`
                }
            }
            // AND LAST RENDER CAMERA QR
            var htmlscanner = new Html5QrcodeScanner(
                "my-qr-reader",{fps:10,qrbox:250})

                htmlscanner.render(onScanSuccess)
        })
    </script>

    </div>
</body>