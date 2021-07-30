<?php

class reciteModel
{
    public function __construct()
    {
        $this->database = new Database;   
    }

    public function getRecites()
    {
        $this->database->query('SELECT * FROM recite');
        return $this->database->resultSet();
    }

    public function searchTitle($key)
    {
        $this->database->query("SELECT * FROM recite WHERE title LIKE '%:key'");
        
        $this->database->bind(':key', $key);
        
        $this->database->resultSet();
    }
}

?>