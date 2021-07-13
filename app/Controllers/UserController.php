<?php

class UserController extends Controller
{
    public function __construct()
    {
        $this->userM = $this->model('UserModel');
        
        $this->userSession = new Session;
    }

    public function SignUp()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'Email' => $_POST['email'],
                'passW' => $_POST['password'],
                'Fname' => $_POST['fname'],
                'Lname' => $_POST['lname'],
                'Uname' => $_POST['uname'],
            ];

            //validation Email 
            if (empty($data['Email'])) {
                echo "please enter your email";
            }
            else {
                // check if email already exists
                if ($this->userM->findUser($data['Email'])) {
                    echo "email already taken";
                }
            }

            //validation password
            if (empty($data['passW'])) {
                echo "please enter your password";
            }
            elseif (strlen($data['passW']) < 5) {
                echo "password must be at least 5 characters";
            }

            if ($this->userM->SignUp($data)) {
                
                redirect('UserController/Login');
            }
            else {
                $this->view('UsersView/SignUp');
            }

        }
        else {
            $this->view('UsersView/SignUp');
        }
    }

    public function Login()
    {

        $this->userSession->startSession();

        if (isset($_SESSION['email'])) {

            header('location:' . URLROOT . '/UserController/homePage');
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'Email' => $_POST['email'],
                'passW' => $_POST['password']
            ];
            //validation email
            if (empty($data['Email'])) {
                echo "please enter your email";
            }
            //validation password
            if (empty($data['passW'])) {
                echo "please enter your password";
            }
            //check for email et password
            if ($this->userM->findUser($data['Email'])) {
                
                $this->userSession->setSession('email', $data['Email']);

            }else {
                echo "please enter a valid email";
            }

        }
        else {
            $this->view('UsersView/Login');
        }
    }

    public function homePage()
    {
        $this->userSession->startSession();
        echo "gggggg";

        

    }

}

?>