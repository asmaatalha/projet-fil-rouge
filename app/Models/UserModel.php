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
        $this->database->bind(':password', $insert['passW']);
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
        $this->database->query('SELECT * FROM user WHERE email = :email AND password = :password');
        
        $this->database->bind(':email', $email);
        $this->database->bind(':password', $password);
        // $this->database->bind(':pass', $pass);
        $row = $this->database->single();

        if($row = $this->database->single()){
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
        $this->database->query('SELECT * FROM recite');
        return $this->database->resultSet();
    }

}


?>