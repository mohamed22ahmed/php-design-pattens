<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use src\Creational\Singelton\DBOperations;

class SingeltonTest extends TestCase
{
    public function test_array_is_empty_before_doing_DB_operation()
    {
        $operation = new DBOperations();
        $this->assertEmpty($operation->getOperations());
    }

    public function test_insert_singelton()
    {
        $operation = new DBOperations();
        
        $this->assertStringContainsString('inserted successfully',$operation->insertData());
        $operationsArray = $operation->getOperations();
        $this->assertNotEmpty($operationsArray);
        $this->assertCount(1, $operationsArray);
    }

    public function test_update_singelton()
    {
        $operation = new DBOperations();

        $this->assertStringContainsString('updated successfully', $operation->updateData());
        $operationsArray = $operation->getOperations();
        $this->assertNotEmpty($operationsArray);
        $this->assertCount(2, $operationsArray);
    }

    public function test_delete_singelton()
    {
        $operation = new DBOperations();
        
        $this->assertStringContainsString('deleted successfully', $operation->deleteData());
        $operationsArray = $operation->getOperations();
        $this->assertNotEmpty($operationsArray);
        $this->assertCount(3, $operationsArray);
    }

    public function test_show_singelton()
    {
        $operation = new DBOperations();
        
        $this->assertStringContainsString('show successfully', $operation->showData());
        $operationsArray = $operation->getOperations();
        $this->assertNotEmpty($operationsArray);
        $this->assertCount(4, $operationsArray);
    }
}