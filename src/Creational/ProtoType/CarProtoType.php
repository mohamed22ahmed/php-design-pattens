<?php

namespace src\Creational\ProtoType;

abstract class CarProtoType
{
    public $model;

    abstract function __clone();
}