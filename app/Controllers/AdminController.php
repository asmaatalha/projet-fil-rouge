<?php
class AdminController extends Controller
{
    public function __construct()
    {
        $this->adminM = $this->model('UserModel');        
    }
}


?>