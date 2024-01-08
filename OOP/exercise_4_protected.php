<?php

declare(strict_types=1);

/* EXERCISE 4

Copy the code of exercise 2 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.

USE TYPEHINTING EVERYWHERE!
*/

require_once "exercise_1_classes.php";

class Beer extends Beverage
{

    protected $name;
    protected $alcoholPercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholPercentage)
    {
        parent::__construct($color, $price);

        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage()
    {
        echo "Alcoholpercentage: $this->alcoholPercentage% </br>";
    }
    public function getName()
    {
        return $this->name;
    }
}

$Duvel = new Beer("blond", 3.5, "Duvel", 8.5);
echo $Duvel->getName() . ": </br>";
$Duvel->getInfo();
$Duvel->getAlcoholPercentage();
//Don't initialize the method
