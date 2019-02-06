<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class State extends Model
{
    public function listings() {
        return $this->hasMany('App\Listing');
    }
}
