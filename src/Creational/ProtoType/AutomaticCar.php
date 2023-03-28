<?php

namespace src\Creational\ProtoType;

class AutomaticCar extends CarProtoType
{
    public $model = 'Automatic';

    public function __clone(){

    }
}