<?php

require_once './base/BaseModel.php';
require_once './models/Item.php';

class Order extends BaseModel
{
    public function order_item()
    {
        global $db;
        $query = "SELECT COUNT(*) FROM items WHERE order_id = $this->id";
        $result = $db->find($query);
        return $result['COUNT(*)'];
    }

    public function items()
    {
        global $db;
        $query = "SELECT items.*, products.title AS product_name FROM items LEFT JOIN products ON items.product_id = products.id WHERE order_id = $this->id";
        $results = $db->fetch($query);
        
        return self::createList($results , "Item");
    }

    public function persion_date()
    {
        $ts = strtotime($this->date);
        $persion = gregorian_to_jalali(
            date('Y',$ts),
            date('m',$ts),
            date('d',$ts),
        );
        return implode('-',$persion);
    }

    public function user()
    {
        $user = User::find($this->user_id);
        return $user->fullName();
    }

}