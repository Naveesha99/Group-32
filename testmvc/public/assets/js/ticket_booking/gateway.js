// __________________PAYMENTGETWAY____________________________

function pay2(id)
{
  var x = new XMLHttpRequest();
  x.onreadystatechange = function(){
      if(x.readyState == 4)
      {
          // alert(x.responseText);
          var text = x.responseText;
        if(text == "2")
        {
          alert("Invalid booking");
        }
        else if(text == "3")
        {
          window.location = "<?=ROOT?>/ticket_booking/seat_map";
        }
        else
        {
          alert(text);
          var j = JSON.parse(text);
        
          payhere.onCompleted = function onCompleted(orderId) 
          {
            alert("Payment completed");
         // Note: validate the payment and show success or failure page to the customer
          };

            // Payment window closed
            payhere.onDismissed = function onDismissed() 
            {
                // Note: Prompt user to pay again or show an error page
                alert("Payment dismissed");
            };

            // Error occurred
            payhere.onError = function onError(error) 
            {
                // Note: show an error page
                alert("Error:");
            };

            // Put the payment variables here
  var payment = {
      "sandbox": true,
      "merchant_id": "1225768",    // Replace your Merchant ID
      "return_url": "http://localhost/testmvc/public/payment",     // Important
      "cancel_url": "http://localhost/testmvc/public/payment",     // Important
      "notify_url": "http://sample.com/notify",
      "order_id":"ItemNo12345",
      "items": "ITEM",
      "amount": j.amount,
      "currency":j.currency,
      "hash": j.hash, // *Replace with generated hash retrieved from backend
      "first_name": j.name,
      "last_name": "lastname",
      "email": j.email,
      "phone": j.phone,
      "address": "No.1, Galle Road",
      "city": "Colombo",
      "country": "Sri Lanka",
      "delivery_address": "No. 46, Galle road, Kalutara South",
      "delivery_city": "Kalutara",
      "delivery_country": "Sri Lanka",
      "custom_1": "",
      "custom_2": ""
  };

 
    payhere.startPayment(payment);
  }
}
  
  };
  x.open("GET","pay2?id=" + id, true);
  x.send();
}
// _________________________________________________________________
