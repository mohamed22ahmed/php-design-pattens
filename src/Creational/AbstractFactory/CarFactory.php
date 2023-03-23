<?php

namespace src\Creational\AbstractFactory;

use src\Creational\AbstractFactory\Car\BenzCar;
use src\Creational\AbstractFactory\Car\BMWCar;

class CarFactory implements AbstractFactory
{
    private $carType;
    public function __construct($carType = 'BMW')
    {
        $this->carType = $carType;
    }

    public function getBank()
    {
        return null;
    }

    public function getCar()
    {
        if($this->carType == 'BMW')
            return new BMWCar(30000);
            
        return new BenzCar(30000, 2000);
    }   
}