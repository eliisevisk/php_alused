# Ülesanded veebilehelt [metshein.com](www.metshein.com)

## Massiivid

### 1. ülesanne:
* sort() funktsiooni kasutamine
``` 
    $tunnid = array('matemaatika', 'kunstiajalugu', 'kirjandus', 'muusikaajalugu', 'biokeemia');
    //sorteerimine
    sort($tunnid);
    foreach($tunnid as $tund){
        echo "$tund <br>";

```

* * väljastab  >>  biokeemia kirjandus kunstiajalugu matemaatika muusikaajalugu

### 2. Ülesanne
* Erinevad array sorteerimise lahedused
``` 
$average = array_sum($tulemused)/count($tulemused);
echo 'Visetel osales '.count($viskajad). ' noormeest. <br><br>';
echo 'Keskmine visete tulemus oli '.$average.' meetrit <br><br>';
echo 'Parima viske tulemus oli ' .max($tulemused). ' meetrit. <br><br>';

$parimIndeks = (array_keys($tulemused, max($tulemused)));
echo 'Parima tulemuse viskas '.$viskajad[$parimIndeks[0]]; 
``` 

### 3. Ülesanne
* sort() funktsioonide liigid ning nende kasutamine. Mitmemõõdulised massiivid.

```
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
```

* Väljastab tähestikujärjekorras raamatute pealkirjad sidekriipsuga eraldatult autorist jm andmetest.