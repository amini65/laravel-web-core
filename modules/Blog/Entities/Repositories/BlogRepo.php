<?php

namespace Modules\Blog\Entities\Repositories;

use Modules\Blog\Models\Blog;

class BlogRepo  implements CrudInterface
{
    private $model;

    public function __construct()
    {
        $this->model = resolve(Blog::class);
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
