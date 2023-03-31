<?php

namespace src\Creational\Builder\Burger;

// Concrete builder class
class VeggieBurgerBuilder implements BurgerBuilder
{
    private $burger;

    public function __construct()
    {
        $this->burger = new Burger();
    }

    public function addBun()
    {
        $this->burger->addIngredient("honey wheat bun");
    }

    public function addPatty()
    {
        $this->burger->addIngredient("veggie patty");
    }

    public function addCheese()
    {
        $this->burger->addIngredient("Swiss cheese");
    }

    public function addToppings($toppings)
    {
        foreach ($toppings as $topping) {
            $this->burger->addIngredient($topping);
        }
    }

    public function getBurger()
    {
        return $this->burger;
    }
}
