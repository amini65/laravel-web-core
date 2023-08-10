<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Blog\Models\Blog;
use Modules\Category\Entities\Repositories\CategoryRepo;
use Modules\Category\Models\Category;
use Modules\Product\Entities\Repositories\ProductRepo;
use Modules\Product\Http\Controllers\CrudController;
use Modules\Product\Models\Product;

class BlogCategoryController extends CrudController
{

    public function __construct(CategoryRepo $repo)
    {
        $this->title=__('blog category');
        $this->repo=$repo;
        $this->route='blogCategories';
        $this->viewLists='Blog::category.lists';
        $this->viewCreate='Blog::category.create';
        $this->viewEdit='Blog::category.edit';
        $this->routeIndex='blogCategories.index';
    }

    public function index()
    {
        $lists=$this->repo->byType(Blog::class);
        $route=$this->route;
        return view($this->viewLists,compact('lists','route'))->with('title',$this->title);
    }


}
