<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGOxConnect</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('/PicturesForAll/childrensittingbrown.jpg') center/cover fixed;
            color: #fff;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 999;
        }

        header a {
            color: #3498db;
            text-decoration: none;
            margin: 0 10px;
        }

        header h1 {
            margin: 0;
            overflow: hidden;
            white-space: nowrap;
            animation: typing 4s steps(20, end), transitionX 4s linear 4s forwards;
        }

        section {
            padding: 20px;
            flex-grow: 1;
            text-align: center;
        }

        footer {
            background-color: rgba(51, 51, 51, 0.7);
            color: #fff;
            padding: 10px;
            text-align: center;
            align-self: flex-end;
            width: 100%;
            font-size: 0.8em;
        }

        nav {
            background-color: rgba(51, 51, 51, 0.8);
            padding: 10px 15px;
            position: sticky;
            top: 60px; /* Adjust to match header height */
            z-index: 998;
        }

        nav a {
            color: #5dade2;
            text-decoration: none;
            margin: 0 10px;
        }

        nav div {
            display: flex;
            justify-content: space-between;
        }

        sub-header {
            background-color: rgba(51, 51, 51, 0.9);
            padding: 10px 15px;
            position: sticky;
            top: 0;
            z-index: 999;
        }

        sub-header a {
            color: #5dade2;
            text-decoration: none;
            margin: 0 10px;
            float: right;
        }

        login-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }

        login-button a {
            display: block;
            background-color: #8e44ad;
            color: #fff;
            padding: 15px;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1em;
            text-align: center;
            text-decoration: none; /* Remove underlines from the button */
        }

        @keyframes typing {
            from {
                width: 0;
                opacity: 0;
            }
            to {
                width: 100%;
                opacity: 1;
            }
        }

        @keyframes transitionX {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>
<body onload="animateHeader()">

    <header>
        <h1 id="animateHeading"></h1>
    </header>

    <sub-header>
        <a href="aboutus.html" id="about">About Us</a>
        <a href="contactus.html" id="contact">Contact Us</a>
    </sub-header>

    <section>
        <!-- Your webpage content goes here -->
        <p>Welcome to NGOxConnect!</p>
    </section>

    <footer>
        <!-- Your footer content goes here -->
        <p>&copy; 2023 NGOxConnect. Made with Love</p>
    </footer>

    <login-button>
        <a href="loginpg.html">Login</a>
    </login-button>

    <script>
        function animateHeader() {
            const headingElement = document.getElementById('animateHeading');
            const text = "NGOxConnect";
            headingElement.textContent = "";

            function type(index) {
                headingElement.textContent = text.slice(0, index);

                if (index <= text.length) {
                    setTimeout(() => type(index + 1), 100);
                }
            }

            type(0);
        }
    </script>
</body>
</html>
