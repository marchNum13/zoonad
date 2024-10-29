<!doctype html>
<html lang="en">

<head>
    <?php include "partial/head.php" ?>
    <title>Zoonad | Earn</title>
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
        .earn-img{
            max-width: 120px;
        }

        .fee img{
            min-width: 10px;
            max-width: 15px;
        }

        .modal .modal-dialog .modal-content{
            border-radius: 35px;
            border-radius: 35px 35px 0px 0px;
            -webkit-border-radius: 35px 35px 0px 0px;
            -moz-border-radius: 35px 35px 0px 0px;
            box-shadow: 2px -15px 18px -3px rgba(222,64,189,0.39);
            -webkit-box-shadow: 2px -15px 18px -3px rgba(222,64,189,0.39);
            -moz-box-shadow: 2px -15px 18px -3px rgba(222,64,189,0.39);
            border-top: 2px solid #ff2ca9;
        }
        .modal .modal-dialog .modal-content .modal-header{
            /* padding: 2px; */
            border: 0;
        }

        .modal .modal-dialog .modal-content .modal-body button{
            
            background-color: rgba(255, 255, 255, 0.1);
        }
        .modal .modal-dialog .modal-content .modal-body img{
            min-width: 10px;
            max-width: 95px;
            border-radius: 100px 100px 100px 100px;
            -webkit-border-radius: 100px 100px 100px 100px;
            -moz-border-radius: 100px 100px 100px 100px;
        }
        .modal .modal-dialog .modal-content .modal-header button{
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 200px 200px 200px 200px;
            -webkit-border-radius: 200px 200px 200px 200px;
            -moz-border-radius: 200px 200px 200px 200px;
        }
        
        .modal .modal-dialog .modal-content .fee img{
            min-width: 10px;
            max-width: 15px;
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

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section full mb-3 text-center">
            <img src="assets/img/coin.png" class="earn-img" alt="">
            <h1 class="text-white">Get more reward</h1>
        </div>

        <!-- task -->
        <div class="section mt-4">
            <div class="section-heading">
                <h4 class="title text-white">Zoonad YouTube</h4>
                <!-- <a href="app-transactions.html" class="link">View All</a> -->
            </div>
            <div class="transactions">
                <!-- item -->
                <a href="" data-bs-toggle="modal" data-bs-target="#actionSheet" class="item bg-transparent">
                    <div class="detail">
                        <img src="assets/img/yt_zoonad.png" alt="img" class="image-block imaged w48">
                        <div>
                            <strong class="text-white">Subscribe</strong>
                            <span class="fee text-secondary"><img src="assets/img/bl.svg" alt=""> +100</span>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-secondary"> ></div>
                    </div>
                </a>
                <!-- * item -->
                <!-- item -->
                <a href="" class="item bg-transparent">
                    <div class="detail">
                        <img src="assets/img/yt_zoonad.png" alt="img" class="image-block imaged w48">
                        <div>
                            <strong class="text-white">Watch Video</strong>
                            <span class="fee text-secondary"><img src="assets/img/bl.svg" alt=""> +100</span>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-secondary"> ></div>
                    </div>
                </a>
                <!-- * item -->
            </div>
        </div>
        <!-- * task -->
        <!-- task -->
        <div class="section mt-4">
            <div class="section-heading">
                <h4 class="title text-white">Daily Task</h4>
                <!-- <a href="app-transactions.html" class="link">View All</a> -->
            </div>
            <div class="transactions">
                <!-- item -->
                <a href="" class="item bg-transparent">
                    <div class="detail">
                        <img src="assets/img/ig_zoonad.png" alt="img" class="image-block imaged w48">
                        <div>
                            <strong class="text-white">Follow our Instagram</strong>
                            <span class="fee text-secondary"><img src="assets/img/bl.svg" alt=""> +100</span>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-secondary"> ></div>
                    </div>
                </a>
                <!-- * item -->
                <!-- item -->
                <a href="" class="item bg-transparent">
                    <div class="detail">
                        <img src="assets/img/tele_zoonad.png" alt="img" class="image-block imaged w48">
                        <div>
                            <strong class="text-white">Join our telegram channel</strong>
                            <span class="fee text-secondary"><img src="assets/img/bl.svg" alt=""> +100</span>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-secondary"> ></div>
                    </div>
                </a>
                <!-- * item -->
                <!-- item -->
                <a href="" class="item bg-transparent">
                    <div class="detail">
                        <img src="assets/img/x_zoonad.png" alt="img" class="image-block imaged w48">
                        <div>
                            <strong class="text-white">Follow our X</strong>
                            <span class="fee text-secondary"><img src="assets/img/bl.svg" alt=""> +100</span>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-secondary"> ></div>
                    </div>
                </a>
                <!-- * item -->
            </div>
        </div>
        <!-- * task -->

        <!-- Default Action Sheet -->
        <div class="modal fade action-sheet" id="actionSheet" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content bg-black">
                    <div class="modal-header text-end">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-icon text-white me-1 mt-3 mb-0">
                            <ion-icon name="close-outline"></ion-icon>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            
                            <div class="mb-2 text-center">
                                <img src="assets/img/yt_zoonad.png" alt="">
                                <h2 class="text-white mt-2">Subscribe our channel</h2>
                                <p style="font-size: small;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae illo laborum delectus aliquid esse voluptate, doloremque quasi explicabo, accusamus </p>
                                <button class="btn btn-pink">Subscribe</button> <br><br>
                                <span class="fee"><img src="assets/img/bl.svg" alt=""> +100</span>
                            </div>

                            <div class="form-group basic">
                                <button type="button" class="btn btn-block btn-pink btn-lg "
                                    data-bs-dismiss="modal">
                                    Check
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Default Action Sheet -->

    </div>
    <!-- * App Capsule -->


    <!-- App Bottom Menu -->
    <div class="appBottomMenu no-border">
        <a href="home" class="item">
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
        <a href="earn" class="item active">
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


</body>

</html>