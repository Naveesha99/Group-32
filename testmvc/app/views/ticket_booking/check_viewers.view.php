<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Scanner</title>
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
                    if(isset($data['order_id']))
                    {?>
                    <div class="indetails">
                        <div class="order_data"><p>Name : <?= $data['username'] ?></p>
                                                <p>Email : <?= $data['email'] ?></p>
                                                <p>Phone : <?= $data['phone'] ?></p>
                                                <p>Order ID : <?= $data['order_id'] ?></p>
                                                <p>Drama ID : <?= $data['drama_id'] ?></p>
                                                <p>Drama Date : <?= $data['drama_date'] ?></p>
                                                <p>Drama Time : <?= $data['drama_time'] ?></p>
                                                <p>Booked Seats : <?= $data['seat_id'] ?></p>
                                                <p>Payment : <?= $data['payment'] ?></div>
                        
             <?php  if(isset($data['should_refund']) && isset($data['refund_amount']))
                        {?>
                        <br>
                        <div class="order_data">
                            <b><?= $data['username'] ?>Refund Details</b>
                            <p>Refund amount:<div class="special"> Rs. <?= $data['should_refund'] ?></div></p>
                            <p><?= $data['refund_amount'] ?></p>
                        </div>
                        <div class="buttons">
                            <button type="submit" id="btn3" onclick="goBack()">Cancel</button>

                            <form method="post">
                                <input type="hidden" name="refund_amount" value="<?=$data['should_refund']?>">
                                <input type="hidden" name="confirm_refund" value="<?=$data['order_id']?>">
                                <button type="submit" id="btn2">Refund</button>
                            </form>
                        </div>
                  <?php }
                        if(isset($data['refund_amount']) && !isset($data['should_refund']))
                        { ?>
                        <div class="order_data">Refund Details : <?= $data['refund_amount'] ?></div>
                  <?php }

                    } 
                        if(isset($data['no_user']))
                        { ?>
                        <div class="order_data"><?= $data['no_user'] ?></div>
                  <?php }
                        if(isset($data['sucess']))
                        {?>

                            <div class="special"><?= $data['sucess'] ?></div>
                <?php   }
                  ?>
                  </div>

              
              
            </div>
    </div>
</body>


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
    <script>


function goBack() 
{
  window.history.back();
}
</script>