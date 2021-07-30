<?php
class AdminController extends Controller
{
    public function __construct()
    {
        $this->adminM = $this->model('AdminModel');
        $this->Session = new Session;
    }

    public function admin()
    {
        $this->Session->startSession();

        $user = $this->adminM->selectUsers();

        $data = [
            "users" => $user,
        ];
        
        $this->view('UsersView/Admin', $data); 
    }
}


?>