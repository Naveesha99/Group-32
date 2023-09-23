<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styles.css">
    <title>Signup</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">

        <?php 
         
         include("php/config.php");
         if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $contact = $_POST['contact'];
            $password = $_POST['password'];

         //verifying the unique email

         $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
         }
         else{

            mysqli_query($con,"INSERT INTO users(Username,Email,Contact,Password) VALUES('$username','$email','$contact','$password')") or die("Erroe Occured");

            echo "<div class='message'>
                      <p>Registration successfully!</p>
                  </div> <br>";
            echo "<a href='index.php'><button class='btn'>Login Now</button>";
         

         }

         }else{
         
        ?>

<header>ADMIN SIGNUP</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="username">User Name :</label>
                        <input type="text" name="username" id="username" required>
                    </div>
                    <div class="field input">
                        <label for="email">Email :</label>
                        <input type="text" name="email" id="email" required>
                    </div>
                    <div class="field input">
                        <label for="password">Password :</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div class="field input">
                        <label for="contact">Contact Number :</label>
                        <input type="text" name="contact" id="contact" >
                    </div>
                    <div class="field">
                        <input type="submit" class="btn" name="submit" value="SIGNUP" required>
                    </div>
                    <div class="links">
                        <div>Already have an account? <a href="index.php">Log In</a></div>
                        
                    </div>
                        <hr class="line">
                    <div class="links">
                        Signup with Google 
                        <button class="google-button">
                            <img src="google.png" alt="Google">
                            <span>Google</span>
                        </button>
                    </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>
