<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $fillable = ['user_id', 'address', 'addr_detail', 'tell', 'open_hours', 'pic'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id', 'users');
    }
}
