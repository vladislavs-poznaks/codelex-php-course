<?php

require "Models/Person.php";

// Ex 1
$numbers = [1, 2, 3, 4, 5, 6];

foreach ($numbers as $number) {
    echo $number . ", ";
}

echo "\n";

// Ex 2

for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . ", ";
}

echo "\n";

// Ex 3
$x = 1;

while ($x < 10) {
    echo "codelex\n";
    $x++;
}

// Ex 4
foreach ($numbers as $number) {
    if($number % 2 === 0) {
        echo "Number $number divides by 2 with no remainder.\n";
    }
}

// Ex 5

$persons =[
    'john' => new Person("John", "Doe", 34, "12/28/1987"),
    'jane' => new Person("Jane", "Doe", 27, "12/01/1999"),
    'ottis' => new Person("Ottis", "Ottinson", 54, "02/02/1947"),
];

$differentPersons = [
    'john' => [
        'name' => 'John',
        'surname' => 'Doe',
        'age' => 34,
        'birthday' => '12/28/1987'
    ],
    'jane' => [
        'name' => 'Jane',
        'surname' => 'Doe',
        'age' => 27,
        'birthday' => '12/01/1999'
    ],
    'ottis' => [
        'name' => 'Ottis',
        'surname' => 'Ottinson',
        'age' => 54,
        'birthday' => '02/02/1947'
    ],

];

// Object Looping
foreach ($persons as $person) {
    echo "$person->name $person->surname, age $person->age and birthday on $person->birthday.\n";
}

// Array Looping
foreach ($differentPersons as $differentPerson) {
    echo "{$differentPerson['name']} {$differentPerson['surname']}, age {$differentPerson['age']} and birthday on {$differentPerson['birthday']}.\n";
}
