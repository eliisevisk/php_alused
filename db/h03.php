<?php

require_once 'config.php'; // loeme andmebaasi conf andmed
require_once 'db_fnc.php'; // loeme funktsioonid
require_once 'ui.php'; //tabeliks

$ikt = connection(HOSTNAME, USERNAME, USERPASS, DBNAME);

otsing();

if(isset($_GET['otsi'])) {
    $otsi = $_GET['otsi'];
    //lisame otsingusõna päringusse
    $sql = 'SELECT 2015,Kool FROM koolid2015 WHERE Kool LIKE "%' .$otsi. '%"';
    $result = getData($sql, $ikt);
    table01($result, array('Kool', '2015'));
}





