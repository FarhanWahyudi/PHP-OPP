<?php
    namespace Data\Traits;

    trait SayGoodBye {
        public function goodBye(?string $name): void {
            if(is_null($name)) {
                echo 'good bye' . PHP_EOL;
            } else {
                echo "good bye $name" . PHP_EOL;
            }
        }
    }

    trait SayHello {
        public function hello(?string $name): void {
            if(is_null($name)) {
                echo 'hello' . PHP_EOL;
            } else {
                echo "hello $name" . PHP_EOL;
            }
        }
    }

    trait HasName {
        public string $name;
    }

    trait CanRun {
        public abstract function run(): void;
    }

    class ParentPerson {
        function goodBye(?string $name): void {
            echo 'goodbye in person' . PHP_EOL;
        }

        function hello(?string $name): void {
            echo 'hello in person' . PHP_EOL;
        }
    }

    trait All {
        use SayGoodBye, SayHello, HasName, CanRun {
            // goodBye as private;
            // hello as private;
        }
    }

    class Person extends ParentPerson {
        use All;

        function run(): void {
            echo "person $this->name is running";
        }
    }
?>