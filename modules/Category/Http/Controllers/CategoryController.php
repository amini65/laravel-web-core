<?php

namespace Modules\Category\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Category\Entities\Repositories\ProductRepo;

class CategoryController extends CrudController
{

    public function __construct(ProductRepo $repo)
    {
        $this->title=__('category');
        $this->repo=$repo;
        $this->route='categories';
        $this->viewLists='Category::category.lists';
        $this->viewCreate='Category::category.create';
        $this->viewEdit='Category::category.edit';
        $this->viewShow='Category::category.seo';
        $this->routeIndex='categories.index';
    }

    public function seoStore(Request $request,$id)
    {
        $model=$this->repo->find($id);
        $this->repo->seo($model,$request->all());
        return redirect()->route($this->routeIndex)->with("flash_message",  __('flash message create success'));
    }
}
