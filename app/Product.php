<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['user_id', 'name', 'price', 'pic'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id', 'users');
    }
}
