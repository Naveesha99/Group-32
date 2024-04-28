<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<!-- <link rel="stylesheet" href="style.css"> -->
	<link href="<?= ROOT ?>/assets/css/loginnew.css" rel="stylesheet">

	<title>
		Animated login signup
	</title>
</head>

<style>
	form{
		width: 100%;
	}
</style>

<body>
	<div id="container" class="container">
		<!-- FORM SECTION -->
		<div class="row">
			<!-- SIGN UP -->
			<form method="POST" onsubmit="return validateForm()" class="col align-items-center flex-col sign-up">
				<div class="form-wrapper align-items-center">
					<div class="form sign-up">
                            <!-- <input type="hidden" value="reservationist" name="empRoll" id="empRoll"> -->


						<div class="input-group">
							<i class='bx bxs-user'></i>
                            <input type="text" placeholder="FULLNAME" name = "fullname" id="fullname" class="fullname"  required>
						</div>
						<div class="input-group">
							<i class='bx bx-mail-send'></i>
                            <input type="text" placeholder="USERNAME" name = "username" id="username" class="username"  required>
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
                            <input type="email" placeholder="EMAIL" name = "email" id="email" class="email" required>
						</div>
                        <div class="input-group">
							<i class='bx bxs-lock-alt'></i>
                            <input type="tel" placeholder="CONTACTNUMBER" name = "contactNumber" id="contactNumber" class="contactNumber" required pattern="[0-9]{10}">
						</div>
                        <div class="input-group">
							<i class='bx bxs-lock-alt'></i>
                            <input type="text" placeholder="NIC" name = "nic" id="nic" class="nic" required>
						</div>

						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" placeholder="Confirm password">
						</div>
                        <div class="input-group">
							<i class='bx bxs-lock-alt'></i>
                            <input type="password" placeholder="CONFIRMPASSWORD" name = "confirmPassword" id="confirmPassword" required >
                            <div id="error-message" style="color: white;"></div>

						</div>
                        <button type="submit" class="opacity">Register</button>

						<!-- <button>
							Sign up
						</button> -->
						<p>
							<span>
								Already have an account?
							</span>
                            <a href="<?=ROOT?>/login">LOGIN</a>

							<!-- <b onclick="toggle()" class="pointer">
								Sign in here -->
							</b>
						</p>
					</div>
				</div>
				<div class="form-wrapper">
					<div class="social-list align-items-center sign-up">
						<div class="align-items-center facebook-bg">
							<i class='bx bxl-facebook'></i>
						</div>
						<div class="align-items-center google-bg">
							<i class='bx bxl-google'></i>
						</div>
						<div class="align-items-center twitter-bg">
							<i class='bx bxl-twitter'></i>
						</div>
						<div class="align-items-center insta-bg">
							<i class='bx bxl-instagram-alt'></i>
						</div>
					</div>
				</div>
			</div>
			<!-- END SIGN UP -->
			<!-- SIGN IN -->
			
			<div class="col align-items-center flex-col sign-in">
				<div class="form-wrapper align-items-center">
					<div class="form sign-in">
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" name="email" placeholder="E-Mail">
						<?php if (!empty($errors)) : ?>
							<span style="color: red; font-weight: bold; padding: 10px; margin-bottom: 10px;">
								<?= implode('<br>', $errors) ?>
							</span>
						<?php endif; ?>
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" name="password" placeholder="PASSWORD">
						<?php if (!empty($errors)) : ?>
							<span style="color: red; font-weight: bold; padding: 10px; margin-bottom: 10px;">
								<?= implode('<br>', $errors) ?>
							</span>
						<?php endif; ?>
						</div>
						<!-- <button>
							Sign in
						</button> -->
						<button class="submit">LOGIN</button>

						<p>
							<b>
								Forgot password?
							</b>
						</p>
						<p>
							<span>
								Don't have an account?
							</span>
							<!-- <b onclick="toggle()" class="pointer">
								Sign up here
							</b> -->
							<a href="<?= ROOT ?>/reservasignup">Sign up here</a>
						</p>
					</div>
				</div>
				<div class="form-wrapper">
					<div class="social-list align-items-center sign-in">
						<div class="align-items-center facebook-bg">
							<i class='bx bxl-facebook'></i>
						</div>
						<div class="align-items-center google-bg">
							<i class='bx bxl-google'></i>
						</div>
						<div class="align-items-center twitter-bg">
							<i class='bx bxl-twitter'></i>
						</div>
						<div class="align-items-center insta-bg">
							<i class='bx bxl-instagram-alt'></i>
						</div>
					</div>
				</div>
                        </div>
			<!-- END SIGN IN -->

			
		</div>
		<!-- END FORM SECTION -->
		<!-- CONTENT SECTION -->
		<div class="row content-row">
			<!-- SIGN IN CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="text sign-in">
					<h2>
						Welcome back
					</h2>
					<p>
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit obcaecati, accusantium
						molestias, laborum, aspernatur deserunt officia voluptatum tempora dicta quo ab ullam. Assumenda
						enim harum minima possimus dignissimos deserunt rem.
					</p>
				</div>
				<div class="img sign-in">
					<img src="<?= ROOT ?>/assets/images/undraw_different_love_a3rg.svg" alt="welcome">
				</div>
			</div>
			<!-- END SIGN IN CONTENT -->
			<!-- SIGN UP CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="img sign-up">
					<img src="<?= ROOT ?>/assets/images/undraw_different_love_a3rg.svg" alt="welcome">
				</div>
				<div class="text sign-up">
					<h2>
						Join with us
					</h2>
					<p>
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit obcaecati, accusantium
						molestias, laborum, aspernatur deserunt officia voluptatum tempora dicta quo ab ullam. Assumenda
						enim harum minima possimus dignissimos deserunt rem.
					</p>
				</div>
			</div>
			<!-- END SIGN UP CONTENT -->
		</div>
		<!-- END CONTENT SECTION -->
	</div>



<script>


function validateForm() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;

    if (password !== confirmPassword) {
        // Display an error message in your modal or any other element
        var errorMessage = document.getElementById("error-message");
        errorMessage.innerHTML = "Passwords do not match";

        // Prevent the form from being submitted
        return false;
    }

    // If passwords match, continue with the form submission
    // return true;
}


window.onload = function() {



let container = document.getElementById('container');

toggle = () => {
	container.classList.toggle('sign-up')
	container.classList.toggle('sign-in')
}

setTimeout(() => {
	// container.classList.add('sign-in')
}, 200)
}
</script>

</body>

</html>