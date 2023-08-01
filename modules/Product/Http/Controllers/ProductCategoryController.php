<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Category\Entities\Repositories\CategoryRepo;
use Modules\Category\Models\Category;
use Modules\Product\Entities\Repositories\ProductRepo;
use Modules\Product\Models\Product;

class ProductCategoryController extends CrudController
{

    public function __construct(CategoryRepo $repo)
    {
        $this->title=__('product category');
        $this->repo=$repo;
        $this->route='productCategories';
        $this->viewLists='Product::category.lists';
        $this->viewCreate='Product::category.create';
        $this->viewEdit='Product::category.edit';
        $this->routeIndex='productCategories.index';
    }

    public function index()
    {
        $lists=$this->repo->byType(Product::class);
        $route=$this->route;
        return view($this->viewLists,compact('lists','route'))->with('title',$this->title);
    }


}
