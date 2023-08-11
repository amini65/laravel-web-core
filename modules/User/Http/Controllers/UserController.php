<?php

namespace Modules\User\Http\Controllers;

use Modules\User\Entities\Repositories\UserRepo;

class UserController extends CrudController
{
    public function __construct(UserRepo $repo)
    {
        $this->title=__('user');
        $this->repo=$repo;
        $this->route='users';
        $this->viewLists='User::user.lists';
        $this->viewCreate='User::user.create';
        $this->viewEdit='User::user.edit';
        $this->routeIndex='users.index';
    }
}
