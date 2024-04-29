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


    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="<?=ROOT?>/assets/css/style.css">

</head>
<body>

<!-- Invoice 5 start -->
<div class="invoice-5 invoice-content">
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
                                            <!-- <h2 class="name">Invoice : <span>#<?= $data[0]->id ?></span></h2> -->
                                            <h2 class="name">Invoice : #<span id="reqid"> </span></h2>

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
                                            <h2 class="name mb-10" id="reservaname"> </h2>
                                            <!-- <p class="invo-addr-1 mb-0">
                                                Theme Vessel <br/>
                                                info@themevessel.com <br/>
                                                21-12 Green Street, Meherpur<br/>
                                            </p> -->
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-4 col-sm-6 mb-30">
                                        <div class="invoice-number">
                                            <div class="invoice-number-inner">
                                                <h4 class="inv-title-1">Invoice From</h4>
                                                <h2 class="name mb-10">Punchi Theatre</h2>
                                                <p class="invo-addr-1 mb-0">
                                                    punchitheatre@gmail.com <br/>
                                                    Borella, Sri Lanka <br/>
                                                </p>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-md-4 col-sm-6 mb-30 invoice-contact-us">
                                        <h4 class="inv-title-1">Get In Touch</h4>
                                        <h2 class="name mb-10">Contact Us</h2>
                                        <ul class="link">
                                            <li>
                                                <i class="fa fa-map-marker"></i> 169 Teroghoria, Bangladesh
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope"></i> <a href="mailto:sales@hotelempire.com">info@themevessel.com</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone"></i> <a href="tel:+55-417-634-7071">+00 123 647 840</a>
                                            </li>
                                        </ul>
                                    </div> -->
                                </div>


<div id="container">
<!-- <div id="heading">QR code Generator</div> -->
    <div id="qr-code">
        <div id="fake-qr"></div>
    </div>
    <!-- <input type="hidden" id="text-input" placeholder="enter data" oninput="handleInput()" value="<?= $data[0]->id ?>" title=""> -->
    <input type="hidden" id="text-input" placeholder="enter data" oninput="handleInput()" value="" title="">

    <div id="loading-text"></div>
    <!-- <button id="generate-btn" onclick="generateQRCode()">Generate QR Code</button> -->
    <!-- <button id="download-btn" onclick="downloadQRCode()" disabled>Download QR Code</button> -->
</div>

                            </div>

  

                            <div class="invoice-center">
                                <div class="order-summary">
                                    <div class="table-outer">
                                        <table class="default-table invoice-table">
                                            <thead>
                                            <tr>
                                                <th>Description</th>
                                                <th>Price</th>
                                                <!-- <th>VAT (20%)</th> -->
                                                <th>Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td id="td1">Hall 01 for 2 hrs</td>
                                                <td id="hallprice"> $443.00 </td>
                                                <!-- <td>$921.80</td> -->
                                                <td id="amountforhall">$9243</td>
                                            </tr>
                                            <tr>
                                                <td>Sounds</td>
                                                <td id="soundsStatus"> </td>
                                                <!-- <td>$921.80</td> -->
                                                <td id="amounsounds">$9243</td>
                                            </tr>
                                            <tr>
                                                <td>Standings</td>
                                                <td id="standingsStatus">$443.00 </td>
                                                <!-- <td>$921.80</td> -->
                                                <td id="amountstandings">$9243</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Total Due</strong></td>
                                                <td></td>
                                                <!-- <td></td> -->
                                                <td><strong id="amount">$9,750</strong></td>
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
                                    <!-- <div class="col-lg-6 col-md-5 col-sm-5">
                                        <div class="payment-method mb-30">
                                            <h3 class="inv-title-1 mb-10">Payment Method</h3>
                                            <ul class="payment-method-list-1 text-14">
                                                <li><strong>Account No:</strong> 00 123 647 840</li>
                                                <li><strong>Account Name:</strong> Jhon Doe</li>
                                                <li><strong>Branch Name:</strong> xyz</li>
                                            </ul>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="invoice-btn-section clearfix d-print-none">
                        <a href="javascript:window.print()" class="btn btn-lg btn-print">
                            <i class="fa fa-print"></i> Print Invoice
                        </a>
                        <a id="invoice_download_btn" class="btn btn-lg btn-download btn-theme">
                            <i class="fa fa-download"></i> Download Invoice
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


        console.log('Page loaded');
        // Retrieve the order_id from session storage
        var orderId = sessionStorage.getItem('order_id');
        console.log("Order ID:", orderId);
        const id=orderId;

        let reqArray = <?php echo json_encode($reservationrequests); ?>;
        let hallArray = <?php echo json_encode($hall); ?>;

        console.log(reqArray);
        let req = reqArray.find(req => req.id == id);
        console.log("request -------",req);
        let hall = hallArray.find(hall => hall.hallno == req.hallno);
        console.log("hal ------",hall);

        console.log(document.getElementById("amount").innerText);
        console.log(req['amount']);
        
        document.getElementById("reqid").innerText=req['id'];
        document.getElementById("text-input").value=req['id'];
        document.getElementById("reservaname").innerText=req['name'];
        document.getElementById("td1").innerText=hall['hallno'] +" for "+ req['hours']+ " hours";
        document.getElementById("hallprice").innerText="Rs. "+ hall['amountOneHour']+"/1hr";
        document.getElementById("amountforhall").innerText="Rs. "+ hall['amountOneHour']*req['hours'];
        document.getElementById("soundsStatus").innerText=req['sounds'];
        document.getElementById("amounsounds").innerText="Rs. "+ hall['amountSounds'];
        document.getElementById("standingsStatus").innerText=req['standings'];
        document.getElementById("amountstandings").innerText="Rs. "+ hall['amountStandings'];
        document.getElementById("amount").innerText="Rs. "+req['amount'];


        // sessionStorage.removeItem('order_id');
        console.log("Order ID:", id);

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
            window.location.href = "<?php echo ROOT ?>/reservasentreq";

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
