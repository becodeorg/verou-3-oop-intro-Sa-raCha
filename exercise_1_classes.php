<?php

declare(strict_types=1);


// TODO: Create a class beverage.
class Beverage
{
    // TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
    public $color;
    public $price;
    public $temperature;

    public function __construct($color, $price, $temperature)
    {
        // TODO: Have a default value "cold" in the construct for temperature.
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;   
    }
        // Remember for now we will use properties and methods that can be accessed from everywhere.
        // TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."
    public function getInfo()
    {
        echo "This beverage is $this->temperature and $this->color.";
    }
}       
// TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
$coke = new beverage('black', 2, 'cold');
//  print the getInfo on the screen.
// TODO: Print the temperature on the screen.   
$coke->getInfo();
// USE TYPEHINTING EVERYWHERE!
 
