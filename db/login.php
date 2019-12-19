<?php

//tekitame ühenduse andmebaasiga

require_once 'config.php'; // loeme andmebaasi conf andmed
require_once 'db_fnc.php'; // loeme funktsioonid
$ikt = connection(HOSTNAME, USERNAME, USERPASS, DBNAME);



if (!empty($_POST['nimi']) and !empty($_POST['parool'])){
    $nimi = $_POST['nimi'];
    $parool = $_POST['parool'];
    //kontrollime kasutaja olemasolu andmebaasis
    $sql = 'SELECT * FROM kasutajad WHERE nimi="'.$nimi. '" AND parool="'.md5($parool).'";';
    $result = getData($sql, $ikt);
    if($result !== false){
        //avame kasutajale sessiooni
        session_start();
        $_SESSION['kasutaja'] = $result[0]['nimi'];
        if(!empty($_SESSION['kasutaja'])){
            echo'<h1>tere tulemast, '.$_SESSION['kasutaja'].'</h1><br>';
            session_unset();
        } else {
            header('index.html');
        }
    }
} else {
    // väljastame vormi
    echo
    '<from method="post">
                Kasutajanimi: <input type="text" name="nimi"><br><br>
                Parool: <input type="password" name="parool"><br><br>
                <input type="submit" value="logi sisse">
                <hr>
            </from>';
}
