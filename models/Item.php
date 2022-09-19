<?php

require_once './base/BaseModel.php';

class Item extends BaseModel
{
    public function payable()
    {
        return $this->count * $this->amount;
    }
}