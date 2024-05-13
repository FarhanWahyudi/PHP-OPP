<?php
    class Manager {
        var string $name;
        var string $title;

        function __construct(string $name = '', string $title = 'manager') {
            $this->name = $name;
            $this->title = $title;
        }

        function sayHello(string $name): void /* void: tidak mengembalikan nilai */ {
            echo "hello $name, my name is manager $this->name" . PHP_EOL;
        }
    }

    class VicePresident extends Manager {
        function __construct(string $name = '') {
            // tidak wajib, tapi direkomendasi
            parent::__construct($name, 'vp');
        }
        
        function sayHello(string $name): void {
            echo "hello $name, my name is vp $this->name" . PHP_EOL;
        }
    }
?>