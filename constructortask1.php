<?php
class car
{
    public $car, $color, $model, $price;

    function __construct($car, $color, $model, $price)
    {
        $this->car = $car;
        $this->color = $color;
        $this->model = $model;
        $this->price = $price;
    }
    function detials()
    {
        return "car name is :" . $this->car . "car color is " . $this->color . "car mode is " . $this->model . "and price range :" . $this->price;
    }
}

$carss = new car("volvo", "red", 2034, 23);
echo $carss->detials();
