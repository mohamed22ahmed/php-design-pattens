<?php
namespace src\Creational\Singelton;

class DBConnection
{
    // Lazy Instantiation
    private static $connectionObj = null;

    // Early Instantiation
    // private static $operations = new DBConnection();

    private function __construct(){
        
    }

    public static function createBDConnection($operation)
    {
        if(DBConnection::$connectionObj == null){
            DBConnection::$connectionObj = new DBConnection();
        }
        DBConnection::$operations[] = $operation;
        return DBConnection::$connectionObj;
    }

    public static function getOperationsArray()
    {
        return DBConnection::$operations;
    }
}