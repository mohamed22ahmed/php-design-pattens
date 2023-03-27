<?php

namespace src\Creational\Singelton;

class DBOperations
{
    public function insertData(){
        $connection = DBConnection::createBDConnection('insert');
        return 'inserted successfully';
    }

    public function updateData(){
        $connection = DBConnection::createBDConnection('update');
        return 'updated successfully';
    }

    public function deleteData(){
        $connection = DBConnection::createBDConnection('delete');
        return 'deleted successfully';
    }

    public function showData(){
        $connection = DBConnection::createBDConnection('show');
        return 'show successfully';
    }

    public function getOperations()
    {
        return DBConnection::getOperationsArray();
    }
}