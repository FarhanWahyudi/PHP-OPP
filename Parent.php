<?php
    require_once 'data/Shape.php';

    use Folder\{Shape, Rectangel};

    $shape = new Shape();
    echo $shape->getCorner();

    $rectangel = new Rectangel();
    echo $rectangel->getCorner();
    echo $rectangel->getParentCorner();
?>