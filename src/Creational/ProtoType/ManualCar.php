<?php

namespace src\Creational\ProtoType;

class ManualCar extends CarProtoType
{
    public $model = 'Manual';

    public function __clone(){

    }
}