<?php

namespace src\Creational\AbstractFactory;

use src\Creational\AbstractFactory\Bank\CreditCard;
use src\Creational\AbstractFactory\Bank\DebitCard;

class BankFactory implements AbstractFactory
{
    private $cardType;
    public function __construct($cardType = 'credit')
    {
        $this->cardType = $cardType;
    }

    public function getBank()
    {
        if($this->cardType == 'credit')
            return new CreditCard();
            
        return new DebitCard();
    }

    public function getCar(){
        return null;
    }
}