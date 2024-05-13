<?php
    class MathHelper {
        static public string $name = 'mathhelper';

        static function sum(int...$numbers): int {
            $total = 0;
            foreach($numbers as $number) {
                $total += $number;
            }
            return $total;
        }
    }
?>