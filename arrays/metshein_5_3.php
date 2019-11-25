<?php
//Tekita mitmemõõtmeline massiiv raamatu andmete hoidmiseks.
// Loo massiiv vähemalt kolmele raamatule – pealkiri, autor, žanr, ilmumisaasta.
// Ülesandeks on kuvada kõik raamatud tähestikulises järjekorras ning kui palju on raamatuid kokku.

//Pealkiri: Helmelõimed elulõngal
//Autor: Karl Puhvel
//Žanr: biograafia
//Aasta: 2013
//Raamatuid kokku: 3 tk

//mitmemõõtmelised massiivid
$raamatud = array(
    'Eesti Loodus'=>array('autor'=>'UT Koondkirjandus','zanr'=>'teaduskirjandus', 'aasta'=>1990, 'laos'=>7),
    'Minu Alaska'=>array('autor'=>'Reena Koll','zanr'=>'biograafia', 'aasta'=>2001, 'laos'=>13),
    'Silverthorn'=>array('autor'=>'Raymond Feist','zanr'=>'fantaasiakirjandus', 'aasta'=>2013, 'laos'=>30),
);
ksort($raamatud);
foreach ($raamatud as $raamat=>$andmed){
    echo "$raamat - ";
    foreach($andmed as $detailid){
        echo "$detailid ";
    }
    echo "<br>";
}

?>