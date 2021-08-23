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
        
        $this->view('UsersView/PageUser', $data); 
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
        // $image = $_FILES['Img']['tmp_name'];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'pTime' => $_POST['time'],
                'Title' => $_POST['Title'],
                'Descp' => $_POST['Descp'],
                'Img' => $_FILES["Img"]["name"],
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

    public function detail($id)
   {
        $detail = $this->profilM->getReciteById($id);
        $this->view('UsersView/details', $detail);
   }

    public function delete($id)
    {
        $this->profilM->deleteRecite($id);
        header('location:' . URLROOT . '/ProfilController/pageProfil');
    }

    public function edit($id)
    {
        $edit = $this->profilM->getReciteById($id);
        $this->view('UsersView/update', $edit);
    }

    public function update() 
    {
        if (isset($_POST['update'])) {
            if (!empty($_FILES['Img']) && !empty($_POST['Title']) && !empty($_POST['Descp']) && !empty($_POST['time']) && !empty($_POST['nStep'])) {
      
                $new_image = $_FILES['Img']['tmp_name'];
                $data = [
                    'id' => $_POST['id'],
                    'pTime' => $_POST['time'],
                    'old_image' => $_POST['old_image'],
                    'upTitle' => $_POST['Title'],
                    'Descp' => $_POST['Descp'],
                    'image' => $_FILES['Img']['name'],
                    'nStep' => $_POST['nStep']
                ];
                // var_dump($data);
                
                $old_image = $data['old_image'];
                $path="C:\\xampp\htdocs\projet_fils_rouge\public\img/$old_image";
                chown($path, 666);
            //    var_dump($old_image);
            //    die();
                
                if ($this->uploadPhoto($new_image) === true) {
                    $this->profilM->updateRecite($data);
                    
                    header('location:' . URLROOT . '/ProfilController/pageProfil');
                }
                else{
                    echo"hello yguysguydgc";
                }
            }
        }
    }

    public function uploadPhoto($image)
    {    
        $dir = "C:\\xampp\htdocs\projet-fil-rouge\public\img";
        $name = str_replace(' ','-',strtolower($_FILES["Img"]["name"]));
        $type = $_FILES["Img"]["type"];
        if(move_uploaded_file($image,$dir."/".$name)) {
            return true;    
        }
        else {
            return false;
        } 
    }

    public function updateP($user_id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['modifier'])) {
                $data = [
                    'id' => $user_id,
                    'Email' => $_POST['email'],
                    'Pass' => $_POST['password'],
                    'Fname' => $_POST['fname'],
                    'Lname' => $_POST['lname'],
                    'Name' => $_POST['name'],
                ];
                $this->profilM->updateProfil($data);
                header('location:' . URLROOT . '/ProfilController/pageProfil');
            }
        }else {
            $upd = $this->profilM->getUserById($user_id);
            $this->view('UsersView/updateP', $upd);
        }
    }
}

?>