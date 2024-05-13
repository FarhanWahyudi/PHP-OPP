<?php
    interface HelloWorld {
        function sayHello(): void;
    }

    // class SampleHelloWorld implements HelloWorld {
    //     function sayHello(): void {
    //         echo 'hello world' . PHP_EOL;
    //     }
    // }

    $helloWorld = new class('farhan') implements HelloWorld {
        public string $name;

        function __construct(string $name) {
            $this->name = $name;
        }

        function sayHello(): void {
            echo "hello $this->name" . PHP_EOL;
        }
    };
    $helloWorld->sayHello();
?>