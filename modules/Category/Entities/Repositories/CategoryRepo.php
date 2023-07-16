<?php

namespace Modules\Category\Entities\Repositories;

use Modules\Category\Models\Category;

class CategoryRepo implements CrudInterface
{
    private $model;

    public function __construct()
    {
        $this->model = resolve(Category::class);
    }

    public function all()
    {
        return $this->model::query()
            ->get();
    }
    public static function byType($model)
    {
        return Category::query()
            ->where('type',$model)
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
                'title'=>$data['title'],
                'type'=>$data['type'],
                'image'=>$data['image']
            ]);
    }

    public function seo($category,$params)
    {

        $activity['title'] =$params['title'];
        $activity['keyword'] =$params['keyword'];
        $activity['image'] =$params['image'];
        $activity['video'] =$params['video'];
        $activity['description'] =$params['description'];
        $activity['schema'] =$params['schema'];
        $category->seo()->updateOrCreate(
            ['seoable_id'=>$category->id],$activity
        );
    }
    public function update(int $id, array $data)
    {
        return $this->model::query()->find( $id)
            ->update([
                'title'=>$data['title'],
                'type'=>$data['type'],
                'image'=>$data['image']
            ]);
    }

    public function destroy(int $id)
    {

        $this->model::whereId($id)->delete();
    }
}
