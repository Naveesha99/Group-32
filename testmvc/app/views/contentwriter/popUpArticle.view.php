<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article adding successfull</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/popUpArticle.css">
</head>
<body>
    <div class="container">
        <button type="submit" class="btn" onclick="openPopup()" >Submit</button>
        <div class="popup" id="popup">
            <img src="<?=ROOT?>/assets/images/tick.jpeg" alt="" srcset="">
            <h2>Thank You!</h2>
            <p>Your article has been successfully added!!</p>
            <button type="button" onclick="closePopup()">OK</button>
        </div>
    </div>

    <script>
        let popup=document.getElementById('popup');

        function openPopup(){
            popup.classList.add("open-popup");
        }

        function closePopup(){
            popup.classList.remove("open-popup");
            
        }
    </script>


    
</body>
</html>