<?php

require_once './base/BaseController.php';

class HomeController extends BaseController
{

    public function __construct()
    {
        $this->check();
    }

    public function dashboard()
    {
        // unset($_SESSION['user']);
        require 'views/dashboard.php';
    }
    
}