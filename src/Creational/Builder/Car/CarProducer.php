<?php

namespace src\Creational\Builder\Car;

class CarProducer
{
    private $builder;

    public function __construct(CarBuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function produceCar()
    {
        $this->builder->createCar();
        $this->builder->addBody();
        $this->builder->addEngine();
        $this->builder->addDoors();
        $this->builder->addWheels();

        return $this->builder->getCar();
    }
}
