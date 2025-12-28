<?php

/*

Sadra  // 20

Mostafa

Noah

Ata

*/

// Declare
// function calc($x, $y){ required arguments

//     echo $x + $y;
// }

// calc(2,4);

// function calc($y, $x = 10)
// { // optional arguments
// echo $x + $y;
// }

// calc(2,4);
// calc(23);

// function farzin($x, $y)
// {
//     return $x + $y;
// }

// function mostafa($num)
// {
//     return "My result: " . $num; 
// }

// echo mostafa(farzin(23, 32));

// scope
// $num = 15;

// function sayHello()
// {
//     global $num;
//     $num2 = 14;

//     echo $num . " this is test.";
// }

// sayHello();
// echo $num;

// $count = 0;
// function visitCount()
// {
//     static $count = 0;
//     // global $count;
//     // $count = 0;
//     return ++$count;
// }

// echo visitCount(); // 1
// echo visitCount(); // 1
// echo visitCount(); // 1
// echo visitCount(); // 1
// echo visitCount(); // 1

function sayHello(string|float $name, float $avg, ?int $age)
{
    //
}

// sayHello(123, 12.4, 27);
// sayHello([], 12.4, 27);

// 5! > 5 * 4 * 3 * 2 * 1   

// function fact($num)
// {
//     if ($num == 0) {
//         return 1;
//     }

//     if ($num > 0) {
//         return $num * fact($num - 1);
//     }
// }

// echo fact(5);

// function calcAverage($numbers, $name)
// {
//     var_dump(func_get_args());
//     exit();
//     $total = 0;
//     foreach ($numbers as $num) {
//         $total += $num;
//     }

//     return $total / 11;
// }

// $numbers = [12, 45, 78, 23, 56,43,90,11,5,67,23];
// $avg = calcAverage($numbers, 'farzin');

function addStudent(string $name = 'no name', int $age = 0, float $avg = 20.0)
{
    return "Name: $name | Age: $age | Avg: $avg";
}

echo addStudent(avg:13.5);
// echo addStudent(,,18);
// echo addStudent(18);
// echo addStudent('Mostafa', 25, 16.5);
