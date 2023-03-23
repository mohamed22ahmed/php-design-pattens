<?php

namespace src\Creational\AbstractFactory\Bank;

class DebitCard implements CardInterface
{
    public function getRecharge()
    {
        return 8000;
    }

    public function getBankBenifits()
    {
        return 800;
    }
}