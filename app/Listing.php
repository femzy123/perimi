<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Listing extends Model
{
    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function state(){
        return $this->belongsTo('App\State');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
