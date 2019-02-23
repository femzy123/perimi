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

    public function search($data)
    {
        function getType($type, $category)
        {
            switch($type) {
                case 'event':
                    return 'eventcategory_id' . ',' . strval($category);
                case 'listing':
                    return 'category_id' . ',' . strval($category);
            }
        }

        $search = $data['keyword'] ?? '';
        $category = getType($data['type'], $data['category'] ?? '');

        return $this->model->when(

            $category, function ($query, $type) {
                $str = explode(',',$type);
            return $query->where($str[0], $str[1]);
        })->when(
            $search, function($query, $search) {

            return $query->where('name', 'LIKE', '%' . $search . '%')
                ->orWhere('description', 'LIKE', '%' . $search . '%');
        })->get();

    }

}