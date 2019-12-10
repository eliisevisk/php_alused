<?php

function connection($host, $user, $pass, $dbname){
    $link = mysqli_connect($host, $user, $pass, $dbname);
    if ($link === false){
        // veateade probleemi korral
        echo ' Probleem andmebaasi ühendusega <br>';
        exit;
    };

    mysqli_set_charset($link, 'utf-8');
    return $link; // tagastame edaspidiseks kasutamiseks aktiivse ühenduse lingi
}

//
function query($sql, $link){
    $result = mysqli_query($link, $sql);
    if($result === false){
        echo 'probleem päringuga <b> '.$sql. '</b><br>';
    }
    // kui $result tagastab 'true'
    return $result;
};
//andmete päringute jaoks fnc k'skude SELECT, SHOW, DESCRIBE ja EXPLAIN jaoks
function getData($sql, $link){
    $result = query($sql, $link); // saadame päringu fnc abil
    // loome tühja massiivi kuhu andmed hakkavad minema
    $data = array();
    // loeme igast reast andmed ja salvestame eelloodud arraysse
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $data[] = $row;
    }
    // juhul kui massiiv on tyhi, oli andmete lugemise probleem.
    if(count($data) == 0){
        return false;
    }
    //tagastame andmed mis saime k2tte
    return $data;
}
