<?php
//    Õppeained –
// koosta vähemalt 5 õppeaine nimetusega massiiv. Sinu ülesandeks on see php
// funktsiooni sort() abil sorteerida kasvavas järjekorras ning kuvada ridade kaupa.

$tunnid = array('matemaatika', 'kunstiajalugu', 'kirjandus', 'muusikaajalugu', 'biokeemia');
//sorteerimine
sort($tunnid);
foreach($tunnid as $tund){
    echo "$tund <br>";
}
?>