<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/ICCSN.ico" type="image/ico" sizes="16x16">
    <title>HASIL KALKULATORQUE</title>
    <footer>
        Result :
    </footer>
    <style>
        body {
            /* background-color: black; */
            background-image: url(img/devochka.jpg);
            opacity: 0.96;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            border: 10px solid #f00;
            border-style: dashed;
            margin-top: 250px;
            font-size: 200px;
            text-align: center;
            font-family: Impact, Haettenschweiler, sans-serif;
            animation: drop 4.0s ease;
            color: yellow;
            cursor: pointer;

        }

        body:hover {
            color: green;
            animation: shake 3.5s;
            animation-iteration-count: infinite;
        }

        @keyframes shake {
            0% {
                transform: translate(1px, 1px) rotate(0deg);
            }

            10% {
                transform: translate(-1px, -2px) rotate(-1deg);
            }

            20% {
                transform: translate(-3px, 0px) rotate(1deg);
            }

            30% {
                transform: translate(3px, 2px) rotate(0deg);
            }

            40% {
                transform: translate(1px, -1px) rotate(1deg);
            }

            50% {
                transform: translate(-1px, 2px) rotate(-1deg);
            }

            60% {
                transform: translate(-3px, 1px) rotate(0deg);
            }

            70% {
                transform: translate(3px, 1px) rotate(-1deg);
            }

            80% {
                transform: translate(-1px, -1px) rotate(1deg);
            }

            90% {
                transform: translate(1px, 2px) rotate(0deg);
            }

            100% {
                transform: translate(1px, -2px) rotate(-1deg);
            }
        }





        @keyframes drop {
            0% {
                opacity: 0;
                transform: translateY(-80px);
            }

            100% {
                opacity: 1;
                transform: translateY(0px);
            }



            body {
                background-image: url();
                background-size: cover;
                margin: 0px;
                font-size: 5px;
                text-align: center;
                font-family: Impact, Haettenschweiler, sans-serif;

                color: white;
                opacity: .75;
            }

        }

        footer {
            width: 100%;
            background-color: #000000;
            color: #f2f2f2;
            height: 8vh;
            text-align: center;
            padding-top: 5vh;
            font-size: 20px;
            border-radius: 5px;
        }
    </style>

</head>

<body>


    <!--======== HITUNG ============ */-->
    <?php

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

    if ($op == "+") {
        echo $num1 + $num2;
    } elseif ($op == "-") {
        echo $num1 - $num2;
    } elseif ($op == "*") {
        echo $num1 * $num2;
    } elseif ($op == "/") {
        echo $num1 / $num2;
    } else {
        echo "Invalid Operator";
    }

    ?>


    <footer>
        Copyright © 2023 H3K3R54N!
    </footer>
</body>

</html>