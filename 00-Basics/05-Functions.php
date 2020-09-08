<?php

require "Models/Person.php";
require "Models/GunGuy.php";
require "Models/Gun.php";

// Ex 1
function appendCodelex($string) {
    echo "$string codelex\n";
}

appendCodelex("Vlad in");

// Ex 2
function multiplyNumbers($x, $y) {
    echo $x * $y . "\n";
}

multiplyNumbers(5, 10);

// Ex 3
$person = new stdClass();

$person->name = "John";
$person->surname = "Doe";
$person->age = 34;

function checkAge($person) {
    if ($person->age >= 18) {
        echo "Congrats $person->name, You're old enough!\n";
    } else {
        echo "Sorry $person->name, You're not 18...\n";
    }
}

checkAge($person);

// Ex 4
$persons =[
    'john' => new Person("John", "Doe", 34, "12/28/1987"),
    'jane' => new Person("Jane", "Doe", 17, "12/01/1999"),
    'otis' => new Person("Otis", "Otinson", 54, "02/02/1947"),
];

foreach ($persons as $person) {
    checkAge($person);
}

// Ex 5
$fruits = [
    [
        'name' => 'Strawberries',
        'weight' => 11
    ],
    [
        'name' => 'Bananas',
        'weight' => 14
    ],
    [
        'name' => 'Pineapples',
        'weight' => 5
    ],
    [
        'name' => 'Mango',
        'weight' => 1
    ],
];

$shippingCosts = [
    'below_10_kg' => '1 EUR',
    'over_10_kg' => '2 EUR'
];

function calculateShipping($fruit, $cost) {
    if ($fruit['weight'] > 10) {
        echo "The shipping cost for {$fruit['name']}, {$fruit['weight']} kg will be {$cost['over_10_kg']}.\n";
    } else {
        echo "The shipping cost for {$fruit['name']}, {$fruit['weight']} kg will be {$cost['below_10_kg']}.\n";
    }
}

foreach ($fruits as $fruit) {
    calculateShipping($fruit, $shippingCosts);
}

// Ex 6
$elements = [1, 4, 10, 0.3, "Luke, I am Your father!"];

function doubleIfInt($var) {
    if (gettype($var) === "integer") {
        return $var * 2;
    } else {
        return "Not an integer...";
    }
}

for ($i = 0; $i < count($elements); $i++) {
    echo doubleIfInt($elements[$i]) . "\n";
}

// Ex 7
$requester = new GunGuy("Bailey", 300, ["A", "B"]);

$guns = [
    'mauser' => new Gun("Mauser", 100, "A"),
    'winchester' => new Gun("Winchester", 400, "B"),
    'colt' => new Gun("Colt", 200, "C")
];

foreach ($guns as $gun) {
    if (in_array($gun->license, $requester->licenses) && $requester->cash >= $gun->price) {
        echo "The $gun->name can be purchased by $requester->name.\n";
    } elseif (! in_array($gun->license, $requester->licenses)) {
        echo "$requester->name does not have a license $gun->license.\n";
    } elseif ($gun->price > $requester->cash) {
        echo "$requester->name does not have $$gun->price.\n";
    }
}