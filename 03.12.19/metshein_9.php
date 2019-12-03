<?php
// nime teisendamine lowercase ja siis first uppercase;
    $nimi = $_GET['nimi'];
    $nimiKor = strtolower($nimi);
    $nimiAppr = ucfirst($nimiKor);
    echo $nimiAppr.'<br><br><hr><br>';

    // Ülesandeks on etteantud teksti iga tähe järgi lisada punkt.
    //Näiteks: sisend–>stalker; väljund–>S.T.A.L.K.E.R.

    $sisend = $_GET['sisend'];
    $sisendUp = strtoupper($sisend);
    for ($indeks = 0; $indeks<(strlen($sisendUp)); $indeks++){
        $taht = $sisendUp[$indeks];
        echo $taht.'.';
    }
    echo '<br><br><hr><br>';
    //Koosta tekstiväli, mis kuvab kasutaja sisestatud sõnumeid. Kasutaja ropud sõnad asendatakse tärnidega.
    //Näiteks: sisend–>Sa oled täielik noob; väljund–>Sa oled täielik ***

    $tekst = $_GET['tekst'];
    $denied = array('noob', 'kurat', 'kys');
    $replace = ('***');
    echo str_replace($denied, $replace, $tekst);

    echo '<br><br><hr><br>';

    //Kasutajalt saadud eesnime ja perenime põhjal luuakse talle email lõpuga @hkhk.edu.ee.
    // Kusjuures täpitähed asendatakse ä->a, ö->o, ü->y, õ->o ja kogu email on väikeste tähtedega
    //Näiteks: sisend–>Ülle ja Doos; väljund–>ylle.doos@hkhk.edu.ee

    $eesnimi = $_GET['eesnimi'];
    $perenimi = $_GET['perenimi'];

    $wrLetters = array('õ', 'ä', 'ö', 'ü');
    $nwLetters = array('o', 'a', 'o','y');

    $nwEesnimi = strtolower(str_replace($wrLetters, $nwLetters, $eesnimi));
    $nwPerenimi = strtolower(str_replace($wrLetters, $nwLetters, $perenimi));

    echo $nwEesnimi.'.'.$nwPerenimi.'@hkhk.edu.ee';