<?php
    require_once 'data/Conflict.php';
    require_once 'data/Helper.php';

    use Data\One\{Conflict as Conflict1, Sample as Sample1, Dummy as Dummy1};
    use Data\Two\Conflict as Conflict2;
    use function Helper\helpMe;
    use const Helper\APPLICATION;

    $conflict1 = new Conflict1();
    $Sample1 = new Sample1();
    $Dummy1 = new Dummy1();
    $conflict2 = new Conflict2();

    helpMe();
    echo APPLICATION . PHP_EOL;

?>