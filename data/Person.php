<?php
    class Person {
        const AUTHOR = 'Hanss';

        var string $name;
        var ?string $address; //?: berfungsi agar properties dapat di isi null
        var string $country = 'Japan'; //japan adalah default value

        function __construct(string $name, ?string $address) {
            $this->name = $name;
            $this->address = $address;
        }
        
        function sayHello(?string $name) {
            if(is_null($name)) {
                echo "hi, my name is $this->name" . PHP_EOL;;
            } else {
                echo "hi $name, my name is $this->name" . PHP_EOL;
            };
        }

        function info() {
            echo "Author: " . self::AUTHOR . PHP_EOL;
        }

        function __destruct() {
            echo "object person $this->name is destroyed" . PHP_EOL;
        }
    };
?>