<?php

namespace Modules\RolePermissions\Entities\Repositories;

use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleRepo
{
    public static function getAll(){
        return Role::pluck('name','name')->all();
    }

    public static function getAllRole(){
        return Role::query()->get();
    }

    public function getPermission()
    {
        return Permission::query()->get();
    }

    public function create($params)
    {
        $role = Role::create(['name' => $params['name']]);
        $role->syncPermissions($params['permission']);
    }

    public function update($params,$id)
    {
        $role = Role::find($id);
        $role->name = $params['name'];
        $role->save();
        $role->syncPermissions($params['permission']);
    }

    public function rolePermissions($id)
    {
       return $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)

            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')

            ->all();
    }
}
