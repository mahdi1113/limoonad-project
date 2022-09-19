<?php

require_once './base/BaseController.php';

class OrderController extends BaseController
{

    public function __construct()
    {
        $this->check();
    }

    public function all()
    {
        if("admin" == user('type'))
        {
            $orders = Order::all();
        }else{
            $orders = Order::all(['user_id' => user('id')]);
        }
        
        require_once './views/back/order/all.php';
    }

}