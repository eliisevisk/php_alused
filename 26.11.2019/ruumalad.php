<?php

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>06 - PHP - Vormid</title>
</head>
<body>
<h1>Arvutused</h1>
<form action="<?php echo $_SERVER[php_self]?>" method="get">
    <h3>Kera</h3><br>
            raadius <input type="text" name="kera-raadius"><br>
    <h3>Koonus</h3>
            põhja raadius <input type="text" name="koonuse-raadius"><br>
            kõrgus <input type="text" name="koonuse-korgus"><br>
    <h3>Silindri</h3>
    põhja raadius <input type="text" name="silindri-raadius"><br>
    kõrgus <input type="text" name="silindri-korgus"><br>
    <input type="submit" value="Saada">
</form>
</body>
</html>


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

if (count($_GET) != 0){
    echo 'Kera ruumala on ' .$keraRuumala.'<br>';
    echo 'Koonuse ruumala on ' .$koonuseRuumala.'<br>';
    echo 'Silindri ruumala on ' .$silindriRuumala.'<br>';
}

//
//echo '<pre>';
//print_r ($_SERVER);
//echo '</pre>';
?>