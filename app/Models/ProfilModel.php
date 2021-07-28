<?php

class ProfilModel
{
    public function __construct()
    {
        $this->database = new Database;        
    }

    public function uploadPhoto($image)
    { 
        $dir = "C:\\xampp\htdocs\projet-fil-rouge\public\img";
        $name = str_replace(' ','-',strtolower($_FILES["Img"]["name"]));
        $type = $_FILES["Img"]["type"];
        if(move_uploaded_file($image,$dir."/".$name)) {
            return $name;    
        }
        else {
            return false;
        }
    }

    public function selectR($id)
    {
        $this->database->query('SELECT * FROM recite R, user U WHERE R.userId = U.userId AND R.userId = :id');

        $this->database->bind(':id', $id);

        $row = $this->database->resultSet();

        $number_rows = $this->database->rowCount();

        if ($number_rows > 0 ) {
            return $row;  
        }
        else {
            return false; 
        }

        // $this->database->query('SELECT * FROM recite');
        // return $this->database->resultSet();
    }

    public function addRecites($insertR)
    {
        $this->database->query('INSERT INTO `recite`
        (`preparation_time`, `title`, `description`, `imge_url`, `numbr_step`,`userId`) VALUES 
        (:prepTime, :title, :descp, :img, :numStep, :userId)');

        $this->database->bind(':prepTime', $insertR['pTime']);
        $this->database->bind(':title', $insertR['Title'] );
        $this->database->bind(':descp', $insertR['Descp']);
        $this->database->bind(':img', $insertR['Img']);
        $this->database->bind(':numStep', $insertR['nStep']);
        $this->database->bind(':userId', $_SESSION['user_id']);
        $this->database->execute();
    }

}


?>