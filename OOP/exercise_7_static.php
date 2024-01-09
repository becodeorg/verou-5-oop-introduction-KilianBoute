<?php

declare(strict_types=1);

/* EXERCISE 7

Copy your solution from exercise 6

TODO: Make a static property in the Beverage class that can only be accessed from inside the class called address which has the value "Melkmarkt 9, 2000 Antwerpen".
TODO: Print the address without creating a new instant of the beverage class 2 times in two different ways.

Use typehinting everywhere!
*/

require_once "exercise_1_classes.php";

const barname = 'Het Vervolg';
echo barname;

class Beer extends Beverage
{

    private $name;
    private $alcoholPercentage;

    private static $adress = "Melkmarkt 9, 2000 Antwerpen";

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

    public function getBarname()
    {
        echo barname;
    }

    public function getAdress()
    {
        echo $this->adress;
    }
}

$Duvel = new Beer("blond", 3.5, "Duvel", 8.5);
$Duvel->getBarname();
