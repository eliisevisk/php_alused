<?php

require_once 'config.php'; // loeme andmebaasi conf andmed
require_once 'db_fnc.php'; // loeme funktsioonid



//teeme katsed

$ikt = connection(HOSTNAME, USERNAME, USERPASS, DBNAME);
//echo '<pre>';
//print_r($ikt);

//suvalise päringu saatmine  andmebaasi

$sql = 'SELECT * from koolid';
echo '<pre>';
$result = getData($sql, $ikt);
print_r($result);
