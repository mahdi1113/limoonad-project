<?php

require_once './base/BaseController.php';

class DisplayPagesController extends BaseController
{
    public function landing()
    {
        require './views/front/landing.php';
    }

    public function blogs()
    {
        $blogs = Blog::all();
        require './views/front/blogs.php';
    }

    public function products()
    {   
        $products = Product::all();
        require './views/front/products.php';
    }

    public function product()
    {
        $id = $_GET['id'];
        $product = Product::find($id);
        // var_dump($product->image);
        // die;
        require './views/front/show_product.php';
    }

    public function login()
    {
        $this->guest();
        $loged = $_SESSION['user'];
        if($loged)
        {
            redirect(route('home','dashboard'));
        }else{
            require('views/front/login.php');
        }
    }

    public function register()
    {
        $this->guest();
        require_once('./views/front/register.php');
    }

    public function edit()
    {
        $this->check();
        $user = user();
        require_once('./views/front/user_edit.php');
    }

    public function cart()
    {
        $this->check();
        $order = Order::where([
            'user_id' => user('id'),
            'payed' => 0,
        ]);
        
        require_once './views/front/cart.php';
    }

    public function show_items()
    {
        $id = $_GET['id'];
        $order = Order::find($id);
        var_dump($order->items());
    }
}