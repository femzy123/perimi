<?php

namespace App\Repositories;

use Illuminate\Databse\Eloquent\Model;

class Repository implements RepositoryInterface
{
    public $model;

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

    public function search($request)
    {
        $search = $request->input('search') ?? '';
        $category = $request->input('category') ?? '';

        return $this->model->when(

            $category, function ($query, $category) {
            return $query->where('eventcategory_id', $category);
        })->when(
            $search, function($query, $search) {

            return $query->where('name', 'LIKE', '%' . $search . '%')
                ->orWhere('description', 'LIKE', '%' . $search . '%');
        })->get();
    }

}