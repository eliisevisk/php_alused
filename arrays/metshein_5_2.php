<?php
//    Pallivise
// sul on üks massiiv nimedega ja teine palliviske tulemustega.

$viskajad = array('Martin', 'Sander', 'Rain', 'Jaak', 'Morten');
$tulemused = array(33, 41, 38, 39, 44);

//Ülesande lahendamiseks tuleb sul natuke googeldada, leia:
//* osalejate arv (count)
//* keskmine palliviske tulemus (array_sum jt.)
//* parim tulemus (max)
//* parima tulemuse visanud õpilase nimi (array_keys)

$average = array_sum($tulemused)/count($tulemused);
echo 'Visetel osales '.count($viskajad). ' noormeest. <br><br>';
echo 'Keskmine visete tulemus oli '.$average.' meetrit <br><br>';
echo 'Parima viske tulemus oli ' .max($tulemused). ' meetrit. <br><br>';

$parimIndeks = (array_keys($tulemused, max($tulemused)));
echo 'Parima tulemuse viskas '.$viskajad[$parimIndeks[0]];
?>