<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table = 'informations';

    protected $fillable = ['address', 'addr_detail', 'tell', 'open_hours', 'pic', 'user_id'];

    // protected $fillable = ['name'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
