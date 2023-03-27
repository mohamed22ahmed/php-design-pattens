<?php
namespace src\Creational\Singelton;

class DBConnection
{
    private static $connectionObj = null;
    private static $operations = [];

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