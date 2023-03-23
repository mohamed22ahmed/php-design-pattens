<?php

namespace src\Creational\AbstractFactory\Car;

class BMWCar implements CarInterface
{
    private $price;
    public function __construct($price)
    {
        $this->price = $price;
    }

    public function calculatePrice()
    {
        return 10000 + $this->price;
    }
}