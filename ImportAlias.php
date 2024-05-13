<?php
    require_once 'data/Conflict.php';
    require_once 'data/Helper.php';

    use Data\One\Conflict;
    use Data\Two\Conflict as Conflict2;
    use function Helper\helpMe;
    use const Helper\APPLICATION;

    $conflict1 = new Conflict();
    // $conflict2 = new Data\Two\Conflict();
    $conflict2 = new Conflict2();

    helpMe();
    echo APPLICATION . PHP_EOL;

?>