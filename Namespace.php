<?php
    require_once 'data/Conflict.php';
    require_once 'data/Helper.php';

    $conflict1 = new Data\One\conflict();
    $conflict2 = new Data\Two\conflict();

    Helper\helpMe();
    echo Helper\APPLICATION . PHP_EOL;

?>