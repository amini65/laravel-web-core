<?php

namespace Modules\Category\Http\Controllers;

class CategoryController extends CrudController
{

    public function __construct(CategoryRepo $repo)
    {
        $this->title=__('category');
        $this->repo=$repo;
        $this->route='categories';
        $this->viewLists='panel.category.lists';
        $this->viewCreate='panel.category.create';
        $this->viewEdit='panel.category.edit';
        $this->viewShow='panel.category.seo';
        $this->routeIndex='categories.index';
    }

    public function seoStore(Request $request,$id)
    {
        $model=$this->repo->find($id);
        $this->repo->seo($model,$request->all());
        return redirect()->route($this->routeIndex)->with("flash_message",  __('flash message create success'));
    }
}
