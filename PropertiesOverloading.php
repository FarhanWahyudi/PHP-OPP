<?php
    class Zero {
        private array $properties = [];

        function __get($name) {
            return $this->properties[$name];
        }

        function __set($name, $value) {
            $this->properties[$name] = $value;
        }

        function __isset($name): bool {
            return isset($this->properties[$name]);
        }

        function __unset($name) {
            unset($this->properties[$name]);
        }

        function __call($name, $argument) {
            echo 'call funcion' . PHP_EOL;
        }

        static function __callStatic($name, $argument) {
            echo 'call static function' . PHP_EOL;
        }
    }

    $zero = new Zero();
    $zero->firstname = 'farhan';
    $zero->lastname = 'wahyu';
    var_dump(isset($zero->firstname));
    echo $zero->firstname . PHP_EOL;
    echo $zero->lastname . PHP_EOL;
    
    $zero->sayHello('farhan');
    Zero::sayHello('farhan');
?>