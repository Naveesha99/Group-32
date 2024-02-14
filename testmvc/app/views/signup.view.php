<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?=ROOT?>/assets/css/signup.css" rel="stylesheet">

	<title>signup</title>
</head>
<body>
	<section class="signup">
		<div class="signup_box">
			<div class="left">
				<!-- <div class="top_link"><a href="#"><img src="/public/styles/images/login.jpg" alt="">Return home</a></div> -->
				<div class="contact">
					<form method="POST">
						<h3 class="sign">SIGNUP</h3>
						<input type="text" name="fullname" placeholder="FULL NAME">
						<input type="text" name="username" placeholder="USERNAME">
						<input type="email" name="email" placeholder="EMAIL">
						<input type="text" name="nic" placeholder="NIC">
						<!-- <input type="date" name="dob" placeholder="DATE OF BIRTH"> -->
						<input type="password" name="password" placeholder="PASSWORD">
						<input type="password" name="Repassword" placeholder="Re-Enter PASSWORD">

						<button class="submit">SIGNUP</button>
                        <h3 class="heading">Already have an account? <a href="<?=ROOT?>/login">Login</a>
                        
					</form><br>
				</div>
			</div>
			<div class="right">
				<div class="right-text">
				</div>
				<!-- <div class="right-inductor"><img src="/public/styles/images/login.jpg" ></div> -->
			</div>
		</div>
	</section>
</body>
</html>

