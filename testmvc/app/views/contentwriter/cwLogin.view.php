<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="<?= ROOT ?>/assets/css/reservaHall.css" rel="stylesheet"> -->

    <title>Admin Panel</title>

    <style>
        /* :root {
    --background: #1a1a2e;
    --color: #ffffff;
    --primary-color: #0f3460;
} */

        :root {
            --background: #461220;
            --color: #FFFFFF;
            --primaryColor: #E94560;
            /* background: var(--background) url(/public/assets/images/tbg.jpg) center/cover no-repeat; Replace 'path/to/your/image.jpg' with the actual path to your image */

        }

        ::placeholder {
            color: #FFFFFF;
            opacity: 0.4;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            box-sizing: border-box;
            font-family: "poppins";
            /* background: var(--background); */
            background: url(../public/assets/images/tbg2.jpg) center/cover no-repeat;
            /* Replace 'path/to/your/image.jpg' with the actual path to your image */
            /* background: url(../public/assets/images/background.jpg); */
            /* color: var(--color); */
            letter-spacing: 1px;
            transition: background 0.2s ease;
            -webkit-transition: background 0.2s ease;
            -moz-transition: background 0.2s ease;
            -ms-transition: background 0.2s ease;
            -o-transition: background 0.2s ease;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            /* Adjust the alpha value for the desired transparency */
            z-index: 1;
            /* Place the overlay above the background image */
            backdrop-filter: blur(4px);
            /* Adjust the blur radius as needed */

        }

        a {
            text-decoration: none;
            color: var(--color);
        }

        h1 {
            font-size: 2.5rem;
            color: #FFFFFF;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            position: relative;
            width: 22.2rem;
            z-index: 2;
        }

        .form-container {
            border: 1px solid hsla(0, 0%, 65%, 0.158);
            /* border: 1px solid hsla(0, 0%, 65%, 0.3); */
            /* box-shadow: 0 0 36px 1px rgba(0, 0, 0, 0.2); */
            box-shadow: 0 0 36px 1px rgba(0, 0, 0, 0.2);

            border-radius: 10px;
            backdrop-filter: blur(20px);
            z-index: 99;
            padding: 2rem;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            -ms-border-radius: 10px;
            -o-border-radius: 10px;
        }

        .login-container form input {
            display: block;
            padding: 14.5px;
            width: 100%;
            margin: 2rem 0;
            color: var(--color);
            /* color: #461220; */
            outline: none;
            background-color: #9191911f;
            border: none;
            border-radius: 5px;
            font-weight: 500;
            letter-spacing: 0.8px;
            font-size: 10px;
            backdrop-filter: blur(15px);
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            -o-border-radius: 5px;
        }

        .login-container form input:focus {
            box-shadow: 0 0 16px 1px rgba(0, 0, 0, 0.2);
            animation: wobble 0.3s ease-in;
            -webkit-animation: wobble 0.3s ease-in;
        }

        .login-container form button {
            background-color: var(--primary-color);
            color: var(--color);
            display: block;
            padding: 9px;
            outline: none;
            font-size: 18px;
            letter-spacing: 1.5px;
            font-weight: bold;
            width: 100%;
            cursor: pointer;
            margin-bottom: 1rem;
            transition: all 0.1s ease-in-out;
            border: none;
            border: 2px solid hsla(0, 0%, 65%, 0.5);
            border-radius: 8px;
            -webkit-transition: all 0.1s ease-in-out;
            -moz-transition: all 0.1s ease-in-out;
            -ms-transition: all 0.1s ease-in-out;
            -o-transition: all 0.1s ease-in-out;
            /* border-radius: 8px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
    -webkit-transition: all 0.1s ease-in-out;
    -moz-transition: all 0.1s ease-in-out;
    -ms-transition: all 0.1s ease-in-out;
    -o-transition: all 0.1s ease-in-out; */
        }

        .login-container form button:hover {
            box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.15);
            transform: scale(1.02);
            -webkit-transform: scale(1.02);
            -moz-transform: scale(1.02);
            -ms-transform: scale(1.02);
            -o-transform: scale(1.02);
        }

        .circle {
            width: 8rem;
            height: 8rem;
            background: var(--primary-color);
            border-radius: 50%;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            -o-border-radius: 50%;
            position: absolute;
        }

        .illustration {
            position: absolute;
            top: -14%;
            /* right: -2px; */
            right: -100px;
            width: 90%;
        }

        .circle-one {
            top: 0;
            left: 0;
            z-index: -1;
            transform: translate(-45%, -45%);
            -webkit-transform: translate(-45%, -45%);
            -moz-transform: translate(-45%, -45%);
            -ms-transform: translate(-45%, -45%);
            -o-transform: translate(-45%, -45%);
        }

        .circle-two {
            bottom: 0;
            right: 0;
            z-index: -1;
            transform: translate(45%, 45%);
            -webkit-transform: translate(45%, 45%);
            -moz-transform: translate(45%, 45%);
            -ms-transform: translate(45%, 45%);
            -o-transform: translate(45%, 45%);
        }

        .register-forget {
            margin: 1rem 0;
            display: flex;
            justify-content: space-between;
        }

        .opacity {
            opacity: 0.6;
        }

        .theme-btn-container {
            position: absolute;
            left: 0;
            bottom: 2rem;
        }

        .theme-btn {
            cursor: pointer;
            transition: all 0.3s ease-in;
        }

        .theme-btn:hover {
            width: 40px !important;
        }

        @keyframes wobble {
            0% {
                transform: scale(1.025);
                -webkit-transform: scale(1.025);
                -moz-transform: scale(1.025);
                -ms-transform: scale(1.025);
                -o-transform: scale(1.025);
            }

            25% {
                transform: scale(1);
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                -o-transform: scale(1);
            }

            75% {
                transform: scale(1.025);
                -webkit-transform: scale(1.025);
                -moz-transform: scale(1.025);
                -ms-transform: scale(1.025);
                -o-transform: scale(1.025);
            }

            100% {
                transform: scale(1);
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                -o-transform: scale(1);
            }
        }
    </style>


</head>

<body>
    <section class="container">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">
                <!-- <img src="https://raw.githubusercontent.com/hicodersofficial/glassmorphism-login-form/master/assets/illustration.png" alt="illustration" class="illustration" /> -->
                <img src="<?= ROOT ?>/assets/images/mask.png" alt="illustration" class="illustration" />
                <h1 class="opacity">LOGIN</h1>

                <form method="POST" >
                    <input type="text" name="username" id="username" placeholder="USERNAME" />
                    <input type="password" name="password" placeholder="PASSWORD" />
                    <button class="opacity" id="opacitybtn1" type="submit">LOGIN</button>
                </form>

                <!-- <div class="register-forget opacity">
                    <a href="">SIGNUP</a>
                    <a href="<?= ROOT ?>/reservasignup">SIGNUP</a>
                    <a href="">FORGOT PASSWORD</a>
                </div> -->

            </div>
            <div class="circle circle-two"></div>
        </div>
        <div class="theme-btn-container"></div>
    </section>

    <!-- <script>
        function loginButtonClick(event) {
            // Prevent the default form submission
            event.preventDefault();

            // Get the value from the input field with id 'username'
            const usernameValue = document.getElementById('username').value;

            // Redirect to the page with the username as a query parameter
            window.location.href = `cwDashboard?loggedin=true`;
        }
    </script> -->
</body>

</body>



</html>