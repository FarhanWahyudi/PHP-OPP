<?php
    $dateTime = new DateTime();
    $dateTime->setDate(2005, 03, 31);
    $dateTime->setTime(10, 10, 10);

    $dateTime->add(new Dateinterval('P1Y'));

    $minusTwoYear = new Dateinterval('P2Y');
    $minusTwoYear->invert = true;
    $dateTime->add($minusTwoYear);

    var_dump($dateTime);
    
    $now = new DateTime();
    $now->setTimezone(new DateTimeZone('America/Toronto'));
    var_dump($now);

    $string = $now->format('Y-m-d H:i:s');
    echo "format waktu saat ini: $string";

    $date = DateTime::createFromFormat('Y-m-d H:i:s', '2024-01-20 10:10:10', new DateTimeZone('Asia/Jakarta'));
    if($date) {
        var_dump($date);
    } else {
        echo 'format salah';
    }
    ?>