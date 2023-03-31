<?php

namespace src\Creational\Builder\Burger;

// builder unterface
interface BurgerBuilder
{
    public function addBun();
    public function addPatty();
    public function addCheese();
    public function addToppings($toppings);
}
