<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Scanner</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ticket_booking/qrscanner.css">
</head>

<body>
    <div class="container">
        <h3>SCAN THE QR</h3>
        <div style="display:flex; justify-content: center;">
            <div id="my-qr-reader"style="width:500px;"></div>
        </div>
        <form id="qrdata" method="POST">
            <input type="text" id="you-qr-result" name="qrdata" value="" readonly>
            <button type="submit" id="btn1">FIND</button>
        </form>
    </div>

    <div class="container">
        <!-- <?//php show($data); ?> -->
    </div>


    <div class="container">

    <?php
    
    // show($data);
            if(isset($data['row']))
            {
               $x = $data['row'];
        ?>
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


        <?php
            }
        ?>
    </div>



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
</body>