<?php

namespace Modules\User\Entities\Repositories;

interface CrudInterface
{
    public function all();

    public function find(int $id);

    public function store(array $data);

    public function update(int $id, array $data);

    public function destroy(int $id);
}
