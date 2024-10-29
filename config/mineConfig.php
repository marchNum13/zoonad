<?php  
session_start();
error_reporting(0);

if(!$_SESSION['login_zoo']){
    header('Location: index');
    exit();
}

require "database/connMySQLClass.php";
require "database/userTableClass.php";
require "database/cardTableClass.php";
require "database/cardOwnedTableClass.php";


$userTableClass = new userTableClass();
$cardTableClass = new cardTableClass();
$cardOwnedTableClass = new cardOwnedTableClass();

$getDataUser = getDataUser();
$defaullCard = defaullCard();
$getCardSatu = getCard(1);
$getCardDua = getCard(2);
$getCardTiga = getCard(3);

function getCard($cat){
    global $cardTableClass;

    $data = $cardTableClass->selectCard(
        fields: "
            card_id,
            card_img,
            card_name,
            card_desc,
            card_profit,
            card_start_fee,
            card_up_fee,
            card_category_unlock,
            card_unlock_detail,
            card_unlock_num_condition,
            card_date
        ",
        key: "card_category = '$cat' ORDER BY card_date ASC"
    );

    return $data['data'];
}

function getCardOwned($idCard){
    global $cardOwnedTableClass;
    $usrID = $_SESSION['userId'];

    $data = $cardOwnedTableClass->selectCardOwned(
        fields: "card_owned_lvl",
        key: "card_owned_id_user = '$usrID' AND card_owned_id_card = '$idCard' LIMIT 1"
    );

    return $data;
}

function defaullCard(){
    global $cardTableClass;

    $check = $cardTableClass->selectCard(
        fields: "card_id",
        key: "1"
    )['row'];

    $inputCard = [
        [
            "card_img" => "assets/img/card/Quantum Router.png",
            "card_name" => "Quantum Router",
            "card_desc" => "none",
            "card_category" => "1",
            "card_profit" => "0.07",
            "card_start_fee" => "9860",
            "card_up_fee" => "1.0",
            "card_category_unlock" => "NONE",
            "card_unlock_detail" => "NONE",
            "card_unlock_num_condition" => "0"
        ],
        [
            "card_img" => "assets/img/card/Blockchain Guardian.png",
            "card_name" => "Blockchain Guardian",
            "card_desc" => "none",
            "card_category" => "1",
            "card_profit" => "0.07",
            "card_start_fee" => "14770",
            "card_up_fee" => "1.0",
            "card_category_unlock" => "NONE",
            "card_unlock_detail" => "NONE",
            "card_unlock_num_condition" => "0"
        ],
        [
            "card_img" => "assets/img/card/Decentralized Firewall.png",
            "card_name" => "Decentralized Firewall",
            "card_desc" => "none",
            "card_category" => "1",
            "card_profit" => "0.07",
            "card_start_fee" => "19140",
            "card_up_fee" => "1.0",
            "card_category_unlock" => "NONE",
            "card_unlock_detail" => "NONE",
            "card_unlock_num_condition" => "0"
        ],
        [
            "card_img" => "assets/img/card/Smart Contract Automator.png",
            "card_name" => "Smart Contract Automator",
            "card_desc" => "none",
            "card_category" => "1",
            "card_profit" => "0.07",
            "card_start_fee" => "23680",
            "card_up_fee" => "1.0",
            "card_category_unlock" => "OWNED OTHER CARD",
            "card_unlock_detail" => "Quantum Router",
            "card_unlock_num_condition" => "3"
        ],
        [
            "card_img" => "assets/img/card/Quantum Chipset.png",
            "card_name" => "Quantum Chipset",
            "card_desc" => "none",
            "card_category" => "1",
            "card_profit" => "0.07",
            "card_start_fee" => "29220",
            "card_up_fee" => "1.0",
            "card_category_unlock" => "OWNED OTHER CARD",
            "card_unlock_detail" => "Blockchain Guardian",
            "card_unlock_num_condition" => "3"
        ],
        [
            "card_img" => "assets/img/card/Pump and dump wizard.png",
            "card_name" => "Pump and dump wizard",
            "card_desc" => "none",
            "card_category" => "2",
            "card_profit" => "0.05",
            "card_start_fee" => "12200",
            "card_up_fee" => "1.5",
            "card_category_unlock" => "NONE",
            "card_unlock_detail" => "NONE",
            "card_unlock_num_condition" => "0"
        ],
        [
            "card_img" => "assets/img/card/Whale watcher.png",
            "card_name" => "Whale watcher",
            "card_desc" => "none",
            "card_category" => "2",
            "card_profit" => "0.08",
            "card_start_fee" => "18424",
            "card_up_fee" => "1.2",
            "card_category_unlock" => "NONE",
            "card_unlock_detail" => "NONE",
            "card_unlock_num_condition" => "0"
        ],
        [
            "card_img" => "assets/img/card/Insider whisperer.png",
            "card_name" => "Insider whisperer",
            "card_desc" => "none",
            "card_category" => "2",
            "card_profit" => "0.05",
            "card_start_fee" => "24980",
            "card_up_fee" => "0.7",
            "card_category_unlock" => "OWNED OTHER CARD",
            "card_unlock_detail" => "Decentralized Firewall",
            "card_unlock_num_condition" => "3"
        ],
        [
            "card_img" => "assets/img/card/Liquidity siphon.png",
            "card_name" => "Liquidity siphon",
            "card_desc" => "none",
            "card_category" => "2",
            "card_profit" => "0.06",
            "card_start_fee" => "32180",
            "card_up_fee" => "1.4",
            "card_category_unlock" => "OWNED OTHER CARD",
            "card_unlock_detail" => "Pump and dump wizard",
            "card_unlock_num_condition" => "5"
        ],
        [
            "card_img" => "assets/img/card/Bear trap card.png",
            "card_name" => "Bear trap card",
            "card_desc" => "none",
            "card_category" => "2",
            "card_profit" => "0.10",
            "card_start_fee" => "38900",
            "card_up_fee" => "1.7",
            "card_category_unlock" => "OWNED OTHER CARD",
            "card_unlock_detail" => "Whale watcher",
            "card_unlock_num_condition" => "5"
        ],
        [
            "card_img" => "assets/img/card/Zoonad Kings Blessing.png",
            "card_name" => "Zoonad Kings Blessing",
            "card_desc" => "none",
            "card_category" => "3",
            "card_profit" => "0.16",
            "card_start_fee" => "15800",
            "card_up_fee" => "0.6",
            "card_category_unlock" => "NONE",
            "card_unlock_detail" => "NONE",
            "card_unlock_num_condition" => "0"
        ],
        [
            "card_img" => "assets/img/card/Time Travel Transaction.png",
            "card_name" => "Time Travel Transaction",
            "card_desc" => "none",
            "card_category" => "3",
            "card_profit" => "0.07",
            "card_start_fee" => "25980",
            "card_up_fee" => "0.5",
            "card_category_unlock" => "OWNED OTHER CARD",
            "card_unlock_detail" => "Smart Contract Automator",
            "card_unlock_num_condition" => "5"
        ],
        [
            "card_img" => "assets/img/card/Fortune Satoshi.png",
            "card_name" => "Fortune Satoshi",
            "card_desc" => "none",
            "card_category" => "3",
            "card_profit" => "0.12",
            "card_start_fee" => "34200",
            "card_up_fee" => "1.3",
            "card_category_unlock" => "OWNED OTHER CARD",
            "card_unlock_detail" => "Quantum Chipset",
            "card_unlock_num_condition" => "5"
        ],
        [
            "card_img" => "assets/img/card/Crypto Blackhole.png",
            "card_name" => "Crypto Blackhole",
            "card_desc" => "none",
            "card_category" => "3",
            "card_profit" => "0.05",
            "card_start_fee" => "44584",
            "card_up_fee" => "0.7",
            "card_category_unlock" => "OWNED OTHER CARD",
            "card_unlock_detail" => "Insider whisperer",
            "card_unlock_num_condition" => "7"
        ],
        [
            "card_img" => "assets/img/card/Elons Tweet.png",
            "card_name" => "Elons Tweet",
            "card_desc" => "none",
            "card_category" => "3",
            "card_profit" => "0.11",
            "card_start_fee" => "55768",
            "card_up_fee" => "1.17",
            "card_category_unlock" => "OWNED OTHER CARD",
            "card_unlock_detail" => "Liquidity siphon",
            "card_unlock_num_condition" => "7"
        ]
    ];

    if(count($inputCard) > $check){
        foreach($inputCard as $val){
            $idCard = createIDCard();
            $dateNow = round(microtime(true) * 1000);

            $cardImg = $val['card_img'];
            $cardName= $val['card_name'];
            $cardDesc = $val['card_desc'];
            $cardCategory = $val['card_category'];
            $cardProfit = $val['card_profit'];
            $cardStartFee = $val['card_start_fee'];
            $cardUpFee = $val['card_up_fee'];
            $cardCategoryUnlock = $val['card_category_unlock'];
            $cardUnlockDetail = $val['card_unlock_detail'];
            $carNumCondition = $val['card_unlock_num_condition'];

            $setCard = $cardTableClass->insertCard(
                fields: "
                    card_id,
                    card_img,
                    card_name,
                    card_desc,
                    card_category,
                    card_profit,
                    card_start_fee,
                    card_up_fee,
                    card_category_unlock,
                    card_unlock_detail,
                    card_unlock_num_condition,
                    card_date
                ",
                value: "
                    '$idCard',
                    '$cardImg',
                    '$cardName',
                    '$cardDesc',
                    '$cardCategory',
                    '$cardProfit',
                    '$cardStartFee',
                    '$cardUpFee',
                    '$cardCategoryUnlock',
                    '$cardUnlockDetail',
                    '$carNumCondition',
                    '$dateNow'
                "
            );
        }
    }else{
        return true;
    }
    
}

function createIDCard(){
    global $cardTableClass;

    $id = substr(md5(uniqid(rand(), true)), 0, 7);

    $check = $cardTableClass->selectCard(fields: "card_id", key: "card_id = '$id' LIMIT 1");

    if($check['row'] > 0){
        return createIDCard();
    }else{
        return $id;
    }
}

function getDataUser(){
    global $userTableClass;
    $usrID = $_SESSION['userId'];
    $data = $userTableClass->selectUser(
        fields: "user_profit_per_our",
        key: "user_id = '$usrID'"
    );

    return $data['data'][0];
}

function formatAngka($angka) {
    $simbol = ['K', 'M', 'B'];
    $simbol_index = 0;

    // Jika angka kurang dari 1000, kembalikan angka aslinya tanpa desimal
    if ($angka < 1000) {
        return number_format($angka, 0);
    }

    // Selama angka lebih besar dari 1000, bagi dengan 1000 dan naikkan indeks simbol
    while ($angka >= 1000) {
        $angka /= 1000;
        $simbol_index++;
    }

    // Kurangi indeks simbol dengan 1
    $simbol_index--;

    // Format angka dengan 1 desimal, lalu hapus desimal jika bernilai 0
    $formatted = number_format($angka, 1);
    if (substr($formatted, -2) === '.0') {
        $formatted = substr($formatted, 0, -2);
    }

    return $formatted . $simbol[$simbol_index];
}
?>