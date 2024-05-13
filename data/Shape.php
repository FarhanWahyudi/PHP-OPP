<?php
    namespace Folder;

    class Shape {
        function getCorner() {
            return 0;
        }
    }

    class Rectangel extends Shape {
        function getCorner() {
            return 4;
        }

        function getParentCorner() {
            return parent::getCorner();
        }
    }
?>