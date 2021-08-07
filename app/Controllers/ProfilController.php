<?php

class ProfilController extends Controller
{
    public function __construct()
    {
        $this->profilM = $this->model('ProfilModel');

        $this->Session = new Session;
    }

    public function pageProfil()
    {
        $this->Session->startSession();

        $recite = $this->profilM->selectR($_SESSION['user_id']);

        $data = [
            "recites" => $recite
        ];
        
        $this->view('UsersView/Profil', $data); 
    }

    public function detailS(){
        $this->Session->startSession();
        $step = $this->profilM->selectS($_SESSION['user_id']);

        $data = [
            "steps" => $step
        ];
        
        $this->view('UsersView/details', $data); 
    }

    public function insert()
    {
        $this->Session->startSession();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'pTime' => $_POST['time'],
                'Title' => $_POST['Title'],
                'Descp' => $_POST['Descp'],
                'Img' => $this->profilM->uploadPhoto($_FILES["Img"]["tmp_name"]),
                'nStep' => $_POST['nStep']
            ];
            
            $this->profilM->addRecites($data);
            header('location:' . URLROOT . '/ProfilController/steps');
        }
        else {
            $this->view('UsersView/insert');
        }
    }

    public function steps()
    {
        $this->Session->startSession();

        if (isset($_POST['submit'])) {
            $data = [
                'step' => $_POST['descS']
            ];

            $this->profilM->addSteps($data);
            header('location:' . URLROOT . '/ProfilController/pageProfil');
        }
        else {
            $this->view('UsersView/step');
        }
    }

    public function delete($id)
    {
        $this->profilM->deleteRecite($id);
        header('location:' . URLROOT . '/ProfilController/pageProfil');
    }

    public function update($id)
    {
        if (isset($_POST['update'])) {
            $data = [
                'id' => $id,
                'pTime' => $_POST['prepTime'],
                'upTitle' => $_POST['title'],
                'Descp' => $_POST['descp'],
                'Img' => $_POST['img'],
                'nStep' => $_POST['nStep']
            ];
            $this->profilM->updateRecite($data);
            header('location:' . URLROOT . '/ProfilController/pageProfil');
        }
        else {
            $var = $this->profilM->getReciteById($id);
            $this->view('UsersView/update', $var);
        }

    }
}

?>