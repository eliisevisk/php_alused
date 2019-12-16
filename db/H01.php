<?php

require_once 'config.php'; // loeme andmebaasi conf andmed
require_once 'db_fnc.php'; // loeme funktsioonid
require_once 'ui.php'; //tabeliks


//teeme katsed

$ikt = connection(HOSTNAME, USERNAME, USERPASS, DBNAME);
//echo '<pre>';
//print_r($ikt);

//suvalise päringu saatmine  andmebaasi

$sql = 'SELECT Kool, Kokku from koolid2015';
echo '<pre>';
$result = getData($sql, $ikt);
//print_r($result);
table01($result);

