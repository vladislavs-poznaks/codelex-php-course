<?php

$outputFileName = readline("Enter filename (with extension): ");


$inputFile = fopen("input.txt", "r") or die("Unable to open input file!");
$data = explode(',', fread($inputFile,filesize("input.txt")));
fclose($inputFile);

$person = new stdClass();
$person->name = $data[0];
$person->surname = $data[1];
$person->age = $data[2];

$objData = serialize($person);

$outputFile = fopen($outputFileName, "w") or die("Unable to open output file!");;
fwrite($outputFile, $objData);
fclose($outputFile);

echo "All done!\n";