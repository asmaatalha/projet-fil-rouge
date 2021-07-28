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
        $this->userSession->startSession();

        $recite = $this->userM->selectR($_SESSION['user_id']);

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
            header('location:' . URLROOT . '/ProfilController/pageProfil');
        }
        else {
            $this->view('UsersView/insert');
        }
    }
}

?>