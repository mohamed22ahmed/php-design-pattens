<?php

namespace src\Creational\AbstractFactory\Car;

class BenzCar implements CarInterface
{
    private $price;
    private $tax;
    public function __construct($price, $tax)
    {
        $this->price = $price;
        $this->tax = $tax;
    }

    public function calculatePrice()
    {
        return 20000 + $this->price + $this->tax;
    }
}