<?php
// andmebaasiga töötamiseks vajalik info
require_once 'config.php';
require_once 'db_fnc.php';
$ikt = connection(HOSTNAME, USERNAME, USERPASS, DBNAME);


// kui vormi kaudu on andmed saadetud
if(!empty($_POST['nimi']) and !empty($_POST['parool'])){
    $nimi = $_POST['nimi'];
    $parool = $_POST['parool'];
    // kontrollime kasutaja andmebaasis
    $sql = 'SELECT * FROM kasutajad WHERE nimi="'.$nimi.'" AND parool="'.md5($parool).'"';
    $result = getData($sql, $ikt);
    // kui selline kasutaja on olemas andmebaasis
    if($result !== false){
        session_start();
        $_SESSION['kasutaja'] = $result[0]['nimi'];
        header('Location: index.php');
    }
} else {
    // väljastatakse vorm
    echo
    '<form method="post">
    Kasutajanimi: <input type="text" name="nimi"><br>
    Parool: <input type="password" name="parool"><br>
    <input type="submit" value="Logi sisse">
    <hr>
  </form>';
}