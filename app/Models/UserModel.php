<?php

class UserModel
{
    public function __construct()
    {
        $this->database = new Database;
        
    }

    public function SignUp($insert)
    {
        $this->database->query('INSERT INTO user (email, password, First_name, Last_name, username) VALUES (:email, :password, :First_name, :Last_name, :username)');
        
        $this->database->bind(':email', $insert['Email']);
        $this->database->bind(':password', password_hash($insert['passW'], PASSWORD_DEFAULT));
        $this->database->bind(':First_name', $insert['Fname']);
        $this->database->bind(':Last_name', $insert['Lname']);
        $this->database->bind(':username', $insert['Uname']);

        if($this->database->execute()){
            return true;
        }
        else {
            return false;
        }
    }
    
    public function Login($email, $password)
    {
        $this->database->query('SELECT * FROM user WHERE email = :email');
        
        $this->database->bind(':email', $email);
        // $this->database->bind(':pass', $pass);

        $row = $this->database->single();

        $number_rows = $this->database->rowCount();

        $pass = $row->password;

        if ($number_rows > 0 && password_verify($password, $pass)) {
            return $row;
        }
        else {
            return false; 
        }

    }

    public function findUser($email)
    {
        $this->database->query('SELECT * FROM user WHERE email = :email');
        $this->database->bind(':email', $email);

        $row = $this->database->single();

        if ($this->database->rowCount() > 0) {
            return true;
        }
        else {
            return false;
        }
    }

    public function getRecites()
    {
        $this->database->query('SELECT *FROM recite');
        return $this->database->resultSet();
    }

    public function addRecites()
    {
        // $this->database->query('INSERT INTO `recite`
        // (`preparation_time`, `title`, `description`, `imge_url`, `numbr_jaime`, `numbr_commentair`, `userId`, `numbr_step`) VALUES 
        // (:prepTime, :title, :descp, :img, :jaime, :comment, :, :numStep)');
    }
}


?>