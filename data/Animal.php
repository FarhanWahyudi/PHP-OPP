<?php
    require_once 'Food.php';

    abstract class Animal {
        public string $name;

        abstract function run(): void;

        abstract public function eat(AnimalFood $animalFood): void;
    }

    class Cat extends Animal {
        function run(): void {
            echo "cat $this->name is running";
        }

        public function eat(AnimalFood $animalFood): void {
            echo 'cat is eating' . PHP_EOL;
        }
    }

    class Dog extends Animal {
        function run(): void {
            echo "dog $this->name is running";
        }

        public function eat(Food $animalFood): void {
            echo 'dog is eating' . PHP_EOL;
        }
    }
?>