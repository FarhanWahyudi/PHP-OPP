<?php
    require_once 'Data/Product.php';

    $product = new Product('Apple', 20000);

    echo $product->getName();
    echo $product->getPrice();

    $productDummy = new ProductDummy('apel', 100);

    $productDummy->info();
?>