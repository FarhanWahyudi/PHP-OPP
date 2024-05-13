<?php
    require_once 'data/Person.php';

    $person = new Person('farhan', 'kraksaan');

    echo "Name: $person->name" . PHP_EOL;
    echo "Address: $person->address" . PHP_EOL;
    echo "Countty: $person->country" . PHP_EOL;
    
    $person->sayHello('Farhan');
    $person->sayHello(null);

    $person->info();
?>