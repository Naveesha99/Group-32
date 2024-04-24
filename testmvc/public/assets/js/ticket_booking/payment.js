// __________________PAYMENTGETWAY____________________________
function pay2(id , table)
{

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = ()=>{
      if(xhttp.readyState == 4 && xhttp.status == 200)
      {
          // alert(xhttp.responseText);
          var obj = JSON.parse(xhttp.responseText);

          payhere.onCompleted = function onCompleted(orderId) 
          {
            var message = "Your payment is successful. Booking ID: " + orderId + ". Seat reservation information has been sent to you via email. If you have not received it, please let us know on 0112 222 222. Thank you for your reservation";
            showCustomAlert(message, orderId);
            
            var xhttp = new XMLHttpRequest();
            var url = "payment?orderId=" + orderId;
            xhttp.open("GET", url, true);
            xhttp.send();
            // alert("Payment completed. OrderID:" + orderId);
          };

            // Payment window closed
            payhere.onDismissed = function onDismissed() 
            {
                // Note: Prompt user to pay again or show an error page
                console.log("Payment dismissed");
            };

            // Error occurred
            payhere.onError = function onError(error) 
            {
                // Note: show an error page
                console.log("Error:"  + error);
            };

            // Put the payment variables here
  var payment = {
      "sandbox": true,
      "merchant_id": "1225768",    // Replace your Merchant ID
      "return_url": "http://localhost/Group-32/testmvc/public/payment",     // Important
      "cancel_url": "http://localhost/Group-32/testmvc/public/payment",     // Important
      "notify_url": "http://sample.com/notify",
      "order_id": obj["order_id"],
      "items": obj["item"],
      "amount": obj["amount"],
      "currency": obj["currency"],
      "hash": obj["hash"], // *Replace with generated hash retrieved from backend
      "first_name": obj["name"],
      "last_name": obj["last_name"],
      "email": obj["email"],
      "phone": obj["phone"],
      "address": "NOT NEED",
      "city": "NOT NEED",
      "country": "Sri Lanka",
      "delivery_address": "NOT NEED",
      "delivery_city": "NOT NEED",
      "delivery_country": "Sri Lanka",
      "custom_1": "",
      "custom_2": ""
  };

       payhere.startPayment(payment);
    }
  };
  xhttp.open("GET","pay2?id=" + id + "&table=" + table, true);
  xhttp.send();
}
