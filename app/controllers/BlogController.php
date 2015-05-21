<?php

class BlogController extends \BaseController
{

   public function newBlog()
   {
       return View::make('newBlog');
   }

    public function createBlog()
    {
        $title=Input::get('title');
        $content=Input::get('content');
        $blog=new Blog;
        $blog->writerid=Auth::user()->id;
        $blog->title=$title;
        $blog->content=$content;
        $blog->save();
        return 'success';

    }

    public function readBlog($bid)
    {
        $blog=Blog::find($bid);
        return View::make('readBlog')->with('blog',$blog);
    }

    public function editBlog($bid)
    {
        $blog=Blog::find($bid);
        return View::make('editBlog')->with('blog',$blog);
    }

    public function updateBlog()
    {
        $bid=Input::get('id');
        $title=Input::get('title');
        $content=Input::get('content');
        $blog=Blog::find($bid);
        $blog->title=$title;
        $blog->content=$content;
        $blog->save();
        return 'Success';

    }

    public function deleteBlog()
    {
        $bid=Input::get('blogId');
        $blog=Blog::find($bid);
        $blog->delete();
        return 'Success';
    }

    public function getAllBlogs()
    {
        return View::make('allBlogs');
    }

    public function showAllBlogs()
    {
        return Datatable::collection(Blog::All())
            ->searchColumns('title','author')
            ->orderColumns('title','author')
            ->addColumn('title', function ($model) {
                return $model->title;
            })
            ->addColumn('author', function ($model) {

                return $model->getAuthor->name;
            })
            ->addColumn('Actions', function ($model) {
                return "<a href='/readBlog/" . $model->id . "' class='btn btn-success'>View</a>";
            })
            ->make();


    }

    public function showMyBlogs()
    {
        return Datatable::collection(Auth::user()->hasWritten)
            ->searchColumns('title','author')
            ->orderColumns('title','author')
            ->addColumn('title', function ($model) {
                return $model->title;
            })
            ->addColumn('author', function ($model) {

                return $model->getAuthor->name;
            })
            ->addColumn('Actions', function ($model) {
                return "<a href='/readBlog/" . $model->id . "' class='btn btn-success'>View</a> <a href='editBlog/".$model->id."' class='btn btn-warning'>edit</a><a href='#' class='btn btn-danger' onclick='deleteBlog(".$model->id.")'>delete</a>";
            })
            ->make();


    }





}
