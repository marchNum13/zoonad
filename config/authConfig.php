<?php  
session_start();
error_reporting(0);

require "database/connMySQLClass.php";
require "database/userTableClass.php";
require "database/tapTableClass.php";

$userTableClass = new userTableClass();
$tapTableClass = new tapTableClass();

$key_bot = "tes";
$user_balance = 0;
$last_coin = 0;

if(isset($_GET["key"]) && isset($_GET["user_id"])){
    if($key_bot == $_GET["key"]){
        $userId = trim(htmlspecialchars($_GET["user_id"], ENT_QUOTES));
        $username = $_GET["username"] == "" ? "none" : $_GET["username"];

        // check data
        $dataUser = $userTableClass->loginMember($userId);
        if($dataUser['num'] > 0){
            $_SESSION["userId"] = $userId;
            $_SESSION["usernameDB"] = $dataUser['username'];
            $_SESSION["codeReff"] = $dataUser['code_reff'];
            $user_balance = $dataUser['user_balance'];

            // update username
            if($_SESSION['usernameDB'] != $username){
                $updateUsername = $userTableClass->updateUser(
                    dataSet: "user_username = '$username'",
                    key: "user_id = '$userId'"
                );
                if($updateUsername){
                    $_SESSION["usernameDB"] = $username;
                }
            }
            $getLastCoin = $tapTableClass->selectTap(
                fields: "tap_last",
                key: "tap_id_user = '$userId'"
            );
            $last_coin = $getLastCoin['data']['0']['tap_last'];
            $_SESSION['login_zoo'] = true;
        }else{
            $upline_reff = isset($_GET["reff"]) ? $_GET["reff"] : "NONE";
            $dateNow = round(microtime(true) * 1000);
            $refferalUser = createRefferalCode();
            $register = $userTableClass->insertUser(
                fields: "user_id, user_username, user_code_refferal, user_upline, user_date",
                value: "'$userId', '$username', '$refferalUser', '$upline_reff', '$dateNow'"
            );
            if($register){
                $regisTap = $tapTableClass->insertTap(
                    fields: "tap_id_user",
                    value: "'$userId'"
                );
                if($regisTap){
                    $getLastCoin = $tapTableClass->selectTap(
                        fields: "tap_last",
                        key: "tap_id_user = '$userId'"
                    );
                    $last_coin = $getLastCoin['data']['0']['tap_last'];
                }
                $_SESSION["userId"] = $userId;
                $_SESSION["usernameDB"] = $username;
                $_SESSION["codeReff"] = $refferalUser;
                $_SESSION['login_zoo'] = true;
            }
        }
    }else{
        header('Location: index');
        exit();
    }
}else{
    header('Location: index');
    exit();
}

// Fungsi untuk membuat kode refferal unik
function createRefferalCode() {
    global $userTableClass;

    $referal = substr(md5(uniqid(rand(), true)), 0, 7);

    $check = $userTableClass->selectUser(
        fields: "user_code_refferal",
        key: "user_code_refferal = '$referal' LIMIT 1"
    );

    if($check['row'] > 0){
        return createRefferalCode();
    }else{
        return $referal;
    }
}


?>