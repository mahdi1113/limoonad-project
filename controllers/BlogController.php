<?php

require_once './base/BaseController.php';

class BlogController extends BaseController
{
    protected $keyword = 'blog';

    public function __construct()
    {
        $this->check('admin');
    }

    public function all()
    {
        $blogs = Blog::all();
        require 'views/back/blog/blogs.php';
    }

    public function create()
    {
        require 'views/back/blog/create.php';
    }

    public function store()
    {
        $arr = $_POST;
        $arr['tags'] = str_replace("\r\n",",",$arr['tags']);
        $arr['image'] = $this->upload_file('image');
        $arr['bg'] = $this->upload_file('bg');
        Blog::store($arr);
        redirect(route('blog','all'),__('success'));

    }

    public function edit()
    {
        $id = $_GET['id'];
        $blog = Blog::find($id);
        require 'views/back/blog/edit.php';
    }

    public function update()
    {
        $id = $_GET['id'];
        $arr = $_POST;
        $blog = Blog::find($id);
        unlink($blog->image);
        $arr['image'] = $this->upload_file('image');
        $arr['bg'] = $this->upload_file('bg');
        Blog::update($arr,$id);
        redirect(route('blog','all'),__('update'));
    }

    public function delete()
    {
        $id = $_GET['id'];
        $blog = Blog::find($id);
        Blog::delete($blog->id);
        unlink($blog->image);
        redirect(route('blog','all'),__('delete'));
    }

}