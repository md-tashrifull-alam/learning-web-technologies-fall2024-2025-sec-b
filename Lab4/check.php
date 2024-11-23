<?php

    $studentsData = file_get_contents('students.xml');
    //echo $studentsData;

    $students = new SimpleXMLElement($studentsData);
    echo $students->student[0]->name;
?>