<?php

namespace src\Creational\Builder\Car\Models;

class Benz
{
    private $data = [];

    public function setPart($name, $value)
    {
        $this->data[$name] = $value;
    }
}
