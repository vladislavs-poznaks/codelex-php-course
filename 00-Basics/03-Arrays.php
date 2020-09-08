<?php

// Ex 1
$numbers = [1, 2, 3];

// Ex 2
$personArray = [
    "name" => "John",
    "surname" => "Doe",
    "age" => 50
];

var_dump($personArray);

// Ex 3
$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->surname = 50;

var_dump($person);

// Ex 4
$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];

 echo $items[0][1]['name'] . ' ' . $items[0][1]['surname'] . ' ' . $items[0][1]['age'] . "\n";

 // Ex 5
$items5 = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];

echo $items5[0][0]['name'] . ' & ' . $items[0][1]['name'] . ' ' . $items[0][1]['surname'] . "'s\n";
