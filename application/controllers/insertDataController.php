<?php

namespace App\Controllers;

use App\Core\Controller;
use Exception;

class InsertDataController extends Controller
{

    public function addToTheDatabase($title, $content, $date)
    {
        try {
            $this->checkNull($title, $content, $date);
            try {
                $this->model->addData($title, $content, $date);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function checkNull($title, $content, $date)
    {
        if ($title == NULL || $content == NULL || $date == NULL) {
            throw new Exception("Don't get data from url");
        }
        return true;
    }
}
