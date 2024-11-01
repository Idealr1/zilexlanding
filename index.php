<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Your page description here">
    <meta name="author" content="Your Name or Company">
    <title>Zilex</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS (latest version) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-pzjw8f+ua7Kw1TIqKw1g6m8gBtZBeF1tbU2o5sRQDJW5nfezVYxM8TkRoxCMwQ6N" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Barlow', sans-serif;
            padding: 0;
            margin: 0;
        }

        .first_commingsoon {
            background-image: url('background.png');
            display: flex;
            flex-direction: column;
            align-items: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100vw;
            margin: 0;
            padding: 0;
            min-height: 100vh 
        }

        .textet {
            height: 240px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
                justify-content: flex-end;
        }

        .textet h1 {
            font-size: 48px;
            color: #fff;
            font-weight: 400;
            line-height: 1;
        }

        .textet p {
            font-size: 36px;
            color: #fff;
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }

        .countdown {
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            gap: 20px;

        }

        .countdown .time-box {
            width: 200px;
            height: 200px;
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            border: 4px solid #23A08C !important;

        }

        .countdown .time-box h2 {
            font-size: 48px;
            margin: 0;
            color: #23A08C;
        }

        .countdown .time-box p {
            margin: 0;
            font-size: 18px;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .logo {
                margin-top: 235px;
            }
            .textet{
                justify-content: center !important;

            }
            .textet h1 {
                font-size: 25px;
            }

            .textet p {
                font-size: 24px;
            }
            .img-fluid{
                height: 300px !important;
            }
            .countdown {
                top:60% !important;
                gap: 10px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .countdown .time-box {
                width: 100px;
                height: 100px;
            }

            .countdown .time-box h2 {
                font-size: 32px;
            }

            .countdown .time-box p {
                font-size: 14px;
            }
        }

        .logos {
            display: flex;
            align-items: center;
            justify-content: center;
            padding-bottom: 100px;
        }
        .img-fluid{
            height: 600px;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const countdownDate = new Date("November 12, 2024 00:00:00").getTime();

            function updateCountdown() {
                const now = new Date().getTime();
                const timeRemaining = countdownDate - now;

                if (timeRemaining >= 0) {
                    const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

                    document.getElementById("days").innerText = days;
                    document.getElementById("hours").innerText = hours;
                    document.getElementById("minutes").innerText = minutes;
                    document.getElementById("seconds").innerText = seconds;
                }
            }

            setInterval(updateCountdown, 1000);
        });
    </script>
</head>

<body>

    <section class="first_commingsoon">
        <div class="container">
            <div class="row textet">
                <div class="col-12">
                    <h1>Get ready to redefine <br><span style="color: #23A08C;">Heat Exchanger Procurement</span></h1>
                    <p>Launch <span style="color: #23A08C;">12.11.2024</span></p>
                </div>
            </div>
            <div class="row position-relative">
                <div class="col-12">
                    <img src="heatexhanger.png" class="img-fluid" alt="Heat Exchanger">
                    <div class="countdown">
                        <div class="time-box">
                            <h2 id="days">0</h2>
                            <p>Days</p>
                        </div>
                        <div class="time-box">
                            <h2 id="hours">0</h2>
                            <p>Hours</p>
                        </div>
                        <div class="time-box">
                            <h2 id="minutes">0</h2>
                            <p>Minutes</p>
                        </div>
                        <div class="time-box">
                            <h2 id="seconds">0</h2>
                            <p>Seconds</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row logo mt-4">
                <div class="col-12 logos">
                    <img src="logos.png" alt="Logo">
                </div>
            </div>
        </div>
    </section>

</body>

</html>