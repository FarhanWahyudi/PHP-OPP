<?php
    require_once 'helper/MathHelper.php';

    // $MathHelper = new MathHelper();
    // echo $MathHelper->name;

    MathHelper::$name = 'mtk';
    echo MathHelper::$name . PHP_EOL;

    $result = MathHelper::sum(5, 5, 5);
    echo "result: $result";
?>