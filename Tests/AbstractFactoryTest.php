<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use src\Creational\AbstractFactory\Bank\CreditCard;
use src\Creational\AbstractFactory\Bank\BankAbstractFactory;
use src\Creational\AbstractFactory\Bank\DebitCard;
use src\Creational\AbstractFactory\BankFactory;
use src\Creational\AbstractFactory\Car\BenzCar;
use src\Creational\AbstractFactory\Car\BMWCar;
use src\Creational\AbstractFactory\Car\CarAbstractFactory;
use src\Creational\AbstractFactory\CarFactory;

class AbstractFactoryTest extends TestCase
{
    public function test_can_create_BMW_car()
    {
        $car = new CarAbstractFactory(10000);
        $bmw = $car->createBMWCar();
        $this->assertInstanceOf(BMWCar::class, $bmw);
        $this->assertEquals($bmw->calculatePrice(), 20000);
    }

    public function test_can_create_Benz_car()
    {
        $car = new CarAbstractFactory(10000);
        $benz = $car->createBenzCar();

        $this->assertInstanceOf(BenzCar::class, $benz);
        $this->assertEquals($benz->calculatePrice(), 35000);
    }

    public function test_can_create_credit_card()
    {
        $bank = new BankAbstractFactory();
        $credit = $bank->getCreditCard();
        $this->assertInstanceOf(CreditCard::class, $credit);
        $this->assertEquals($credit->getBankBenifits(), 1000);
        $this->assertEquals($credit->getRecharge(), 10000);
        $this->assertEquals($credit->buyProducts(2000), 8000);
    }

    public function test_can_create_debit_card()
    {
        $bank = new BankAbstractFactory();
        $debit = $bank->getDebitCard();
        $this->assertInstanceOf(DebitCard::class, $debit);
        $this->assertEquals($debit->getBankBenifits(), 800);
        $this->assertEquals($debit->getRecharge(), 8000);
    }

    public function test_calling_card_from_general_abstract_factory()
    {
        $bank = new BankFactory('credit');
        $credit = $bank->getBank();
        $this->assertInstanceOf(CreditCard::class, $credit);
        $this->assertEquals($credit->getBankBenifits(), 1000);
        $this->assertEquals($credit->getRecharge(), 10000);
        $this->assertEquals($credit->buyProducts(2000), 8000);

        $bank = new BankFactory('debit');
        $debit = $bank->getBank();
        $this->assertInstanceOf(DebitCard::class, $debit);
        $this->assertEquals($debit->getBankBenifits(), 800);
        $this->assertEquals($debit->getRecharge(), 8000);
    }

    public function test_calling_car_from_general_abstract_factory()
    {
        $car = new CarFactory('BMW');
        $bmw = $car->getCar();
        $this->assertInstanceOf(BMWCar::class, $bmw);
        $this->assertEquals($bmw->calculatePrice(), 40000);

        $car = new CarFactory('benz');
        $benz = $car->getCar();
        $this->assertInstanceOf(BenzCar::class, $benz);
        $this->assertEquals($benz->calculatePrice(), 52000);
    }
}