<?php

class reciteController extends Controller
{
    public function __construct()
    {
        $this->reciteM = $this->model('reciteModel');
        
        $this->Session = new Session;
   }

   public function details($id)
   {
        $details = $this->reciteM->getReciteById($id);
        $this->view('UsersView/details', $details);
   }

}


?>