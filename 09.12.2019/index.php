<?php

require 'functions.php';

$menu = array(
    'Avaleht' => 'index',
    'Portfolio' => 'portfolio',
    'Kaart' => 'kaart',
    'Kontakt' => 'kontakt',
);
$pageName = $_GET['leht'];
pageMenu($menu);
pageContent($_GET['leht'], $menu);

?>