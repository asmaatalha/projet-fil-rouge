<?php

class ProfilModel
{
    public function __construct()
    {
        $this->database = new Database;
        
    }

    public function selectR()
    {
        $this->database->query('SELECT * FROM recite');
        return $this->database->resultSet();
    }

    public function addRecites($insertR)
    {
        $this->database->query('INSERT INTO `recite`
        (`preparation_time`, `title`, `description`, `imge_url`, `numbr_step`) VALUES 
        (:prepTime, :title, :descp, :img, :numStep)');

        $this->database->bind(':prepTime', $insertR['pTime']);
        $this->database->bind(':title', ($insertR['Title']));
        $this->database->bind(':descp', $insertR['Descp']);
        $this->database->bind(':img', $insertR['Img']);
        $this->database->bind(':numStep', $insertR['nStep']);
        $this->database->execute();
    }

}


?>