<?php

namespace src\Creational\Builder\Burger;

// Product class
class Burger
{
    private $ingredients = [];

    public function addIngredient($ingredient)
    {
        $this->ingredients[] = $ingredient;
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }
}
