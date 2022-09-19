<?php

require_once './base/BaseModel.php';

class User extends BaseModel
{

    public function fullName()
    {
        return $this->firstname . ' - ' . $this->lastname;
    }

}