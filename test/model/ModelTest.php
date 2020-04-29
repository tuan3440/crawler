<?php

use PHPUnit\Framework\TestCase;
use App\Model\Model;
use App\Core\Controller;

class ModelTest extends TestCase
{
    public function testAddDataInToTheDatabaseReturnTrue()
    {
        $model = new Model(mysqli_connect('localhost', 'root', '20173440', 'crawler_data'));
        $this->assertTrue($model->addData('a', 'b', 'c'));
    }
}
