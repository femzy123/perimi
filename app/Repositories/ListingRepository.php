<?php

namespace App\Repositories;

use App\Listing;

class ListingRepository extends Repository
{
    protected $model;

    public function __construct(Listing $listing)
    {
        $this->model = $listing;
    }
}