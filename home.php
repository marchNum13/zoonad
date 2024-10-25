<?php require "config/homeConfig.php" ?>
<!doctype html>
<html lang="en">

<head>
    <?php include "partial/head.php" ?>
    <title>Zoonad | Home</title>
    <style>
        .main {
            border-radius: 35px;
            border-radius: 35px 35px 0px 0px;
            -webkit-border-radius: 35px 35px 0px 0px;
            -moz-border-radius: 35px 35px 0px 0px;
            box-shadow: 2px -15px 18px -3px rgba(222,64,189,0.39);
            -webkit-box-shadow: 2px -15px 18px -3px rgba(222,64,189,0.39);
            -moz-box-shadow: 2px -15px 18px -3px rgba(222,64,189,0.39);
            border-top: 2px solid #ff2ca9;
            height: auto;
            background: #202022;
        }
        .box-info{
            background-color: rgba(255, 255, 255, 0.1);
            padding: 10px;
            border-radius: 9px 9px 9px 9px;
            -webkit-border-radius: 9px 9px 9px 9px;
            -moz-border-radius: 9px 9px 9px 9px;
        }
        .box-info img{
            min-width: 10px;
            max-width: 24px;
        }
        .balance-home {
            text-align: center; /* Menengahkan elemen secara horizontal */
            min-width: 300px; /* Sesuaikan lebar minimum sesuai kebutuhan */
            margin: 0 auto;
        }
        .balance-home .d-flex {
            display: inline-flex;
            align-items: center;
            justify-content: center; /* Menengahkan elemen anak secara horizontal */
        }
        .balance-home .d-flex img {
            min-width: 50px; /* Sesuaikan ukuran gambar */
            max-width: 70px;
            margin-right: 10px;
        }
        .tap{
            width: 80%;
            height: 80%;
            border: 2px solid #ff2ca9;
            padding: 3px;
            background-image: linear-gradient(to right bottom, #64053d, #540d43, #431346, #2f1647, #1a1844);
            border-radius: 200px 200px 200px 200px;
            -webkit-border-radius: 200px 200px 200px 200px;
            -moz-border-radius: 200px 200px 200px 200px;
            box-shadow: 4px -21px 51px 2px rgba(222,64,189,0.74) inset;
            -webkit-box-shadow: 4px -21px 51px 2px rgba(222,64,189,0.74) inset;
            -moz-box-shadow: 4px -21px 51px 2px rgba(222,64,189,0.74) inset;
            display: flex; /* Make the element a flex container */
            justify-content: center; /* Center content horizontally */
            align-items: center; /* Center content vertically */
        }
        .tap img{
            /* min-width: 50px;  */
            /* max-width: 270px; */
            max-width: 95%;
        }
        .item-center-bl {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

    </style>
</head>

<body>

    <!-- loader -->
    <div id="loader">
        <img src="assets/img/loading-icon.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader transparent">
        <div class="left">
            <div class="headerButton" style="color: white;">
                <ion-icon name="person-circle-sharp"></ion-icon> <?= $_SESSION['usernameDB'] ?> (CEO)
            </div>
        </div>
        <!-- <div class="pageTitle">
            Contact
        </div> -->
        <div class="right">
            <a href="#" class="headerButton" style="color: white;">
                <ion-icon name="settings-sharp"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section full">
            <div class="card main">
                <div class="card-body">
                    <div class="row mb-5 mt-2">

                        <!-- earn per tab -->
                        <div class="col">
                            <div class="box-info text-center">
                                <span class="text-white">Earn per tab</span> <br>
                                <img src="assets/img/coin.svg" alt="" >
                                <span class="text-white">+<?= formatAngka($getTap['tap_total']) ?></span>
                            </div>
                        </div>

                        <!-- profit -->
                        <div class="col">
                            <div class="box-info text-center">
                                <span class="text-white">Profit per hour</span> <br>
                                <img src="assets/img/coin.svg" alt="" >
                                <span class="text-white">+<?= formatAngka($getDataUser['user_profit_per_our']) ?></span>
                            </div>
                        </div>
                    </div>
                    <!-- temp balance -->
                    <div class="balance-home mb-2">
                        <div class="d-flex">
                            <img src="assets/img/bl.svg" alt="">
                            <h1 class="text-white" id="coin_count">0</h1>
                        </div>
                    </div>

                    <!-- LVL -->
                    <div class="row">
                        <!-- label lvl -->
                        <div class="col text-start">
                            <span>Bronze ></span>
                        </div>
                        <!-- num lvl -->
                        <div class="col text-end">
                            <span>Level 1/10</span>
                        </div>
                    </div>
                    
                    <!-- lvl progress -->
                    <div class="progress mb-4">
                        <div class="progress-bar" role="progressbar" style="width: 25%; background-color: #ff2ca9;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    

                    <!-- tap -->
                    <button type="button" style="text-decoration: none; background: none; border: none" class="item-center-bl mb-5" id="tap_button">
                        <div class="tap">
                            <img src="assets/img/kong.svg" alt="">
                        </div>
                    </button>

                    <div class="row mb-5">
                        <div class="col">
                            <div class="box-info text-center">
                                <img src="assets/img/coin.svg" alt="" >
                                <span id="max_tap"></span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="box-info text-center">
                                <img src="assets/img/rc.svg" alt="" >
                                <span>Booster</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>
    <!-- * App Capsule -->


    <!-- App Bottom Menu -->
    <div class="appBottomMenu no-border">
        <a href="home" class="item active">
            <div class="col">
                <ion-icon name="home-outline"></ion-icon>
                <strong>Home</strong>
            </div>
        </a>
        <a href="mine" class="item">
            <div class="col">
                <ion-icon name="hammer-outline"></ion-icon>
                <strong>Mine</strong>
            </div>
        </a>
        <a href="friends" class="item">
            <div class="col">
                <ion-icon name="people-outline"></ion-icon>
                <strong>Friends</strong>
            </div>
        </a>
        <a href="earn" class="item">
            <div class="col">
                <ion-icon name="diamond-outline"></ion-icon>
                <strong>Earn</strong>
            </div>
        </a>
        <!-- <a href="wallet" class="item">
            <div class="col">
                <ion-icon name="wallet-outline"></ion-icon>
                <strong>Wallet</strong>
            </div>
        </a> -->
    </div>
    <!-- * App Bottom Menu -->


    <!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="assets/js/lib/bootstrap.bundle.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="assets/js/plugins/splide/splide.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>
    <script src="assets/js/tap.js"></script>


</body>

</html>