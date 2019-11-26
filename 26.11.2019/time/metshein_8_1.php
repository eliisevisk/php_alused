<?php

//Kuva kuupäev ja kellaaeg formaadis 20.03.2013 12:31
date_default_timezone_set('Europe/Tallinn');
echo '<br>Praegune kuupäev ja kellaaeg: '.date('d.m.Y G:i' , time()).'<br><br>';


//Kuva tänane eestikeelne nädalapäev, N: kolmapäev

//kuude massiiv
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
//kuupäevad massiividesse
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
//kuupäeva väljastamine
echo $paev.'.'.$kuu.' '.$aasta.'<br><br>';


//Kuva eestikeelne kuupäev koos nädalapäevaga. Näiteks: 23.veebruar 2013 laupäev
$paevaNumber = date('N');
$nadal = array(
    '1' => 'Esmaspäev',
    '2' => 'Teisipäev',
    '3' => 'Kolmapäev',
    '4' => 'Neljapäev',
    '5' => 'Reede',
    '6' => 'Laupäev',
    '7' => 'Pühapäev',
);
foreach ($nadal as $number=>$nimetus){
    if($number == $paevaNumber){
        echo $nadal[$number];
    }
}
echo '<br><br>';
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
echo '<br><br>';

//Leia mitu päeva on jäänud järgmise jaanipäevani. Näiteks: 2014 aasta jaanipäevani on jäänud 236 päeva!

// lisame aastaarvule +1 >> leiame j'rgmise aasta nr
$jargmineAasta = date('Y')+1;
// jaanip timestamp on,
$jaaniPaev = mktime(0, 0, 0, 6, 24, $jargmineAasta);
// praegune timestamp on
$hetkel = time();
// division saame sekundid
$vahe = $jaaniPaev - $hetkel;
$paevasSekunditeArv = 60 * 60 * 24;
// leiame mitu päeva on eelnevalt leitud sekundites
$paevadeArv = (int)($vahe / $paevasSekunditeArv);
echo $jargmineAasta.' aasta jaanipäevani on jäänud '.$paevadeArv.' päeva! <br><br>';



//Minu sünnipäev on 06.11.1980! Leia kumb on meist vanem. Kuva mõlema sünnikuupäevad ning vahe aastates.

$teVanus = date('Y') - 1980;
$minuVanus = date('Y') -1996;

echo 'Teie vanuseks on '.$teVanus.', ning minu vanuseks on '.$minuVanus. '<br><br>';
echo 'Meie sünnikuupäevad on 06.11.1980 ja 04.01.1996. Meie vanuste vahe on '.($teVanus - $minuVanus). ' aastat.<br><br>';


//Maailmalõpp saabub 29.02.2016! Las PHP otsustab, kas see on võimalik.

if(checkdate(13,29,2016)) {
    echo('Maailmalõpp tuleb 29.02.2016!<br><br>');
} else {
    echo ('Maailmalõppu ei tule 29.13.2016.<br><br>');
}



//Leia, kas sul on järgmine aasta juubel?


$jargmineAasta = date('Y')+1;
$minuSynniAasta = 1996;
// mitu aastat olen vana?
$vanusAastates = date('Y')-$minuSynniAasta;

if($vanusAastates % 5 == 0) {
    echo 'Aastal'. $jargmineAasta.' sul on juubel';
} else {
    echo 'Aastal '. $jargmineAasta.' sul pole juubelit<br><br>';
}


//Koosta kood, mis tervitab sind vastavalt ajale. N: 8:00+ “Tere hommikust!”, 13:00+ “Tere päevast!” ja 17:00+ “Tere õhtust!”

$hours = date('H');
if($hours >= 8 and $hours < 13){
    echo 'Tere hommikust!';
} else if($hours >= 13 and $hours < 17) {
    echo 'Tere päevast!';
} else if($hours >= 17 or $hours > 0) {
    echo 'Tere õhtust!';
}