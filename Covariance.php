<?php
    require_once 'data/Animal.php';
    require_once 'data/AnimalShelter.php';
    require_once 'data/Food.php';

    $catShelter = new CatShelter();
    $cat = $catShelter->adopt('luna');
    $cat->eat(new AnimalFood());
    
    $dogShelter = new DogShelter();
    $dog = $dogShelter->adopt('heli');
    $dog->eat(new Food());

?>