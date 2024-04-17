<!DOCTYPE html>
<html lang="en">

<head>
    <title>Manager</title>
    <!-- Link Styles -->
    <!-- <link rel="stylesheet" href="<?= ROOT ?>/assets/css/style-bar.css"> -->
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/contactUs.css">
    <script src="<?= ROOT ?>/assets/js/reservaRating.js" defer></script>


</head>

<body>
    <?php if (isset($_SESSION['USER'])) {
        require_once 'reservaNavBarAfter.php';
    } else {
        require_once 'reservaNavBar.php';
    } ?>

    <section id="main" class="main">

        <ul class="breadcrumb">
            <!-- <li>
                <a href="#">Home</a>
            </li> -->
            <!-- <i class='bx bx-chevron-right'></i> -->
            <li>
                <a href="#" class="active">Contact Us</a>
            </li>

        </ul>

        <!-- <form>
            <div class="form">
                <form>
                    <div class="form-input">
                        <input type="search" placeholder="Search...">
                        <button type="submit" class="search-btn">
                            <i class='bx bx-search'></i>
                        </button>
                    </div>
                </form>
            </div>

        </form> -->


<div class="container">
    <div class="row">
        <div class="in1">
            <div class="in1-1">
                <iframe class="ifrm" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158859.26218817523!2d-0.241700207447217!3d51.5285582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604ce34de7b6b%3A0x69fb038c7e1dd379!2sBuckingham%20Palace!5e0!3m2!1sen!2suk!4v1621884426374!5m2!1sen!2suk" frameborder="0" loading="lazy"></iframe>
                
                <h5>address</h5>
                <a href="https://maps.app.goo.gl/RR8WZsmy6KSSAWtg8" target="_blank" >
                
                <img src="<?= ROOT ?>/assets/images/locationicon.png" alt="header" />
                 No 23 Punchi Theatre Boralla, Colombo 08
                </a>

                <h5 class="m1">Call us</h5>
                <a href="tel: +94716958085" >
                <img src="<?= ROOT ?>/assets/images/phoneicon.png" alt="header" />
                0716958085
                </a>


                <h5 class="m1">Email</h5>
                <a href="mailto: dillenora@gmail.com" >
                <img src="<?= ROOT ?>/assets/images/emailicon.png" alt="header" />
                dillenora@gmail.com
                </a>


                <h5 class="m1">Follow us</h5>
                <a href="#" >
                <img class="me-1" src="<?= ROOT ?>/assets/images/fbicon.png" alt="header" />
                </a>


            </div>


            <div class="in1_2">
                <div class="in1-2_1">
                    <form method="POST" class="add-facility" onsubmit="return validateForm()" name="contactusform">
                        <h2>Send a message</h2>
                        <div class="form-f">
                            <label for="name" style="font-weight: 500;">Name</label>
                            <input type="text"  name="name" id="name">
                        </div>

                        <div class="form-f">

                            <label class="form-label" >Email</label>
                            <input type="email" id="email" name="email">
                        </div>

                        <div class="form-f">

                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <input type="text" id="subject" name="subject">
                        </div>

                        <div class="form-f">
                            <label class="form-label" style="font-weight: 500;">Message</label>
                            <textarea rows="14" id="messsage" name="message"></textarea>
                        </div>

                        <button class="formbtn" type="submit" name="submit_contactus">SEND</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once 'reservaFooter1.php' ?>


</body>

<script>
function validateForm() {
    var nameField = document.forms["contactusform"]["name"].value;
    var emailField = document.forms["contactusform"]["email"].value;
    var subjectField = document.forms["contactusform"]["subject"].value;
    var messageField = document.forms["contactusform"]["message"].value;
    
    if (nameField.trim() === "") {
        alert("Facility Name must be filled out");
        return false;
    }
    
    if (emailField.trim() === "") {
        alert("Icon must be selected");
        return false;
    }
    if (subjectField.trim() === "") {
        alert("Icon must be selected");
        return false;
    }
    if (messageField.trim() === "") {
        alert("Icon must be selected");
        return false;
    }
}
</script>


</html>