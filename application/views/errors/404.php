<html>

<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.prinsh.com/NathanPrinsley-textstyle/nprinsh-stext.css" />

    <style>
        .aquarium {
            position: relative;
            overflow: hidden;
            background: white;
            width: 800px;
            height: 500px;
            margin: auto;
        }

        .aquarium *,
        .aquarium *::before,
        .aquarium *::after {
            position: absolute;
            content: '';
        }

        .aquarium__table {
            left: 230px;
            top: 381px;
            width: 341px;
            height: 6px;
            border-radius: 3px;
            background: black;
        }

        .aquarium__table:before {
            left: 105px;
            top: -15px;
            width: 131px;
            height: 19px;
            box-sizing: border-box;
            border-radius: 6px;
            border: 4px solid black;
            background: #00AAFF;
        }

        .aquarium__aquarium {
            left: 296px;
            top: 223px;
            width: 209px;
            height: 148px;
            box-sizing: border-box;
            border: 5px solid black;
            border-radius: 40px 40px 50px 50px / 74px 74px 74px 74px;
            box-shadow: inset -30px 0 0 0 rgba(54, 125, 231, 0.2);
            overflow: hidden;
            z-index: 1;
        }

        .aquarium__water {
            left: 0;
            top: 39px;
            width: 100%;
            height: 100%;
            opacity: .5;
            background: #5bb8ff;
            animation: sponge-water 2.5s linear infinite;
        }

        .aquarium__drops {
            top: 142px;
            left: 304px;
            width: 190px;
            height: 125px;
            overflow: hidden;
        }

        .aquarium__drop {
            top: 100px;
            left: 93px;
            width: 8px;
            height: 8px;
            border-radius: 100%;
            background: #80D5FF;
            animation: sponge-drop 2.5s linear infinite;
        }

        .aquarium__water-column {
            top: 122px;
            left: 70px;
            width: 60px;
            height: 130px;
            opacity: .5;
            background: #5bb8ff;
            animation: sponge-water-column 2.5s linear infinite;
        }

        .aquarium__bubble:nth-child(2) {
            left: 30px;
            top: 25px;
            width: 10px;
            height: 10px;
            background: white;
            border-radius: 100%;
            transform: scale(1);
            z-index: 2;
            animation: sponge-bubble-1 2.5s linear infinite;
        }

        .aquarium__bubble:nth-child(3) {
            left: 140px;
            top: 84px;
            width: 10px;
            height: 10px;
            background: white;
            border-radius: 100%;
            transform: scale(1);
            z-index: 2;
            animation: sponge-bubble-2 2.5s linear infinite;
        }

        .aquarium__bubble:nth-child(4) {
            left: 139px;
            top: 58px;
            width: 10px;
            height: 10px;
            background: white;
            border-radius: 100%;
            transform: scale(1);
            z-index: 2;
            animation: sponge-bubble-3 2.5s linear infinite;
        }

        .aquarium__bubble:nth-child(5) {
            left: 48px;
            top: 67px;
            width: 10px;
            height: 10px;
            background: white;
            border-radius: 100%;
            transform: scale(1);
            z-index: 2;
            animation: sponge-bubble-4 2.5s linear infinite;
        }

        .aquarium__bubble:nth-child(6) {
            left: 48px;
            top: 92px;
            width: 10px;
            height: 10px;
            background: white;
            border-radius: 100%;
            transform: scale(1);
            z-index: 2;
            animation: sponge-bubble-5 2.5s linear infinite;
        }

        .aquarium__bubble:nth-child(7) {
            left: 140px;
            top: 92px;
            width: 10px;
            height: 10px;
            background: white;
            border-radius: 100%;
            transform: scale(1);
            z-index: 2;
            animation: sponge-bubble-6 2.5s linear infinite;
        }

        .aquarium__bubble:nth-child(8) {
            left: 139px;
            top: 93px;
            width: 10px;
            height: 10px;
            background: white;
            border-radius: 100%;
            transform: scale(1);
            z-index: 2;
            animation: sponge-bubble-7 2.5s linear infinite;
        }

        .aquarium__bubble:nth-child(9) {
            left: 48px;
            top: 82px;
            width: 10px;
            height: 10px;
            background: white;
            border-radius: 100%;
            transform: scale(1);
            z-index: 2;
            animation: sponge-bubble-8 2.5s linear infinite;
        }

        .aquarium__splash:nth-child(3) {
            top: 84px;
            left: 30px;
            height: 8px;
            width: 4px;
            border-radius: 2px;
            opacity: .5;
            background: #5bb8ff;
            animation: sponge-splash-1 2.5s linear infinite;
        }

        .aquarium__splash:nth-child(3):before {
            top: 22px;
            left: -23px;
            height: 4px;
            width: 8px;
            border-radius: 2px;
            background: #5bb8ff;
        }

        .aquarium__splash:nth-child(3):after {
            top: 22px;
            left: 18px;
            height: 4px;
            width: 8px;
            border-radius: 2px;
            background: #5bb8ff;
        }

        .aquarium__splash:nth-child(4) {
            top: 84px;
            left: 155px;
            height: 8px;
            width: 4px;
            border-radius: 2px;
            opacity: .5;
            background: #5bb8ff;
            animation: sponge-splash-2 2.5s linear infinite;
        }

        .aquarium__splash:nth-child(4):before {
            top: 22px;
            left: -23px;
            height: 4px;
            width: 8px;
            border-radius: 2px;
            background: #5bb8ff;
        }

        .aquarium__splash:nth-child(4):after {
            top: 22px;
            left: 18px;
            height: 4px;
            width: 8px;
            border-radius: 2px;
            background: #5bb8ff;
        }

        .aquarium__sponge-box {
            width: 86px;
            height: 106px;
            left: 357px;
            top: 233px;
            animation: sponge-box 2.5s linear infinite;
        }

        .aquarium__body {
            width: 100%;
            height: 100%;
            box-sizing: border-box;
            box-shadow: inset 0 0 0 5px black, inset -10px 0 0 5px rgba(221, 165, 33, 0.47);
            border-radius: 13px;
            background: #FAEF37;
            overflow: hidden;
            animation: sponge-body 2.5s linear infinite;
        }

        .aquarium__body:before {
            top: 62px;
            left: 74px;
            width: 24px;
            height: 24px;
            box-sizing: border-box;
            background: white;
            border-radius: 100%;
            border: 5px solid black;
        }

        .aquarium__body:after {
            top: 93px;
            left: 14px;
            width: 24px;
            height: 24px;
            box-sizing: border-box;
            background: white;
            border-radius: 100%;
            border: 5px solid black;
        }

        .aquarium__body-hole {
            width: 22px;
            height: 22px;
            left: -3px;
            top: 67px;
            border-radius: 11px;
            background: rgba(0, 0, 0, 0.1);
        }

        .aquarium__body-hole:before {
            width: 15px;
            height: 15px;
            left: 70px;
            top: -46px;
            border-radius: 100%;
            background: rgba(0, 0, 0, 0.1);
        }

        .aquarium__body-hole:after {
            width: 10px;
            height: 10px;
            left: 57px;
            top: 17px;
            border-radius: 100%;
            background: rgba(0, 0, 0, 0.1);
        }

        .aquarium__body-stripe {
            width: 23px;
            height: 13px;
            left: 45px;
            top: 0;
            border-radius: 0 10px 0 0;
            border-top: 5px solid black;
            border-right: 5px solid black;
        }

        .aquarium__body-stripe:before {
            width: 5px;
            height: 10px;
            left: 23px;
            top: 9px;
            border-radius: 3px;
            background: black;
        }

        .aquarium__face {
            width: 46px;
            height: 56px;
            left: 20px;
            top: 42px;
        }

        .aquarium__face:before {
            width: 9px;
            height: 9px;
            border-radius: 100%;
            background: black;
            animation: sponge-eye 2.5s linear infinite;
        }

        .aquarium__face:after {
            left: 37px;
            top: 0px;
            width: 9px;
            height: 9px;
            border-radius: 100%;
            background: black;
            animation: sponge-eye 2.5s linear infinite;
        }

        .aquarium__mouth {
            left: 13px;
            top: 14px;
            width: 20px;
            height: 14px;
            box-sizing: border-box;
            border-radius: 4px 4px 14px 14px;
            border: 3px solid black;
            border-top-width: 6px;
            background: red;
            animation: sponge-mouth 2.5s linear infinite;
        }

        .aquarium__smile {
            left: 24px;
            top: 12px;
            animation: sponge-smile 2.5s linear infinite;
        }

        .aquarium__smile:before {
            left: -10px;
            width: 6px;
            height: 6px;
            border-radius: 0 0 0 6px;
            border-bottom: 3px solid black;
            border-left: 3px solid black;
            transform: rotate(-45deg);
        }

        .aquarium__smile:after {
            left: -2px;
            width: 6px;
            height: 6px;
            border-radius: 0 0 0 6px;
            border-bottom: 3px solid black;
            border-left: 3px solid black;
            transform: rotate(-45deg);
        }

        @keyframes sponge-splash-1 {
            0% {
                transform: scale(0) translateY(30px);
            }

            9.01% {
                transform: scale(0) translateY(30px);
            }

            16.84% {
                transform: scale(1) translateY(0);
            }

            16.9% {
                transform: scale(0) translateY(0);
            }

            72.64% {
                transform: scale(0) translateY(30px);
            }

            81.44% {
                transform: scale(1) translateY(0);
            }

            81.5% {
                transform: scale(0) translateY(0);
            }

            100% {
                transform: scale(0) translateY(30px);
            }
        }

        @keyframes sponge-splash-2 {
            0% {
                transform: scale(0) translateY(30px);
            }

            14.4% {
                transform: scale(0) translateY(30px);
            }

            20.64% {
                transform: scale(1) translateY(0);
            }

            20.7% {
                transform: scale(0) translateY(0);
            }

            77% {
                transform: scale(0) translateY(30px);
            }

            83.24% {
                transform: scale(1) translateY(0);
            }

            83.3% {
                transform: scale(0) translateY(30px);
            }

            100% {
                transform: scale(0) translateY(30px);
            }
        }

        @keyframes sponge-bubble-1 {
            0% {
                transform: scale(0) translate(0, 0);
            }

            45.9% {
                transform: scale(0) translate(8px, 16px);
            }

            46% {
                transform: scale(0.2) translate(8px, 16px);
            }

            50% {
                transform: scale(1) translate(17px, 33px);
            }

            50.1% {
                transform: scale(0) translate(17px, 33px);
            }

            100% {
                transform: scale(0) translate(0, 0);
            }
        }

        @keyframes sponge-bubble-2 {
            0% {
                transform: scale(0) translate(0, 0);
            }

            47.9% {
                transform: scale(0) translate(0, 0);
            }

            48% {
                transform: scale(0.2) translate(0, 0);
            }

            52% {
                transform: scale(1) translate(25px, -58px);
            }

            52.1% {
                transform: scale(0) translate(25px, -58px);
            }

            100% {
                transform: scale(0) translate(0, 0);
            }
        }

        @keyframes sponge-bubble-3 {
            0% {
                transform: scale(0) translate(0, 0);
            }

            50.9% {
                transform: scale(0) translate(0, 0);
            }

            51% {
                transform: scale(0.2) translate(0, 0);
            }

            55% {
                transform: scale(1) translate(18px, -34px);
            }

            55.1% {
                transform: scale(0) translate(18px, -34px);
            }

            100% {
                transform: scale(0) translate(0, 0);
            }
        }

        @keyframes sponge-bubble-4 {
            0% {
                transform: scale(0) translate(0, 0);
            }

            52.9% {
                transform: scale(0) translate(0, 0);
            }

            53% {
                transform: scale(0.2) translate(0, 0);
            }

            57% {
                transform: scale(1) translate(-10px, -42px);
            }

            57.1% {
                transform: scale(0) translate(-10px, -42px);
            }

            100% {
                transform: scale(0) translate(0, 0);
            }
        }

        @keyframes sponge-bubble-5 {
            0% {
                transform: scale(0) translate(0, 0);
            }

            54.9% {
                transform: scale(0) translate(0, 0);
            }

            55% {
                transform: scale(0.2) translate(0, 0);
            }

            60% {
                transform: scale(1) translate(-18px, -68px);
            }

            60.1% {
                transform: scale(0) translate(-18px, -68px);
            }

            100% {
                transform: scale(0) translate(0, 0);
            }
        }

        @keyframes sponge-bubble-6 {
            0% {
                transform: scale(0) translate(0, 0);
            }

            57.9% {
                transform: scale(0) translate(0, 0);
            }

            58% {
                transform: scale(0.2) translate(0, 0);
            }

            62% {
                transform: scale(1) translate(-2px, -68px);
            }

            62.1% {
                transform: scale(0) translate(-2px, -68px);
            }

            100% {
                transform: scale(0) translate(0, 0);
            }
        }

        @keyframes sponge-bubble-7 {
            0% {
                transform: scale(0) translate(0, 0);
            }

            60.9% {
                transform: scale(0) translate(0, 0);
            }

            61% {
                transform: scale(0.2) translate(0, 0);
            }

            65% {
                transform: scale(1) translate(20px, -68px);
            }

            65.1% {
                transform: scale(0) translate(20px, -68px);
            }

            100% {
                transform: scale(0) translate(0, 0);
            }
        }

        @keyframes sponge-bubble-8 {
            0% {
                transform: scale(0) translate(0, 0);
            }

            62.9% {
                transform: scale(0) translate(0, 0);
            }

            63% {
                transform: scale(0.2) translate(0, 0);
            }

            67% {
                transform: scale(1) translate(-8px, -56px);
            }

            67.9% {
                transform: scale(0) translate(-8px, -56px);
            }

            100% {
                transform: scale(0) translate(0, 0);
            }
        }

        @keyframes sponge-eye {
            9.36% {
                transform: scale(1);
            }

            9.37% {
                transform: scale(0);
            }

            14.0% {
                transform: scale(0);
            }

            14.01% {
                transform: scale(1);
            }
        }

        @keyframes sponge-mouth {
            0% {
                border-radius: 4px 4px 14px 14px;
                transform: scale(1);
                background: red;
            }

            9.36% {
                border-radius: 4px 4px 14px 14px;
                transform: scale(0);
                background: red;
            }

            28.08% {
                border-radius: 100%;
                transform: scale(0);
                background: black;
            }

            40.56% {
                border-radius: 100%;
                transform: scaleY(1.4);
                background: black;
            }

            42.12% {
                border-radius: 100%;
                transform: scaleY(1.4);
                background: black;
            }

            48.36% {
                border-radius: 100%;
                transform: scale(0);
                background: black;
            }

            76.4% {
                border-radius: 4px 4px 14px 14px;
                transform: scale(0);
                background: red;
            }

            76.44% {
                border-radius: 4px 4px 14px 14px;
                transform: scale(0.3);
                background: red;
            }

            93.6% {
                border-radius: 4px 4px 14px 14px;
                transform: scale(1);
                background: red;
            }

            100% {
                border-radius: 4px 4px 14px 14px;
                transform: scale(1);
                background: red;
            }
        }

        @keyframes sponge-smile {

            0%,
            48.2% {
                opacity: 0;
            }

            48.36%,
            76.44% {
                opacity: 1;
            }

            76.5%,
            100% {
                opacity: 0;
            }
        }

        @keyframes sponge-water {
            6.24% {
                transform: translateY(0);
            }

            12.48% {
                transform: translateY(-11px);
            }

            78% {
                transform: translateY(-11px);
            }

            85.8% {
                transform: translateY(0);
            }
        }

        @keyframes sponge-drop {
            0% {
                transform: scale(0) translate(0, 24px);
            }

            7% {
                transform: scale(0) translate(0, 24px);
            }

            15.44% {
                transform: scale(2) translate(0, -36px);
            }

            27.8% {
                transform: scale(0) translate(0, 24px);
            }

            100% {
                transform: scale(0) translate(0, 24px);
            }
        }

        @keyframes sponge-water-column {
            0% {
                transform: scaleX(0) translateY(20px);
            }

            7.8% {
                transform: scaleX(1) translateY(20px);
            }

            18.72% {
                transform: scaleX(0.1) translateY(-12px);
            }

            29.64% {
                transform: scaleX(0.3) translateY(28px);
            }

            81.12% {
                transform: scaleX(1.4) translateY(28px);
            }

            95.16% {
                transform: scaleX(0) translateY(-132px);
            }

            100% {
                transform: scaleX(0) translateY(-132px);
            }
        }

        @keyframes sponge-box {
            0% {
                transform: translateY(-145px);
            }

            9.36% {
                transform: translateY(20px);
            }

            18.72% {
                transform: translateY(-5px);
            }

            28.08% {
                transform: translateY(-7px);
            }

            43.68% {
                transform: translateY(0px);
            }

            60.84% {
                transform: translateY(14px);
            }

            78% {
                transform: translateY(14px);
            }

            85.8% {
                transform: translateY(-144px);
            }

            93.6% {
                transform: translateY(-197px);
            }

            100% {
                transform: translateY(-164px);
            }
        }

        @keyframes sponge-body {
            0% {
                transform: rotate(-134deg) scale(1) translateX(0);
            }

            9.36% {
                transform: rotate(0deg) scale(1) translateX(0);
            }

            48.36% {
                transform: rotate(0deg) scale(1) translateX(0);
            }

            59.28% {
                transform: rotate(0deg) scale(0.95) translateX(0);
            }

            60.84% {
                transform: rotate(0deg) scale(0.9) translateX(-1px);
            }

            62.4% {
                transform: rotate(0deg) scale(0.9) translateX(-3px);
            }

            65.52% {
                transform: rotate(0deg) scale(0.9) translateX(3px);
            }

            68.64% {
                transform: rotate(0deg) scale(0.9) translateX(-3px);
            }

            71.76% {
                transform: rotate(0deg) scale(0.9) translateX(5px);
            }

            74.88% {
                transform: rotate(0deg) scale(0.9) translateX(-5px);
            }

            78% {
                transform: rotate(0deg) scale(0.9) translateX(0);
            }

            85.8% {
                transform: rotate(135deg) scale(1) translateX(0);
            }

            93.6% {
                transform: rotate(180deg) scale(1) translateX(0);
            }

            100% {
                transform: rotate(210deg) scale(1) translateX(0);
            }
        }
    </style>
</head>

<body>
    <div class="aquarium">



        <div class="aquarium__table"></div>
        <div class="aquarium__aquarium">
            <div class="aquarium__water"></div>
            <div class="aquarium__bubble"></div>
            <div class="aquarium__bubble"></div>
            <div class="aquarium__bubble"></div>
            <div class="aquarium__bubble"></div>
            <div class="aquarium__bubble"></div>
            <div class="aquarium__bubble"></div>
            <div class="aquarium__bubble"></div>
            <div class="aquarium__bubble"></div>

        </div>


        <div class="aquarium__drops">
            
    <h1 class="nprinsley-text-glitchan">Halamane Raenek...</h1>
            <div class="aquarium__drop"></div>
            <div class="aquarium__water-column"></div>
            <div class="aquarium__splash"></div>
            <div class="aquarium__splash"></div>
        </div>

        <div class="aquarium__sponge-box">
            <div class="aquarium__body">
                <div class="aquarium__body-stripe"></div>
                <div class="aquarium__body-hole"></div>
            </div>

            <div class="aquarium__face">

                <div class="aquarium__mouth"></div>
                <div class="aquarium__smile"></div>
            </div>

        </div>

    </div>

</body>

</html>