<?php

// $std1 = 'farzin';
// $std2 = 'Sara';
// $std3 = 'Zahra';
// $std4 = 'Amir';

// index array
$students = array('farzin', 'sara', 'reza', 'Sohrab');

// echo $students[0];
// override
// $students[0] = "Farhad";
// echo $students[0];

// Add new value 1
// $students[4] = "Amir Hossein";

// Add new value 2
$students[] = "Amir Ata";

// Remove item
unset($students[1]);

print_r($students);
