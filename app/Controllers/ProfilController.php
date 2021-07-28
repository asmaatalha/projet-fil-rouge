<?php

class ProfilController extends Controller
{
    public function __construct()
    {
        $this->profilM = $this->model('ProfilModel');

        $this->userSession = new Session;
    }

    public function pageProfil()
    {
        $this->userSession->startSession();

        $recite = $this->profilM->selectR($_SESSION['user_id']);

        $data = [
            "recites" => $recite
        ];
        
        $this->view('UsersView/Profil', $data); 
    }

    public function insert()
    {
        $this->userSession->startSession();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'pTime' => $_POST['time'],
                'Title' => $_POST['Title'],
                'Descp' => $_POST['Descp'],
                'Img' => $this->profilM->uploadPhoto($_FILES["Img"]["tmp_name"]),
                'nStep' => $_POST['nStep']
            ];
            
            $this->profilM->addRecites($data);
            header('location:' . URLROOT . '/ProfilController/pageProfil');
        }
        else {
            $this->view('UsersView/insert');
        }
    }
}

?>