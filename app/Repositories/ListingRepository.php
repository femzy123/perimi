<?php

namespace App\Repositories;

use App\Listing;
use App\Category;

class ListingRepository extends Repository
{
    public function __construct(Listing $listing)
    {
        $this->model = $listing;
    }

    public function list($orderByColumn = 'created_at', $perPage = 8)
    {
        return $this->model->orderBy($orderByColumn)->paginate($perPage);
    }

    public function categories()
    {
        return Category::all();
    }
}