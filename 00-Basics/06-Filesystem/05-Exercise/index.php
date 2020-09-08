<?php

$userId = readline("Enter User ID: ");
$userFound = false;

$inputFile = fopen("db.csv", "r") or die("Unable to open input file!");

while (($data = fgetcsv($inputFile, 0, ",")) !== FALSE)
{
    if ($data[0] === $userId) {
        echo "$data[1] $data[2], age $data[3]. User ID=$data[0].\n";
        $userFound = true;
    }
}

fclose($inputFile);

if (! $userFound) {
    echo "Sorry, there is no user with an ID of $userId.\n";
}