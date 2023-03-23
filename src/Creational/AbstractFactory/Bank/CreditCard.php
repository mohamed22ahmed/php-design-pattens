<?php

namespace src\Creational\AbstractFactory\Bank;

class CreditCard implements CardInterface
{
    public function getRecharge()
    {
        return 10000;
    }

    public function getBankBenifits()
    {
        return 1000;
    }

    public function buyProducts($amount){
        return 10000-$amount;
    }
}
