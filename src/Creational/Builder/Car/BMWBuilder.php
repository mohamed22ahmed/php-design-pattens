<?php

namespace src\Creational\Builder\Car;

use src\Creational\Builder\Car\Models\BMW;

class BMWBuilder implements CarBuilderInterface
{
    private $type;

    public function createCar()
    {
        $this->type = new BMW();
    }

    public function addBody()
    {
        $this->type->setPart('body', 'BMW Body');
    }
    public function addEngine()
    {
        $this->type->setPart('engine', 'BMW engine');
    }
    public function addDoors()
    {
        $this->type->setPart('door', 'BMW door');
    }
    public function addWheels()
    {
        $this->type->setPart('wheels', 'BMW wheels');
    }
    public function getCar()
    {
        return $this->type;
    }
}
