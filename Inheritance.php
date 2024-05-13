<?php
    require_once 'data/Manager.php';

    $manager = new Manager();
    $manager->name = 'Farhan';
    $manager->sayHello('wahyu');

    $vicePresident = new VicePresident();
    $vicePresident->name = 'Farhan';
    $vicePresident->sayHello('yudi');
?>