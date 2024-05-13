<?php
    $array = [
        'firstname' => 'farhan',
        'lasstname' => 'wahyu',
    ];

    $object = (object)$array;

    var_dump($object);
    echo "firstname: $object->firstname" . PHP_EOL;
    echo "lasstname: $object->lasstname" . PHP_EOL;

    $arraylagi = (array)$object;
    var_dump($arraylagi);

    require_once 'data/Person.php';

    $person = new Person('farhan', null);
    var_dump($person);

    $personArray = (array)$person;
    var_dump($personArray);
?>