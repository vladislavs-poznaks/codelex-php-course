<?php

class Dog {
    protected $name;
    protected $sex;

    protected $mother;
    protected $father;

    public function __construct($name, $sex, $mother = "Unknown", $father = "Unknown") {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }

    public function getFather()
    {
        return $this->father;
    }

    public function getMother()
    {
        return $this->mother;
    }

    public function hasSameMotherAs(Dog $dog) {
        return $dog->getMother() === $this->getMother();
    }
}

$max = new Dog("Max", "male", "Lady", "Rocky");
$rocky = new Dog("Rocky", "male", "Molly", "Sam");
$sparky = new Dog("Sparky", "male");
$buster = new Dog("Buster", "male", "Lady", "Sparky");
$sam = new Dog("Sam", "male");
$lady = new Dog("Lady", "female");
$molly = new Dog("Molly", "female");
$coco = new Dog("Coco", "female", "Molly", "Buster");


// Tests
echo "Should be Buster\n";
echo $coco->getFather() . "\n";

echo "Should be Unknown\n";
echo $sparky->getFather() . "\n";

echo "Should be TRUE\n";
echo $coco->hasSameMotherAs($rocky) . "\n";