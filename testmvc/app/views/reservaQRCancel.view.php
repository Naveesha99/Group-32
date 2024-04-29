<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>DISEE - Invoice HTML5 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <!-- External CSS libraries -->
    
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >

    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ticket_booking/qr_generator1.css">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>




    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="<?=ROOT?>/assets/css/style.css">

</head>
<body>

<!-- Invoice 5 start -->
<div class="invoice-5 invoice-content">
    <!-- <?php show($data); ?> -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="invoice-inner clearfix">
                    <div class="invoice-info clearfix" id="invoice_wrapper">
                        <div class="invoice-contant">
                            <div class="invoice-headar">
                                <div class="row">
                                    <div class="col-md-8 col-sm-6">
                                        <div class="invoice-logo">
                                            <!-- logo started -->
                                            <div class="logo">
                                                <img src="<?= ROOT ?>/assets/images/Logo.png" alt="logo">
                                                <div class="details">
                                                <div class="name">Punchi Theatre</div>
                                                <div class="address">Borella, Sri Lanka</div>
                                                <div class="number">+94 115 927 927</div>
                                                <div class="email"> punchitheatre@gmail.com </div>
                                                </div>
                                            </div>
                                            <!-- logo ended -->
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="invoice-number-inner">
                                            <!-- <h2 class="name">Invoice : <span>#<?= $data->reqid ?></span></h2> -->
                                            <h2 class="name">Invoice : #<span id="reqid"> <?php echo $data['detailsofReq'][0]->id; ?> </span></h2>

                                            <!-- <p class="mb-0">Invoice Date: <span>21 Sep 2021</span></p> -->
                                            <p class="mb-0">Invoice Date: <span><?php echo date('d M Y'); ?></span></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-top">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 mb-30">
                                        <div class="invoice-number">
                                            <h4 class="inv-title-1">Invoice To</h4>
                                            <h2 class="name mb-10" id="reservaname"><?php echo $data['detailsofReq'][0]->name; ?> </h2>
                                           
                                        </div>
                                    </div>
                                  
                                </div>


<div id="container">
<!-- <div id="heading">QR code Generator</div> -->
    <div id="qr-code">
        <div id="fake-qr"></div>
    </div>
    <!-- <input type="hidden" id="text-input" placeholder="enter data" oninput="handleInput()" value="<?= $data[0]->id ?>" title=""> -->
    <input type="hidden" id="text-input" placeholder="enter data" oninput="handleInput()" value="<?= $data['detailsofReq'][0]->id; ?>" title="">

    <div id="loading-text"></div>
    <!-- <button id="generate-btn" onclick="generateQRCode()">Generate QR Code</button> -->
    <button id="download-btn" onclick="downloadQRCode()">Download QR Code</button>
</div>

                            </div>

  

                            <div class="invoice-center">
                                <div class="order-summary">
                                    <div class="table-outer">
                                        <table class="default-table invoice-table">
                                            <thead>
                                            <tr>
                                                <th>Description</th>
                                                <th>Total</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                <td>Hall Name</td>
                                                <td id="hallprice"> <?php echo $data['detailsofReq'][0]->hallno; ?> </td>

                                                </tr>
                                            <tr>
                                                <td>Standings</td>
                                                <td><?php echo $data['detailsofReq'][0]->standings ;?></td>
                                            </tr>
                                            <tr>
                                                <td>Paid Amount</td>
                                                <td id="amountforhall"> Rs. <?php echo $data['detailsofReq'][0]->amount; ?> </td>
                                            </tr>
                                            <tr>
                                                <td>Refund Amount</td>
                                                <td id="amount">Rs.  <?php echo $data['detailsofReq']['0']->refundedAmount; ?> </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-bottom">
                                <div class="row">
                                    <div class="col-lg-6 col-md-7 col-sm-7">
                                        <div class="terms-conditions mb-30">
                                            <h3 class="inv-title-1 mb-10">Terms & Conditions</h3>
                                               <p> Cancellation within 6 hours there will be 100% refund
                                                <br>
                                                Cancellation afterward will anly allow 50% discount.
                                                </p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="invoice-btn-section clearfix d-print-none">
                        <a href="javascript:window.print()" class="btn btn-lg btn-print">
                            <i class="fa fa-print"></i> Print Invoice
                        </a>
                        <a href="<?= ROOT?>/home" id="invoice_download_btn" class="btn btn-lg btn-download btn-theme">
                            <i class="fa fa-download"></i> Back to Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add this img tag to display the QR code -->
<!-- <img id="generated-qr" src="" alt="Generated QR Code" style="display: block;"> -->


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
        // var downloadBtn = document.getElementById('download-btn');
        var loadingText = document.getElementById('loading-text');

        // loadingText.innerHTML = 'Generating QR Code...';
        loadingText.innerText = ''; 
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
            // downloadBtn.disabled = false;

            setTimeout(function () {
                loadingText.innerText = '';
            }, 500);
        } else {
            qrContainer.style.display = 'none';
            generateRandomQRCode();
            // downloadBtn.disabled = true;
            loadingText.innerText = '';
        }
    }

    function downloadQRCode() {
        if (qrcode) {
            var canvas = qrcode._el.querySelector('canvas');
            var dataURL = canvas.toDataURL('image/png');
            var qrImage = document.getElementById('generated-qr');
        // qrImage.src = dataURL;
        // qrImage.style.display = 'block';
            var link = document.createElement('a');
            link.href = dataURL;
            link.download = 'qrcode.png';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);

            // window.location.href = 'https://example.com'; // Change this URL to the desired page
            // window.location.href = "<?php echo ROOT ?>/reservasentreq";

        }
    }

    function generateRandomQRCode() {
        console.log('Generating random QR code...');
        var fakeQR = document.getElementById('fake-qr');
        fakeQR.style.backgroundImage = "url('placeholder-qr.png')";
    }

</script>

</body>
</html>
