<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Blog\Entities\Repositories\BlogRepo;
use Modules\Product\Entities\Repositories\UserRepo;

class BlogController extends CrudController
{

    public function __construct(BlogRepo $repo)
    {
        $this->title=__('blog');
        $this->repo=$repo;
        $this->route='blogs';
        $this->viewLists='Blog::blog.lists';
        $this->viewCreate='Blog::blog.create';
        $this->viewEdit='Blog::blog.edit';
        $this->routeIndex='blogs.index';
    }




}
