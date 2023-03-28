<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use src\Creational\ProtoType\AutomaticCar;
use src\Creational\ProtoType\ManualCar;

class PrototypeTest extends TestCase
{
    public function test_create_automatic_car_with_clone(){
        $auotmaticCar = new AutomaticCar;
        for($i=0; $i<10; $i++){
            $newCar = clone $auotmaticCar;
            $newCar->model = 'new Automatic '.$i;

            $this->assertInstanceOf(AutomaticCar::class, $newCar);
            $this->assertEquals('new Automatic '.$i, $newCar->model);
        }
    }

    public function test_create_manual_car_with_clone(){
        $manualCar = new ManualCar;
        for($i=0; $i<10; $i++){
            $newCar = clone $manualCar;
            $newCar->model = 'new Manual '.$i;
            
            $this->assertInstanceOf(ManualCar::class, $newCar);
            $this->assertEquals('new Manual '.$i, $newCar->model);
        }
    }
}