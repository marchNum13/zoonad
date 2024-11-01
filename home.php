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
            background-image: url("assets/img/bg/bg-main.png");
            background-size: cover;
            background-position: center;
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
            max-width: 50px;
            margin-right: 10px;
            margin-bottom: 10px;
        }

    </style>
    <link rel="stylesheet" href="assets/css/custome.css">
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
                <ion-icon name="person-circle-sharp"></ion-icon> <?= $_SESSION['usernameDB'] ?> (KEEPER)
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
                    <div class="row mb-3 mt-2">

                        <!-- earn per tab -->
                        <div class="col">
                            <div class="box-info text-center">
                                <span class="text-white">Earn per tab</span> <br>
                                <img src="assets/img/bl.svg" alt="" class="pt-10">
                                <span class="text-white">+<?= formatAngka($getTap['tap_total']) ?></span>
                            </div>
                        </div>

                        <!-- profit -->
                        <div class="col">
                            <div class="box-info text-center">
                                <span class="text-white">Profit per hour</span> <br>
                                <img src="assets/img/bl.svg" alt="" class="pt-10">
                                <span class="text-white">+<?= formatAngka($getDataUser['user_profit_per_our']) ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- temp balance -->
                    <div class="balance-home mb-2">
                        <div class="d-flex">
                            <img src="assets/img/bl.svg" alt="" class="pt-10">
                            <h1 class="text-white" id="coin_count">0</h1>
                        </div>
                    </div>

                    <!-- LVL -->
                    <div class="row">
                        <!-- label lvl -->
                        <div class="col text-start">
                            <span class="text-white">Bronze ></span>
                        </div>
                        <!-- num lvl -->
                        <div class="col text-end">
                            <span class="text-white">Level 1/10</span>
                        </div>
                    </div>
                    
                    <!-- lvl progress -->
                    <div class="progress mb-2">
                        <div class="progress-bar" role="progressbar" style="width: 25%; background-color: #ff2ca9;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    
                    <!-- button tap -->
                    <button type="button" style="text-decoration: none; background: none; border: none" class="item-center-bl mb-2" id="tap_button">
                        <img src="assets/img/Tap2.png" alt="">
                        <span class="number-add text-white" id="number-add"></span>
                    </button>

                    <div class="row mb-5">
                        <div class="col">
                            <div class="box-info text-center">
                                <img src="assets/img/bl.svg" alt="" class="pt-10">
                                <span class="text-white" id="max_tap"></span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="box-info text-center">
                                <img src="assets/img/zoonad_upgrade.png" alt="" >
                                <span class="text-white">Booster</span>
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
                <img class="icon-nav" src="assets/img/zoonad_home.png" alt="">
                <strong>Home</strong>
            </div>
        </a>
        <a href="mine" class="item">
            <div class="col">
            <img class="icon-nav" src="assets/img/zoonad_mine.png" alt="">
                <strong>Mine</strong>
            </div>
        </a>
        <a href="friends" class="item">
            <div class="col">
                <img class="icon-nav" src="assets/img/zoonad_friend.png" alt="">
                <strong>Friends</strong>
            </div>
        </a>
        <a href="earn" class="item">
            <div class="col">
                <img class="icon-nav" src="assets/img/zoonad_earn.png" alt="">
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