<?php
    require_once '../data/Student.php';

    $student = new Student();
    $student->id = '1';
    $student->name = 'hans';
    $student->value = 100;
    $student->setSample('hans');

    var_dump($student);
?>