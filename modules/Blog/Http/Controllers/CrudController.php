<?php

namespace Modules\Blog\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public $repo;
    public $title;
    public $viewLists;
    public $viewCreate;
    public $viewEdit;
    public $routeIndex;
    public $route;


    public function index()
    {
        $lists=$this->repo->all();
        $route=$this->route;
        return view($this->viewLists,compact('lists','route'))->with('title',$this->title);
    }

    public function create()
    {

        $route=$this->route;
        return view($this->viewCreate,compact('route'))->with('title', $this->title);
    }

    public function store(Request $request)
    {

        $this->repo->store($request->all());
        return redirect()->route($this->routeIndex)->with("flash_message",  __('flash message create success'));
    }

    public function show($id)
    {
        $route=$this->route;
        $model=$this->repo->find($id);
        return view($this->viewShow,compact('model','route'))->with('title', $this->title);

    }

    public function edit($id)
    {
        $route=$this->route;
        $model=$this->repo->find($id);
        return view($this->viewEdit,compact('model','route'))->with('title', $this->title);
    }

    public function update(Request $request,$id)
    {
        $this->repo->update($id,$request->all());
        return redirect()->route($this->routeIndex)->with("flash_message",  __('flash message edit success'));
    }

    public function destroy($id)
    {
        try {
            $this->repo->destroy($id);
            return redirect()->route($this->routeIndex)->with("flash_message", __('flash message delete success'));
        } catch (\Exception $e) {
            return redirect()->route($this->routeIndex)->with("flash_message",  __('flash message delete error'));
        }
    }

}
