<?php
/**
 * file name: challenge.php;
 * autor: anna.karutina;
 * date: 26.11.2019;
 */

//Õppeained – koosta vähemalt 5 õppeaine nimetusega massiiv. Sinu ülesandeks on see php funktsiooni sort() abil sorteerida kasvavas järjekorras ning kuvada ridade kaupa.
$ained = array(
  'aine1',
  'aine2',
  'aine3',
  'aine4',
  'aine5'
);

foreach ($ained as $aine){
  echo $aine.'<br>';
}

echo '<hr>';

//Pallivise – sul on üks massiiv nimedega ja teine palliviske tulemustega.
$nimed = array('Martin','Hardi','Juhan','Tiina','Sirje','Kaie');
$pallivisked = array(33, 32, 27, 11, 15, 28);
//Ülesande lahendamiseks tuleb sul natuke googeldada, leia:
/*
* osalejate arv (count)
* keskmine palliviske tulemus (array_sum jt.)
* parim tulemus (max)
* parima tulemuse visanud õpilase nimi (array_keys)
*/
echo '<h4>pallivise</h4>';
echo 'Osalejate arv: '.count($nimed).'<br>';
echo 'Keskmine tulemus: '.array_sum($pallivisked) / count($pallivisked).'<br>';
echo 'Parim tulemus: '.max($pallivisked).'<br>';
echo 'Parima tulemusega õpilane: '.$nimed[array_keys($pallivisked, max($pallivisked))[0]];

echo '<hr>';
//Tekita mitmemõõtmeline massiiv raamatu andmete hoidmiseks. Loo massiiv vähemalt kolmele raamatule – pealkiri, autor, žanr, ilmumisaasta.
$raamatud = array(
  array(
    'pealkiri' => 'Helmelõimed elulõngal',
    'autor' => 'Karl Puhvel',
    'žanr' => 'biograafia',
    'aasta' => 2013
  ),
  array(
    'pealkiri' => 'Helmelõimed elulõngal',
    'autor' => 'Karl Puhvel',
    'žanr' => 'biograafia',
    'aasta' => 2013
  ),
  array(
    'pealkiri' => 'Algne pealkiri',
    'autor' => 'Autor1',
    'žanr' => 'ulme',
    'aasta' => 2019
  )
);
// Ülesandeks on kuvada kõik raamatud tähestikulises järjekorras ning kui palju on raamatuid kokku. Kasuta täislauseid, näiteks:
/*
Pealkiri: Helmelõimed elulõngal
Autor: Karl Puhvel
Žanr: biograafia
Aasta: 2013
Raamatuid kokku: 3 tk
*/
sort($raamatud);

foreach ($raamatud as $raamat){
  echo 'Pealkiri: '.$raamat['pealkiri'].'<br>';
  echo 'Autor: '.$raamat['autor'].'<br>';
  echo 'Žanr: '.$raamat['žanr'].'<br>';
  echo 'Aasta: '.$raamat['aasta'].'<br>';
  echo '<br>';
}

echo 'Raamatuid kokku: '.count($raamatud).' tk';