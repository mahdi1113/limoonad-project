<?php

require_once 'models/Product.php';
require_once './base/BaseController.php';

class ProductController extends BaseController
{
    protected $keyword = 'product';

    public function __construct()
    {
        $this->check('admin');
    }
    
    public function all()
    {
        $products = Product::all();
        require 'views/back/product/Products.php';
    }

    public function create()
    {
        require 'views/back/product/create.php';
    }

    public function store()
    {
        $arr = $_POST;
        $arr['image'] = $this->upload_file('image');
        Product::store($arr);
        redirect(route('product','all'),__('success'));

    }

    public function edit()
    {
        $id = $_GET['id'];
        $product = Product::find($id);
        require 'views/back/product/edit.php';
    }

    public function update()
    {
        $id = $_GET['id'];
        $arr = $_POST;
        $product = Product::find($id);
        unlink($product->image);
        $arr['image'] = $this->upload_file('image');
        Product::update($arr,$id);
        redirect(route('product','all'),__('update'));
    }

    public function delete()
    {
        $id = $_GET['id'];
        $product = Product::find($id);
        Product::delete($product->id);
        unlink($product->image);
        redirect(route('product','all'),__('delete'));
    }

}