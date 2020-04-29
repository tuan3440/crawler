<?php


use PHPUnit\Framework\TestCase;
use App\Controllers\InsertDataController;
use App\Core\Controller;
use App\Model\Model;

class InsertDataControllerTest extends TestCase
{
     public function testThrowExceptionWhenDataNull()
     {

          $mock = $this->createMock(Controller::class);
          $mock->method('openDatabaseConnection')
               ->willReturn(true);

          $mock->method('loadModel')
               ->willReturn(true);

          $data = new InsertDataController();
          $this->expectException(Exception::class);
          $data->checkNull(null, null, null);
     }

     public function testCheckNullReturnTrueWhenDataIsNotNull()
     {

          $mock = $this->createMock(Controller::class);
          $mock->method('openDatabaseConnection')
               ->willReturn(true);

          $mock->method('loadModel')
               ->willReturn(true);

          $data = new InsertDataController();
          $this->assertTrue($data->checkNull('a', 'b', 'c'));
     }
}
