<?php

class AdminModel
{
    public function __construct()
    {
        $this->database = new Database;
        
    }

    public function selectUsers()
    {
        $this->database->query('SELECT * FROM user');
        return $this->database->resultSet();
    }
}



?>