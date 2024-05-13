<?php
    require_once 'data/SayGoodBye.php';

    use Data\Traits\{Person};
    $person = new Person();
    $person->hello('farhan');
    $person->goodBye('farhan');

    $person->name = 'yudi';
    var_dump($person->name);
    $person->run();
?>