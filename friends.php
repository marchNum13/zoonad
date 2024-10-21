<!doctype html>
<html lang="en">

<head>
    <?php include "partial/head.php" ?>
    <title>Zoonad | Friends</title>
    <style>
        .button-inv{
            z-index: 999;
            position: fixed;
            bottom: 65px;
            left: 0;
            right: 0;
            padding-left: 10px;
            padding-right: 10px; 
        }

        .bg-transparent{
            background-color: rgba(255, 255, 255, 0.1) !important;
            padding: 1px;
            border-radius: 20px 20px 20px 20px;
            -webkit-border-radius: 20px 20px 20px 20px;
            -moz-border-radius: 20px 20px 20px 20px;
        }

    </style>
</head>

<body>

    <!-- loader -->
    <div id="loader">
        <img src="assets/img/loading-icon.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section full mb-3 text-center">
            <h1 class="text-white">Invite Friends!</h1>
            <p>Invite your friends and get a reward</p>
        </div>

        <div class="section">
            <div class="section-heading">
                <h2 class="title text-white fs-5">Your friends List (2)</h2>
                <div class="link text-white fs-5">
                    <ion-icon name="reload-outline"></ion-icon>
                </div>
            </div>
            <div class="card bg-transparent text-white mb-2">
                <div class="card-body">
                    March
                </div>
            </div>
            <div class="card bg-transparent text-white mb-2">
                <div class="card-body">
                    Jhon
                </div>
            </div>
        </div>

        <div class="button-inv">
            <div class="row">
                <div class="col-9">
                    <button class="btn btn-pink btn-lg" style="width: 100%">
                        Invite Friends <ion-icon name="person-circle-outline"></ion-icon>
                    </button>
                </div>
                <div class="col-3 text-end">
                    <button type="button" class="btn btn-pink btn-lg">
                        <ion-icon name="copy-outline" style="text-align: center; margin: 0"></ion-icon>
                    </button>
                </div>
            </div>
        </div>

    </div>
    <!-- * App Capsule -->


    <!-- App Bottom Menu -->
    <div class="appBottomMenu no-border">
        <a href="home" class="item">
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
        <a href="friends" class="item active">
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


</body>

</html>