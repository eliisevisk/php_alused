<?php

if(empty($_SESSION['kasutaja'])){
    echo '<a href="add.php">Registreeri</a>&nbsp;&nbsp;&nbsp;&nbsp;';
    echo '<a href="login.php">Logi Sisse</a>';
} else {
    echo 'Tere tulemast'.$_SESSION['kasutaja'];
}
