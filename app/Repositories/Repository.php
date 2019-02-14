<?php

namespace App\Repositories;

use Illuminate\Databse\Eloquent\Model;

class Repository implements RepositoryInterface
{
    public $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data)
    {
        return $this->model->update($data);
    }

    public function delete()
    {
        return $this->model->delete();
    }

    public function find ($id)
    {
        return $this->model->findOrFail($id);
    }

}