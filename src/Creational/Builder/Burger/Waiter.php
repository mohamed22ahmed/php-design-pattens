<?php

namespace src\Creational\Builder\Burger;

// Director class
class Waiter
{
    private $builder;

    public function setBuilder(BurgerBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function getBurger()
    {
        return $this->builder->getBurger();
    }

    public function constructBurger()
    {
        $this->builder->addBun();
        $this->builder->addPatty();
        $this->builder->addCheese();
        $this->builder->addToppings(array("lettuce", "tomato", "onion"));
    }
}
