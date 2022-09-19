<?php

require_once './base/BaseModel.php';
require_once './base/BaseController.php';


class UserController extends BaseController
{

    public function all()
    {
        require 'views/users.php';
    }

}