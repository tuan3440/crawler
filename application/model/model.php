<?php
namespace model;
use Exception;
class Model

{
    /**
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    function addData($title, $content, $link, $date)
    {
        $title = addslashes($title);
        $content = addslashes($content);
        $link = addslashes($link);
        $date = addslashes($date);
        $sql = "INSERT INTO vietnamnet(title, content, date, link) VALUES ('$title', '$content', '$date', '$link')";
        
     
        if (!mysqli_query($this->db, $sql)) {
          throw new Exception("Don't insert data to database"); 
        }
        
        return true;

    }

   
}
