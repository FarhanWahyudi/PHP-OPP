<?php
    require_once 'Animal.php';

    interface AnimalShelter {
        function adopt(string $name): Animal;
    }

    class CatShelter implements AnimalShelter {
        function adopt(string $name): Cat {
            $cat = new Cat();
            $cat->name = $name;
            return $cat;
        }
    }

    class DogShelter implements AnimalShelter {
        function adopt(string $name): Dog {
            $dog = new Dog();
            $dog->name = $name;
            return $dog;
        }
    }
?>