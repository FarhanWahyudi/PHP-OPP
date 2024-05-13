<?php
    $matches = [];
    $result = (bool)preg_match_all('/eko|awan|edy/i', 'eko kurniawan khannedy', $matches);

    var_dump($result);
    var_dump($matches);

    $sensor = preg_replace('/tai|bgst/i', '***', 'tai lo, bgst!');
    var_dump($sensor);

    $eko = preg_split('/[\s,-]/', 'eko kurniawan khannedy,programer,zaman-now');
    var_dump($eko);
?>