<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>payment GateWay</title>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>


<body>
    <!-- <div class="body">
        <div>
            <button onclick="paymentGateWay();">Pay Here</button>
        </div>
    </div> -->

    <script src="<?=ROOT?>/assets/js/ticket_booking/payment.js"></script>
    <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>

    <form action="<?=ROOT?>/pay2" method="POST">
        <input type="text" name="price" value="1023">
        <button onclick="paymentGateWay();"  class="registerbtn">Go to Payment</button>
    </form>
</body>


</html>