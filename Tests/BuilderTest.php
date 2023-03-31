<?php

use PHPUnit\Framework\TestCase;
use src\Creational\Builder\Burger\VeggieBurgerBuilder;
use src\Creational\Builder\Burger\Waiter;

class BuilderTest extends TestCase
{
    public function test_can_create_burger(){
        $veggieBuilder = new VeggieBurgerBuilder();
        $waiter = new Waiter();

        $waiter->setBuilder($veggieBuilder);
        $waiter->constructBurger();
        $burger = $waiter->getBurger();
        $ingredients = $burger->getIngredients();
        print_r($ingredients);
        $this->assertTrue(true);
        // echo "Veggie burger ingredients: " . implode(", ", $ingredients);

    }
}