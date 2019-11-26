<?php
//
//echo '<pre>';
//print_r($_GET);
//echo '</pre>';


//arvutusfunktsioonid

function keraRuumala($raadius){
    return 4 * pi() * pow($raadius, 2); // 4 pi raadius ruudus, kera ruumala valem

}

function koonuseRuumala($raadius, $korgus){
    $pohjaPindala = pi() * pow($raadius, 2);
    return (1/3) * $pohjaPindala * $korgus;
}

function silindriRuumala($raadius, $korgus){
    $pohjaPindala = pi() * pow($raadius, 2);
    return $pohjaPindala * $korgus;
}

// arvutame ja väljastame tulemsued

// vormi andmed

$keraRaadius = $_GET['kera-raadius'];
$koonuseRaadius = $_GET['koonuse-raadius'];
$koonuseKorgus = $_GET['koonuse-korgus'];
$silindriRaadius = $_GET['silindri-raadius'];
$silindriKorgus = $_GET['silindri-korgus'];

// arvutused

$keraRuumala = keraRuumala($keraRaadius);
$koonuseRuumala = koonuseRuumala($koonuseRaadius, $koonuseKorgus);
$silindriRuumala = silindriRuumala($silindriRaadius, $silindriKorgus);

// echo andmed

echo $keraRuumala.'<br>';
echo $koonuseRuumala.'<br>';
echo $silindriRuumala.'<br>';