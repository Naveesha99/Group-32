
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recover</title>
  <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
  <link rel="stylesheet" href="<?=ROOT?>/assets/css/ticket_booking/recover.css">
</head>


<body>
<?php 
  require_once 't_reservaNavBar.php';
?>
 
<div class="container">

    <form method="post" id="paymentForm">
      
          <h2>Find Your Latest Booked Details</h2>

          

          <div class="input-control">
            <label for="email"><b>Email</b></label><br>
            <input type="text" placeholder=" Email" name="email" id="email"><br>
            <?php if(!empty($errors['email'])): ?>
            <div class="error"><?= $errors['email'];?></div>
            <?php endif;?>

          </div>
                <br><br><br>
          <div class="input-control">
            <label for="phone"><b>Phone Number</b></label><br>
            <input type="text" placeholder=" Phone Number" name="phone" id="phone"><br>
            <?php if(!empty($errors['phone'])): ?>
            <div class="error"><?= $errors['phone'];?></div>
           <?php endif; ?>
          </div>
                
        <div>                 
            <button class="registerbtn1" type="submit" >CONFIRM YOUR DETAILS</button>
        </div>
    </form>

    

    <div class="paymentForm">
    <?php if(isset($errors['not_data']))
          {
            ?>
                <div class="error"><?= $errors['not_data'];?> </div>
            <?php
          }
            ?>

        <?php
            if(isset($data['rows']))
            {
                // show($data['rows']);
                foreach($data['rows'] as $x)
                {
                    $order_id =$x->order_id;
                    $payment = $x->payment;
                    $refund = $x->refund;
                    $name = $x->username;
                    $email = $x->email;
                    $drama_id = $x->drama_id;
                    $drama_date = $x->drama_date;
                    $drama_time = $x->drama_time;
                    $seat_id = $x->seat_id;
                }
        ?>
                <div id="container">
                    <div class="data">
                        <div id="order_id">Booking ID :<?= $order_id ?></div>
                        <div id="drama_id">Payment:<?= $payment ?></div>
                        <div id="drama_id">Refund :<?= $refund ?></div>
                        <div id="drama_id">DramaID :<?= $drama_id ?></div>
                        <div id="drama_date">Drama Date :<?= $drama_date ?></div>
                        <div id="drama_time">Drama Time :<?= $drama_time ?></div>
                        <div id="seat_id">Booked seats :<?= $seat_id ?></div>
                    </div>
                </div>
                                <br><br>
                <div id="container">
                    <div id="heading">QR code Generator</div>
                    <div id="qr-code">
                        <div id="fake-qr"></div>
                    </div>
                    <input type="hidden" id="text-input" placeholder="enter data" value="<?= $order_id ?>" oninput="handleInput()">
                    <div id="loading-text"></div>
                    <!-- <button id="generate-btn" onclick="generateQRCode()">Generate QR Code</button> -->
                    <button id="download-btn" onclick="downloadQRCode()" disabled>Download QR Code</button>
                </div>

        <?php

            }
        ?>
    </div>
</div>

<?php require_once 't_reservaFooter1.php' ?>

    </body>
</html>

<!-- _______________________________________QR GENERATOR_________________________________________ -->
<script>
        var qrcode;

        window.onload = function () {
            generateQRCode();
        };

        function generateQRCode() {
            var textInput = document.getElementById('text-input').value.trim();
            var qrContainer = document.getElementById('qr-code');
            var downloadBtn = document.getElementById('download-btn');
            var loadingText = document.getElementById('loading-text');

            loadingText.innerHTML = 'Generating QR Code...';
            qrContainer.innerHTML = '';

            if (textInput !== '') {
                qrcode = new QRCode(qrContainer, {
                    text: textInput,
                    width: Math.min(200, window.innerWidth - 20),
                    height: Math.min(200, window.innerWidth - 20),
                    colorDark: '#000',
                    colorLight: '#fff',
                });

                qrContainer.style.display = 'flex';
                downloadBtn.disabled = false;

                setTimeout(function () {
                    loadingText.innerText = '';
                }, 500);
            } else {
                qrContainer.style.display = 'none';
                generateRandomQRCode();
                downloadBtn.disabled = true;
                loadingText.innerText = '';
            }
        }

        function downloadQRCode() {
            if (qrcode) {
                var canvas = qrcode._el.querySelector('canvas');
                var dataURL = canvas.toDataURL('image/png');
                var link = document.createElement('a');
                link.href = dataURL;
                link.download = 'qrcode.png';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            }
        }

        function generateRandomQRCode() {
            var fakeQR = document.getElementById('fake-qr');
            fakeQR.style.backgroundImage = "url('placeholder-qr.png')";
        }
    </script>