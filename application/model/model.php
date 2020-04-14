<?php

namespace App\Model;

use Exception;

class Model
{
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function addData($title, $content, $date)
    {
        $title = addslashes($title);
        $content = addslashes($content);
        $date = addslashes($date);
        $sql = "INSERT INTO data(title, content, date) VALUES ('$title', '$content', '$date')";
        if (!mysqli_query($this->db, $sql)) {
            throw new Exception("Don't insert data to database");
        }
        return true;
    }
}
