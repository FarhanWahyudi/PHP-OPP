<?php
    class Programer {
        public string $name;

        public function __construct(string $name) {
            $this->name = $name;
        }
    }

    class FrontEndProgramer extends Programer {

    }

    class BackEndProgramer extends Programer {

    }

    class Company {
        public Programer $programer;
    }
    
    function sayHelloProgramer(Programer $programer) {
        if($programer instanceof BackEndProgramer) {
            echo "hello be $programer->name" . PHP_EOL;
        } else if($programer instanceof FrontEndProgramer) {
            echo "hello fe $programer->name" . PHP_EOL;
        } else if($programer instanceof Programer) {
            echo "hello pr $programer->name" . PHP_EOL;
        };

        // if($programer instanceof BackEndProgramer) {
        //     echo "hello be $programer->name" . PHP_EOL;
        // }
        // if($programer instanceof FrontEndProgramer) {
        //     echo "hello be $programer->name" . PHP_EOL;
        // }
        // if($programer instanceof BackEndProgramer) {
        //     echo "hello be $programer->name" . PHP_EOL;
        // }
    }
?>