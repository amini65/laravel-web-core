<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Product\Entities\Repositories\ProductRepo;

class BlogController extends CrudController
{

    public function __construct(ProductRepo $repo)
    {
        $this->title=__('product');
        $this->repo=$repo;
        $this->route='products';
        $this->viewLists='Product::product.lists';
        $this->viewCreate='Product::product.create';
        $this->viewEdit='Product::product.edit';
        $this->routeIndex='products.index';
    }




}
