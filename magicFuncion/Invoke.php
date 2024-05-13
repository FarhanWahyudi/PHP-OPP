<?php
    require_once '../data/Student.php';

    $student = new Student();
    $student->id = '1';
    $student->name = 'hans';
    $student->value = 100;

    $student(1, 'hans', true);
?>