<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use src\AbstractFactory\BenzCar;
use src\AbstractFactory\BMWCar;
use src\AbstractFactory\CarAbstractFactory;

class AbstractFactoryTest extends TestCase
{
    public function test_can_create_BMW_car()
    {
        $car = new CarAbstractFactory(10000);
        $bmw = $car->createBMWCar();
        $this->assertInstanceOf(BMWCar::class, $bmw);
        $this->assertEquals($bmw->calculatePrice(), 20000);
    }

    public function test_can_create_Benz_car()
    {
        $car = new CarAbstractFactory(10000);
        $benz = $car->createBenzCar();

        $this->assertInstanceOf(BenzCar::class, $benz);
    }
}