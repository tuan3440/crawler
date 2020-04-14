<?php
namespace App\Core;

use App\Model\Model;
use Exception;

class Controller
{
    
    public $db = null;
    public $model = null;

    function __construct()
    {
        $this->openDatabaseConnection();
        $this->loadModel();
    }

    private function openDatabaseConnection()
    {
        $this->db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if (!$this->db) {
            throw new Exception("Error: Cannot connect to the database");
        } else {
            mysqli_set_charset($this->db, 'utf8');
        }
    }

    public function loadModel()
    {
        $this->model = new Model($this->db);
    }
}
