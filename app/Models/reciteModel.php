<?php

class reciteModel
{
    public function __construct()
    {
        $this->database = new Database;   
    }

    public function getReciteById($id)
    {
        $this->database->query('SELECT * FROM recite WHERE reciteId = :id');
        $this->database->bind(':id', $id);

        return $this->database->single();
    }
}

?>