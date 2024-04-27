<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Qr code generator</title>
        <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
        <link rel="stylesheet" href="<?=ROOT?>/assets/css/ticket_booking/qr_generator.css">

        <style>
        #qr-code:hover {
            cursor: default; /* Optional: Change cursor to default */
        }
    </style>

        
    </head>

    <body>
        <div id="container">
            <!-- <?//php show($data); ?> -->
            <div id="heading">QR code Generator</div>
            <div id="qr-code">
                <div id="fake-qr"></div>
            </div>
            <input type="hidden" id="text-input" placeholder="enter data" oninput="handleInput()" value="<?= $data[0]->id ?>" title="">
            <div id="loading-text"></div>
            <!-- <button id="generate-btn" onclick="generateQRCode()">Generate QR Code</button> -->
            <button id="download-btn" onclick="downloadQRCode()" disabled>Download QR Code</button>
        </div>
    </body>
</html>


<script>
    var qrcode;
    var timeout;

    window.onload = function () {
        generateQRCode(); // Call generateQRCode function when the page loads
        document.getElementById('text-input').addEventListener('input', function () {
            clearTimeout(timeout);
            timeout = setTimeout(generateQRCode, 500); // Wait 500 milliseconds after user stops typing
        });
    };

    function generateQRCode() {
        console.log('Generating QR code...');
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

            // window.location.href = 'https://example.com'; // Change this URL to the desired page
            window.location.href = "<?php echo ROOT ?>/reservasentreq";

        }
    }

    function generateRandomQRCode() {
        console.log('Generating random QR code...');
        var fakeQR = document.getElementById('fake-qr');
        fakeQR.style.backgroundImage = "url('placeholder-qr.png')";
    }
</script>
