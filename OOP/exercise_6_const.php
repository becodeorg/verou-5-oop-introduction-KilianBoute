<?php

declare(strict_types=1);

/* EXERCISE 6

Copy the classes of exercise 2.

TODO: Change the properties to private.
TODO: Make a const barname with the value 'Het Vervolg'.
TODO: Print the constant on the screen.
TODO: Create a function in beverage and use the constant.
TODO: Do the same in the beer class.
TODO: Print the output of these functions on the screen.
TODO: Make sure that every print is on a new line.

Use typehinting everywhere!
*/

require_once "exercise_1_classes.php";

const barname = 'Het Vervolg';
echo $barname;

class Beer extends Beverage
{

    private $name;
    private $alcoholPercentage;

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
}

$Duvel = new Beer("blond", 3.5, "Duvel", 8.5);
$Duvel->getBarname();
