<?php
    require_once 'data/Student.php';

    $student = new Student();
    $student->id = '1';
    $student->name = 'hans';
    $student->value = 100;
    $student->setSample('xxx');

    var_dump($student);

    $student2 = clone $student;

    // manual
    // $student2 = new Student();
    // $student2->id = $student->id;
    // $student2->name = $student->name;
    // $student2->value = $student->value;
    // $student2->sample = $student->sample;

    var_dump($student2);
?>