<?php

$servername = "localhost";
$username = "u466486587_user_ip";
$password ="tapa7866@A";
$dbname = "u466486587_user_ip";

$ip = $_SERVER['REMOTE_ADDR']; //Get ip address
$device_id = $_SERVER['HTTP_USER_AGENT']; // Get device details

$database_conn =mysqli_connect($servername, $username, $password, $dbname);

$data = "INSERT INTO `user_ip` (`user_ip_add`, `device`) VALUES ('$ip', '$device_id');";
$data_submit = mysqli_query($database_conn, $data);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="./gravity_logo_bg_none.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/09cca66df7.js" crossorigin="anonymous"></script>
    <title>ᵀᵉᵃᵐ 𝙶𝚁𝙰𝚅𝙸𝚃𝚈</title>
    <style>
        @media only screen and (max-width: 1900px) and (min-width: 500px) {
            .bottom_mob {
                display: none;
            }

            #scroll-container {
                display: none;
            }
        }

        body {
            background-image: url(./gravity_logo.png);
            background-position: center 5%;
            background-repeat: no-repeat;
            background-color: #231F20;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            margin-left: 100px;
            margin-right: 100px;
            text-align: center;
            margin-top: 60vh;
            background-color: rgba(255, 255, 255, .45);
            border: 1px solid rgba(255, 255, 255, .25);
            box-shadow: 0 0 10px 1px rgba(0, 0, 0, .25);
            backdrop-filter: blur(15px);
            border-radius: 40px;
        }

        .timer {
            color: rgb(26, 26, 26);
            font-size: 45px;
            font-weight: 800;
        }

        .day {
            font-size: 23px;
            font-weight: 400;
        }

        .bottom_f {
            display: flex;
        }

        .social_icon,
        .made_by {
            width: 50%;
        }

        .social_icon .facebook {
            color: white;
        }

        .text_made {
            color: white;
        }

        .stay {
            text-align: center;
        }

        .stay1 {
            color: white;
            font-size: 20px;
            font-weight: 500;
        }

        .stay2 {
            margin-top: -10px;
            color: #FAD309;
            font-size: 30px;
            font-weight: 600;
        }

        .yellow {
            color: #FAD309;
        }

        .text_made {
            text-align: right;
        }

        .facebook {
            font-size: 22px;
            padding: 5px;
        }

        @media only screen and (max-width: 480px) {
            .container {
                margin-top: 40vh;
                margin-left: 2px;
                margin-right: 2px;
                
            }

            .day {
                font-size: 15px;
                font-weight: 500;
            }

            .t1 {
                font-size: 19px;
                font-weight: 600;
            }

            body {
                background-image: url(./gravity_logo.png);
                background-position: center 12%;
                background-size: contain;
                background-repeat: no-repeat;
                background-color: #231F20;
                font-family: 'Poppins', sans-serif;
            }

            .bottom_f {
                display: none;
            }

            .s_mob {
                text-align: center;
            }

            .s_mob a i {
                color: white;
                font-size: 26px;
                padding: 5px;
            }

            .made_by_mob {
                color: white;
            }

            .text_made_mob {
                text-align: center;
                padding-top: 70px;
            }

            p .yellow_mob {
                color: #FAD309;
            }
            #scroll-container {
                /*border: 3px solid black;*/
                /*border-radius: 5px;*/
                overflow: hidden;
            }

            #scroll-text {
                color : white;
                /* animation properties */
                -moz-transform: translateX(100%);
                -webkit-transform: translateX(100%);
                transform: translateX(100%);

                -moz-animation: my-animation 20s linear infinite;
                -webkit-animation: my-animation 20s linear infinite;
                animation: my-animation 20s linear infinite;
            }

            /* for Firefox */
            @-moz-keyframes my-animation {
                from {
                    -moz-transform: translateX(100%);
                }

                to {
                    -moz-transform: translateX(-100%);
                }
            }

            /* for Chrome */
            @-webkit-keyframes my-animation {
                from {
                    -webkit-transform: translateX(100%);
                }

                to {
                    -webkit-transform: translateX(-100%);
                }
            }

            @keyframes my-animation {
                from {
                    -moz-transform: translateX(100%);
                    -webkit-transform: translateX(100%);
                    transform: translateX(100%);
                }

                to {
                    -moz-transform: translateX(-100%);
                    -webkit-transform: translateX(-100%);
                    transform: translateX(-100%);
                }
            }
        }
    </style>
</head>

<body>
    <div id="scroll-container">
        <div id="scroll-text" class="slider_mob">
            <marquee scrollamount="4">Designing, creating, and maintaining websites, apps and software.</marquee>
        </div>
    </div>
    <!-- Timer of Opening -->
    <div class="container">
        <span class="timer">
            <span class="t1" id="demo1"></span><span class="day"> Days</span>
            <span class="t1" id="demo2"></span><span class="day"> Hours</span>
            <span class="t1" id="demo3"></span><span class="day"> Minutes</span>
            <span class="t1" id="demo4"></span><span class="day"> Seconds</span>
        </span>
    </div>
    <div class="stay">
        <p class="stay1">S t a y T u n e d</p>
        <p class="stay2">We Will Launch Soon</p>
    </div>
    <footer class="bottom_f">
        <div class="social_icon">
            <p>
                <a href="https://www.facebook.com/profile.php?id=100090000143646&mibextid=ZbWKwL" target="_blank"
                    class="facebook"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/teamgravity07/" target="_blank" class="facebook"><i
                        class="fa-brands fa-instagram"></i></a>
                <!--<a href="https://www.linkedin.com/in/team-gravity/" target="_blank" class="facebook"><i class="fa-brands fa-linkedin"></i></a>-->
            </p>
        </div>
        <div class="made_by">
            <p class="text_made">Made with <span><i class="fa-solid fa-heart yellow"></i></span> by ᵀᵉᵃᵐ 𝙶𝚁𝙰𝚅𝙸𝚃𝚈
            </p>
        </div>
    </footer>

    <footer class="bottom_mob">
        <div class="privacy-policy">
            <a href="./privacy-policy.html" target="_blank" class="policy">Privacy Policy</a>
        </div>
        <div class="social_icon_mob">
            <p class="s_mob">
                <a href="https://www.facebook.com/profile.php?id=100090000143646&mibextid=ZbWKwL" target="_blank"
                    class="facebook_mob"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/teamgravity07/" target="_blank" class="facebook_mob"><i
                        class="fa-brands fa-instagram"></i></a>
                <!--<a href="#" class="facebook_mob"><i class="fa-brands fa-linkedin"></i></a>-->
            </p>
        </div>
        <div class="made_by_mob">
            <p class="text_made_mob">Made with <span><i class="fa-solid fa-heart yellow_mob"></i></span> by ᵀᵉᵃᵐ
                𝙶𝚁𝙰𝚅𝙸𝚃𝚈</p>
        </div>
    </footer>


</body>

</html>

<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Mar 2, 2023 15:37:25").getTime();

    // Update the count down every 1 second
    var x = setInterval(function () {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("demo1").innerHTML = days;
        document.getElementById("demo2").innerHTML = hours;
        document.getElementById("demo3").innerHTML = minutes;
        document.getElementById("demo4").innerHTML = seconds;

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);


    // Right Click Disable
    document.addEventListener('contextmenu', event => event.preventDefault());
    function disableselect(e) {
        return false;
    }

    function reEnable() {
        return true;
    }

    document.onselectstart = new Function("return false");

    if (window.sidebar) {
        document.onmousedown = disableselect;
        document.onclick = reEnable;
    }
</script>