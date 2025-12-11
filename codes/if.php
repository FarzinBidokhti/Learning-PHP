<?php

// if(condition,conditions){
// }

/*

1) =
2) + - * / %
3) > < >= <= == === ! !== !===
4) or and not xor

*/

// $name = "Sadra";

// if ($name == 'Ata') {
//     echo "Hello Ata";
// }

// if ($name = 'Ata') {
//     echo "Hello Ata";
// }

// if (false) {
//     echo "Hello Ata";
// }

// $isRain = "false";

// if ($isRain) {
//     echo "Use Umbrella";
// }

// if(){

// }else{

// }

// if(){

// }elseif(){

// }

// Ternary operator

// $name = "AmirHossein";
// if ($name == "AmirHossein") {
//     echo "Hello Amir! Woooooooow!!!!! 💕";
// } else {
//     echo "User not found!";
// }

// (condition, s)? true : false;
// echo ($name == 'AmirHossein') ?  "Hello Amir! Wow!!!!! 💕" : "User not found!";

// echo $name ?: $name= "Please Enter your Name";
// echo $name;

// Null Coalescing
// $status = null;
// echo $status ?? "False";

// Switch
$grade = "B";

switch($grade){
    case "A":
        echo "A";
        break;
    case "B":
        echo "B";
        continue;
    default:
        echo "wrong Grade";
}
