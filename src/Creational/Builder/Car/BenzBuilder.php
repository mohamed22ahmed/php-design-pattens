<?php

namespace src\Creational\Builder\Car;

use src\Creational\Builder\Car\Models\Benz;

class BenzBuilder implements CarBuilderInterface
{
    private $type;

    public function createCar()
    {
        $this->type = new Benz();
    }

    public function addBody()
    {
        $this->type->setPart('body', 'Benz Body');
    }
    public function addEngine()
    {
        $this->type->setPart('engine', 'Benz engine');
    }
    public function addDoors()
    {
        $this->type->setPart('door', 'Benz door');
    }
    public function addWheels()
    {
        $this->type->setPart('wheels', 'Benz wheels');
    }
    public function getCar()
    {
        return $this->type;
    }
}
