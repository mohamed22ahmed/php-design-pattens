<?php

namespace src\Creational\Builder\Car;

interface CarBuilderInterface
{
    public function createCar();
    public function addBody();
    public function addEngine();
    public function addDoors();
    public function addWheels();
    public function getCar();
}
