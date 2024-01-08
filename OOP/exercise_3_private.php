<?php

declare(strict_types=1);

/* EXERCISE 3

TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new 
color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and 
have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

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

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function beerInfo()
    {
        echo "Hi i'm $this->name and have an alcochol percentage of $this->alcoholPercentage
         and I have a $this->color color.";
    }
}

$Duvel = new Beer("blond", 3.5, "Duvel", 8.5);
echo $Duvel->getName() . ":</br>";
$Duvel->getInfo();
$Duvel->getAlcoholPercentage();
$Duvel->setColor("light");
$Duvel->beerInfo();
