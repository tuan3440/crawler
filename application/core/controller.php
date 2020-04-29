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

    public function openDatabaseConnection()
    {
        $this->db = mysqli_connect('localhost', 'root', '20173440', 'crawler_data');
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
