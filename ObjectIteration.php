<?php
    class Data implements IteratorAggregate {
        var string $first = 'first';
        public string $second = 'second';
        protected string $third = 'third';
        private string $forth = 'forth';

        // function getIterator() {
        //     $array = [
        //         'first' => $this->first,
        //         'second' => $this->second,
        //         'third' => $this->third,
        //         'forth' => $this->forth,
        //     ];
            
        //     return new ArrayIterator($array);
        // }

        function getIterator() {
                yield 'first' => $this->first;
                yield 'second' => $this->second;
                yield 'third' => $this->third;
                yield 'forth' => $this->forth;
        }
    }

    $data = new Data();
    foreach($data as $property => $value) {
        echo "$property: $value" . PHP_EOL;
    }
?>