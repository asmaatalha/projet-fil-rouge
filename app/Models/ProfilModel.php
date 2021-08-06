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
    }

    public function selectS($id)
    {
        $this->database->query('SELECT * FROM steps S, recite R WHERE S.reciteId = R.reciteId AND S.reciteId = :id');
        $this->database->bind(':id', $id);
        $row = $this->database->resultSet();
        $num_rows = $this->database->rowCount();
        if ($num_rows > 0 ) {
            return $row;
        }
        else {
            return false; 
        }
    }

    // public function selectS()
    // {
    //     $this->database->query('SELECT * FROM steps');
    //     return $this->database->single();
    // }

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

    public function addSteps($step)
    {
        $this->database->query('INSERT INTO `steps`(`descS`) VALUES (:descS)');

        $this->database->bind(':descS', $step['step']);
        $this->database->execute();
    }

    public function deleteRecite($id)
    {
        $this->database->query('DELETE FROM recite WHERE reciteId = :id');
        
        $this->database->bind('id', $id);
        $result = $this->database->single();
        return $result;
    }

    public function updateRecite($upd)
    {
        $this->database->query('UPDATE `recite` SET 
        preparation_time = :prepT, title = :Title, description = :descp, imge_url = :img, numbr_step = :numStp WHERE reciteId = :id');

        $this->database->bind(':prepT', $upd['pTime']);
        $this->database->bind(':Title', $upd['upTitle']);
        $this->database->bind(':descp',$upd['Descp']);
        $this->database->bind(':img', $upd['Img']);
        $this->database->bind(':numStp', $upd['nStep']);

        $this->database->execute();
    }

}


?>