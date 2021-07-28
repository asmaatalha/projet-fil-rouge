<?php
class AdminController extends Controller
{
    public function __construct()
    {
        $this->userM = $this->model('UserModel');        
    }
}


?>