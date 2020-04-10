<?php


namespace core;
use model\model;
use Exception;
/**
 * This is the "base controller class". All other "real" controllers extend this class.
 */
class Controller
{
    /**
     * @var null Database Connection
     */
    public $db = null;

    /**
     * @var null Model
     */
    public $model = null;

    /**
     * Whenever a controller is created, open a database connection too. The idea behind is to have ONE connection
     * that can be used by multiple models (there are frameworks that open one connection per model).
     */
    function __construct()
    {
        $this->openDatabaseConnection();
        $this->loadModel();
    }

    /**
     * Open the database connection with the credentials from application/config/config.php
     */
    private function openDatabaseConnection()
    {
         $this->db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if (!$this->db) {
            die("Error: Cannot connect to the database");
        } else {
            mysqli_set_charset($this->db, 'utf8');
        }
    }

    /**
     * Loads the "model".
     * @return object model
     */
    public function loadModel()
    {
        // require APP . 'model/model.php';
        // create new "model" (and pass the database connection)
        $this->model = new Model($this->db);
    }

    public function addToTheDatabase($title, $content, $link, $date)
    {
        try {
            $this->checkNull($title, $content, $link, $date);
           
            try {
               $this->model->addData($title, $content, $link, $date);
            }

            catch (Exception $e) {
                echo $e->getMessage();
            }

        }
        
        catch (Exception $e) {
            echo $e->getMessage();
        }

    }
    

    public function checkNull($title, $content, $link, $date) {
        if($title == NULL || $content == NULL || $link == NULL || $date == NULL) {
            throw new Exception("Don't get data from url");
        }
        

        return true;
    }


   


}
