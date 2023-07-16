<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Product\Entities\Repositories\ProductRepo;

class ProductController extends CrudController
{

    public function __construct(ProductRepo $repo)
    {
        $this->title=__('product');
        $this->repo=$repo;
        $this->route='categories';
        $this->viewLists='Product::product.lists';
        $this->viewCreate='Product::product.create';
        $this->viewEdit='Product::product.edit';
        $this->viewShow='Product::product.seo';
        $this->routeIndex='products.index';
    }

    public function seoStore(Request $request,$id)
    {
        $model=$this->repo->find($id);
        $this->repo->seo($model,$request->all());
        return redirect()->route($this->routeIndex)->with("flash_message",  __('flash message create success'));
    }
}
