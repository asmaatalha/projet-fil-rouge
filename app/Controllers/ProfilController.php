<?php

class ProfilController extends Controller
{
    public function __construct()
    {
        $this->userM = $this->model('ProfilModel');

        $this->userSession = new Session;
    }

    public function pageProfil()
    {
        $recite = $this->userM->selectR();

        $data = [
            "recites" => $recite
        ];
        
        $this->view('UsersView/Profil', $data); 
    }

    public function insert()
    {
        if (isset($_POST['submit'])) {
            $data = [
                'pTime' => $_POST['time'],
                'Title' => $_POST['Title'],
                'Descp' => $_POST['Descp'],
                'Img' => $_POST['Img'],
                'nStep' => $_POST['nStep']
            ];
            $this->userM->addRecites($data);
            header('location:' . URLROOT . '/UserController/HomePage');
        }
        else {
            $this->view('UsersView/insert');
        }
    }
}

?>