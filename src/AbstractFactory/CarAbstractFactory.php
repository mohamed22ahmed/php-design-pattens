<?php

namespace src\AbstractFactory;

class CarAbstractFactory
{
    private $price;
    private $tax = 5000;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function createBMWCar(){
        return new BMWCar($this->price);
    }

    public function createBenzCar(){
        return new BenzCar($this->price, $this->tax);
    }
}