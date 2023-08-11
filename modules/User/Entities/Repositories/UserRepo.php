<?php

namespace Modules\User\Entities\Repositories;

use Modules\User\Models\User;

class UserRepo implements CrudInterface
{
    private $model;

    public function __construct()
    {
        $this->model = resolve(User::class);
    }

    public function all()
    {
        return $this->model::query()
            ->get();
    }
    public function find(int $id)
    {
        return $this->model::query()
            ->where('id',$id)->first();
    }

    public function store(array $data)
    {
        return $this->model::query()
            ->create([
                'category_id'=>$data['category_id'],
                'title'=>$data['title'],
                'price'=>$data['price'],
                'image'=>$data['image'],
                'video'=>$data['video'],
                'description'=>$data['description'],
            ]);
    }

    public function update(int $id, array $data)
    {
        return $this->model::query()->find( $id)
            ->update([
                'category_id'=>$data['category_id'],
                'title'=>$data['title'],
                'price'=>$data['price'],
                'image'=>$data['image'],
                'video'=>$data['video'],
                'description'=>$data['description'],
            ]);
    }

    public function destroy(int $id)
    {

        $this->model::whereId($id)->delete();
    }
}
