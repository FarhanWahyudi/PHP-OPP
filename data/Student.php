<?php
    class Student {
        public string $id;
        public string $name;
        public int $value;
        private string $sample;

        function setSample(string $sample): void {
            $this->sample = $sample;
        }

        function __clone() {
            unset($this->sample);
        }

        function __toString() {
            return "student id: $this->id, name: $this->name, value: $this->value";
        }

        function __invoke(...$arguments) {
            $join = join(',', $arguments);
            echo "invoke student with argument $join";
        }

        function __debugInfo(): array {
            return [
                'id' => $this->id,
                'name' => $this->name,
                'value' => $this->value,
                'sample' => $this->sample,
                'author' => 'farhan wahyudi',
                'version' => '3.4.15',
            ];
        }
    }
?>