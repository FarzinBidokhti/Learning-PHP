<?php

// Associative array

// $tahaAge           = 16;
// $tahaFatherName    = "Hassan";
// $tahaAvg           = 20;
// $tahaFavoriteColor = "Red";

// $AmirAtaAge           = 17;
// $AmirAtaFatherName    = "Reza";
// $AmirAtaAvg           = 20;
// $AmirAtaFavoriteColor = "Blue";

$taha = [
    "age"        => 16,
    "fatherName" => "Hassan",
    "avg"        => 20,
    "color"      => "Red"
];

$ata = [
    "age"        => 17,
    "fatherName" => "Reza",
    "avg"        => 20,
    "color"      => "Blue"
];

// echo $ata['fatherName'];
// $ata['fatherName'] = "Alireza";
// echo $ata['fatherName'];

$students = [
    [
        "name"       => 'Taha',
        "age"        => 16,
        "fatherName" => "Hassan",
        "avg"        => 20,
        "color"      => "Red"
    ],
    [
        "name"       => 'Ata',
        "age"        => 17,
        "fatherName" => "Reza",
        "avg"        => 20,
        "colors"     => ['red', 'blue']
    ],
    [
        "name"       => 'Sara',
        "age"        => 17,
        "fatherName" => "Reza",
        "avg"        => 20,
        "color"      => "Blue"
    ],
];

echo $students[0]['name'];
echo $students[0]['age'];
