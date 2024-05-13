<?php
    require_once 'data/Category.php';

    $category = new Category();
    $category->setName('loq');
    $category->setName('');
    $category->setExpensive(true);

    echo "name: {$category->getName()}" . PHP_EOL;
    echo "expensive: {$category->isExpensive()}" . PHP_EOL;
?>