<?php  
session_start();
error_reporting(0);

if(!$_SESSION['login_zoo']){
    header('Location: index');
    exit();
}

require "database/connMySQLClass.php";
require "database/userTableClass.php";
require "database/tapTableClass.php";

$userTableClass = new userTableClass();
$tapTableClass = new tapTableClass();

$getTap = getTap();
$getDataUser = getDataUser();

function getTap(){
    global $tapTableClass;
    $usrID = $_SESSION['userId'];
    $data = $tapTableClass->selectTap(
        fields: "tap_max, tap_total",
        key: "tap_id_user = '$usrID'"
    );

    return $data['data'][0];
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