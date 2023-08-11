<?php

namespace Modules\RolePermissions\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\RolePermissions\Entities\Repositories\RoleRepo;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    protected $repo;
        private $title;
        private $viewLists='Role::role.lists';
        private $viewCreate='Role::role.create';
        private $viewEdit='Role::role.edit';
        private $routeIndex='roles.index';
        private $route='roles';

        public function __construct(RoleRepo $repo)
        {
            $this->title=__('role');
            $this->repo=$repo;
            $this->middleware('permission:permission-role-list');
            $this->middleware('permission:permission-role-create', ['only' => ['create','store','edit','update','destroy']]);

        }

        public function index()
        {
            $lists=$this->repo->getAllRole();
            $route=$this->route;
            return view($this->viewLists,compact('lists','route'))->with('title',$this->title);
        }

        public function create()
        {
            $route=$this->route;
            $permissions=$this->repo->getPermission();
            return view($this->viewCreate,compact('permissions','route'))->with('title', $this->title);
        }

        public function store(Request $request)
        {
            $this->validate($request, [
                'name' => 'required|unique:roles,name',
                'permission' => 'required',
            ]);
            $this->repo->create($request->all());
            return redirect()->route($this->routeIndex)->with("flash_message",  __('flash message create success'));
        }

        public function show(Role $role)
        {
            //
        }

        public function edit(Role $role)
        {
            $route=$this->route;

            $permissions=$this->repo->getPermission();
            $rolePermissions=$this->repo->rolePermissions($role->id);
            return view($this->viewEdit,compact('rolePermissions','permissions','role','route'))->with('title', $this->title);
        }

        public function update(Request $request,Role $role)
        {
            $this->validate($request, [
                'name' => 'required',
                'permission' => 'required',
            ]);
            $this->repo->update($request->all(),$role->id);
            return redirect()->route($this->routeIndex)->with("flash_message",  __('flash message edit success'));
        }

        public function destroy(Role $role)
        {
            try {
                $role->delete();
                return redirect()->route($this->routeIndex)->with("flash_message", __('flash message delete success'));

            } catch (\Exception $e) {
                return redirect()->route($this->routeIndex)->with("flash_message",  __('flash message delete error'));
            }
        }

}
