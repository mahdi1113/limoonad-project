<?php

require_once './base/BaseController.php';

class CardController extends BaseController
{

    public function __construct()
    {
        $this->check();
    }

    public function add()
    {

        $user = user();
        $id = $user->id;
        
        $order = Order::where([
            'user_id' => $id,
            'payed' => 0
        ]);

        if(!$order)
        {
            $order = Order::store([
                'user_id' => $id,
                'payed' => 0,
                'date' => date("Y-m-d H:i:s")
            ]);
        }

        $id = $_POST['product_id'];
        
        $product = Product::where(['id' => $id]);
        
        if(!$product)
        {
            die('hiiiiiiii');
        }

        $item = Item::where([
            'product_id' => $product->id,
            'order_id' => $order->id,
        ]);

        if($item){
            Item::update([
                'count' => $item->count + $_POST['count']
            ],$item->id);
        }else{
            $item = Item::store([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'amount' => $product->price,
                'count' => $_POST['count']
            ]);
        }

        Order::update([
            'total' => $order->total + ($product->price * $_POST['count']),
        ],$order->id);
    }

    public function delete()
    {
        $id = $_POST['id'];
        $item = Item::find($id);
        $order = Order::find($item->order_id);
        if($order->user_id == user('id'))
        {
            $new_total = $order->total - ($item->amount * $item->count);
            Order::update([
                'total' => $new_total,
            ],$order->id);
            Item::delete($id);
            redirect(page('cart'));
        }else{
            die('ACCESS DENIED');
        }
    }

    public function pay()
    {
        echo 'hi';
    }
}