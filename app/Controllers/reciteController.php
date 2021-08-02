<?php

// class reciteController extends Controller
// {
//     public function __construct()
//     {
//         $this->reciteM = $this->model('reciteModel');
        
//         $this->Session = new Session;
//     }

//     public function homePage()
//     {
//         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//             if (isset($_POST['submit'])) {
                
//                 $search = $this->reciteM->searchTitle();
    
//                 $data = [
//                     "key" => $_POST['submit'],
//                 ];
//             }
//         }
//         else {
//             $recite = $this->reciteM->getRecites();

//             $data = [
//                 "recites" => $recite
//             ];
            
//             $this->view('UsersView/HomePage', $data); 
//         }
//     }
// }


?>