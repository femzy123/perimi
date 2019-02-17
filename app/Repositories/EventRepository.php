<?php

namespace App\Repositories;

class EventRepository extends Repository
{

    public function __construct($event)
    {
        $this->model = $event;
    }

    public function list($orderByColumn = 'created_at', $perPage = 8)
    {
        return $this->model->orderBy($orderByColumn)->paginate($perPage);
    }

}