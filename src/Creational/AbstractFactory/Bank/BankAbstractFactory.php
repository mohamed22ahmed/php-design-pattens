<?php

namespace src\Creational\AbstractFactory\Bank;

use src\Creational\AbstractFactory\Bank\CreditCard;
use src\Creational\AbstractFactory\Bank\DebitCard;

class BankAbstractFactory
{
    public function getCreditCard(){
        return new CreditCard();
    }

    public function getDebitCard(){
        return new DebitCard();
    }
}