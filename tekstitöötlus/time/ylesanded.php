<?php
/**
 * file name: ylesanded.php;
 * autor: anna.karutina;
 * date: 26.11.2019;
 */
// paneme ajatsoon paika
date_default_timezone_set('Europe/Tallinn');

//Kuva kuupäev ja kellaaeg formaadis 20.03.2013 12:31
$aeg = mktime(12, 31, 0, 3, 20, 2013);
echo date('d.m.Y H:i', $aeg);
echo '<br>';
echo date('d.m.Y H:i', time()); // hetkeaeg

echo '<hr>';
//Kuva tänane eestikeelne nädalapäev, N: kolmapäev

$paevaNumber = date('N');
$nadal = array(
  '1' => 'esmaspäev',
  '2' => 'teisipäev',
  '3' => 'kolmapäev',
  '4' => 'neljapäev',
  '5' => 'reede',
  '6' => 'laupäev',
  '7' => 'pühapäev',
);

foreach ($nadal as $number=>$nimetus){
  if($number == $paevaNumber){
    echo $nadal[$number];
  }
}

echo '<hr>';

//Kuva eestikeelne kuupäev koos nädalapäevaga. Näiteks: 23.veebruar 2013 laupäev

echo date('d.'); // kuvame kuupäev

$kuud = array(
  '1' => 'jaanuar',
  '2' => 'veebruar',
  '3' => 'märts',
  '4' => 'aprill',
  '5' => 'mai',
  '6' => 'juuni',
  '7' => 'juuli',
  '8' => 'august',
  '9' => 'september',
  '10' => 'oktoober',
  '11' => 'november',
  '12' => 'detsember',
);
$kuuNumber = date('n');
foreach ($kuud as $number=>$nimetus){
  if($number == $kuuNumber){
    echo $kuud[$number]; // kuvame eestikeelne kuu
  }
}

echo date(' Y '); // kuvame aasta

foreach ($nadal as $number=>$nimetus){
  if($number == $paevaNumber){
    echo $nadal[$number]; // kuvame nädalapäev
  }
}

echo '<hr>';
//Leia mitu päeva on jäänud järgmise jaanipäevani. Näiteks: 2014 aasta jaanipäevani on jäänud 236 päeva!

// aasta on hetkel + 1 -> järgmine aasta
$jargmineAasta = date('Y')+1;
// paneme jaanipäeva ajatempel,
$jaaniPaev = mktime(0, 0, 0, 6, 24, $jargmineAasta);
// paneme kirja hetkel olev ajatempel
$hetkel = time();
// arvutame vahe nende kahe sündmuse vahel sekundites
$vahe = $jaaniPaev - $hetkel;
// päevas on 60 sekundid minutis * 60 minutid tunnis * 24 tundi -> nii palju sekundeid
$paevasSekunditeArv = 60 * 60 * 24;
// leiame mitu päeva on meie sekundites
$paevadeArv = (int)($vahe / $paevasSekunditeArv);
echo $jargmineAasta.' aasta jaanipäevani on jäänud '.$paevadeArv.' päeva!';

echo '<hr>';

//Minu sünnipäev on 06.11.1980! Leia kumb on meist vanem. Kuva mõlema sünnikuupäevad ning vahe aastates.
$minuSynnipaev = strtotime("27 November ".date('Y'));
$temaSynnipaev = strtotime("11 November ".date('Y'));
$vahe = $temaSynnipaev - $minuSynnipaev; // kui vahe on negatiivne - tema on vanem, kuna minu synna on hiljem
// sekundite arv aastas on 60 sekundid minutis * 60 minutid tunnis * 24 tundi * 30 päev * 12 kuud
$vaheAastates = (int)($vahe / (60 * 60 * 24 * 30 * 12));

if($vahe < 0){
  echo 'Tema on vanem kui mina ';
} else {
  echo 'Mina on vanem kui tema ';
}
echo abs($vaheAastates).' aasta võrra<br>';

echo '<hr>';

//Maailmalõpp saabub 29.02.2016! Las PHP otsustab, kas see on võimalik.

// ei viitsi teha

//Leia, kas sul on järgmine aasta juubel?
$jargmineAasta = date('Y')+1;
$minuSynniKuuPaev = strtotime("27 November 1980");
$minuSynnipaevJargmiselAastal = strtotime("27 November ".$jargmineAasta);
// mitu aastat olen vana?
$vanusSekundites = $minuSynnipaevJargmiselAastal - $minuSynniKuuPaev;
$vanusAastates = (int)($vanusSekundites / (60 * 60 * 24 * 30 * 12));
if($vanusAastates % 5 == 0) {
  echo $jargmineAasta.' sul on juubel';
} else {
  echo $jargmineAasta.' sul pole juubelit';
}

echo '<hr>';

//Koosta kood, mis tervitab sind vastavalt ajale. N: 8:00+ “Tere hommikust!”, 13:00+ “Tere päevast!” ja 17:00+ “Tere õhtust!”
$kell = date('H');
if($kell >= 8 and $kell < 13){
  echo 'Tere hommikust!';
} else if($kell >= 13 and $kell < 17) {
  echo 'Tere päevast!';
} else if($kell >= 17 or $kell > 0) {
  echo 'Tere õhtust!';
}