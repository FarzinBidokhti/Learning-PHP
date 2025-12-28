<?php

// loop

// for($i=0;$i < 10; $i++){
//     echo "<p style='background-color: yellow;'>$i</p>";
// }

// $names = ['Farzin', 'Mostafa', 'Arash', 'Mmahdi', 'taha', 'ata'];

// echo $names[0] . "<br>";
// echo $names[1] . "<br>";
// echo $names[2] . "<br>";
// echo $names[3] . "<br>";
// echo $names[4] . "<br>";
// echo $names[5] . "<br>";

// for ($i= 0; $i <= 5; $i++){
//     echo $names[$i] . "<br>";
// }

// for ($i= 0; $i <= (count($names) -1); $i++){
//     echo $names[$i] . "<br>";
// }

// $i = 100;
// while ($i < (count($names))) {
//     echo $names[$i] . "<br>";
//     $i++;
// }

// do {
//     echo $names[0] . "<br>";
//     $i++;
// } while ($i < (count($names)));

// $names = ['Farzin', 'Mostafa', 'Arash', 'Mmahdi', 'taha', 'ata'];

$lessons = [
    'riazi' => [12, 15, 20],
    'olom'  => [20, 20, 20],
    'dini'  => [23, 25, 30]
];

// foreach($names as $name){
//     echo $name . "<br>";
// }

foreach ($lessons as $key => $value) {
    echo $key . "<br>";
    foreach ($value as $item) {
        echo $item . "<br>";
    }
    echo "<hr>";
}
