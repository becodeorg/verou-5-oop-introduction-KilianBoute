<?php

declare(strict_types=1);

/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/

class Beverage
{
    private $color;
    private $price;
    private $temperature;

    public function __construct(string $color, float $price)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = !empty($temperature) ? $this->temperature : "cold";
    }

    public function getInfo()
    {
        echo "This beverage is $this->temperature and $this->color. </br>";
    }

    public function setPrice(float $price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

$Cola = new Beverage("black", 2);
echo "Cola: </br>";
$Cola->getInfo();
$Cola->setPrice(3.5);
echo "Price: " . $Cola->getPrice();
