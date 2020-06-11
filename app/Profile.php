<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{

    protected $table = 'profiles';

    protected $fillable = ['user_id', 'address', 'addr_detail', 'tell', 'open_hours', 'pic'];

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }
}
