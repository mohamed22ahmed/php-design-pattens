<?php

namespace src\Creational\Builder\Car\Models;

class BMW
{
    private $data = [];

    public function setPart($name, $value)
    {
        $this->data[$name] = $value;
    }
}
