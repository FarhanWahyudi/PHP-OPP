<?php
    require_once 'data/Person.php';

    $person = new Person('farhan', 'kraksaan');

    $person->name = 'farhan';
    $person->address = 'kraksaan';

    var_dump($person);

    echo "Name: $person->name" . PHP_EOL;
    echo "Address: $person->address" . PHP_EOL;
    echo "Countty: $person->country" . PHP_EOL;

    $person2 = new Person('farhan', 'kraksaan');

    $person2->name = 'wahyu';
    $person2->address = 'kraksaan';
    $person2->country = 'indonesia';

    echo "Name: $person2->name" . PHP_EOL;
    echo "Address: $person2->address" . PHP_EOL;
    echo "Countty: $person2->country" . PHP_EOL;
?>